<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\BooksModel;
use App\Models\Tag_bookModel;
use App\Models\TagsModel;
use App\Models\SettingModel;

class Books extends Controller{
	public function create(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "books";

			$tagsModel = new TagsModel();
			$data['tags'] = $tagsModel->orderBy('id', 'ASC')->findAll();

			echo view('templates/admin-header', $data);
			echo view('admin/books/create-books');
			return view('templates/footer');
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
			return redirect()->to(base_url());
		}
	}

	public function view($id = null){
		session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "books";

			$tag_bookModel = new Tag_bookModel();
			$data['tag_book'] = $tag_bookModel->orderBy('id', 'ASC')->findAll();

			$tagsModel = new TagsModel();
			$data['tags'] = $tagsModel->orderBy('id', 'ASC')->findAll();

			$booksModel = new BooksModel();
			$data['books'] = $booksModel->where('id', $id)->first();

			echo view('templates/admin-header', $data);
			echo view('admin/books/view-books');
			return view('templates/footer');
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
			return redirect()->to(base_url());
		}
	}

	public function edit($id = null){
		session()->start();
		
		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "books";
			$booksModel = new BooksModel();
			$data['books'] = $booksModel->where('id', $id)->first();
			$tagsModel = new TagsModel();
			$tag_bookModel = new Tag_bookModel();
	        $data['tags'] = $tagsModel->orderBy('id', 'ASC')->findAll();
	        $data['tag_book'] = $tag_bookModel->where('bookId', $id)->orderBy('id', 'ASC')->findAll();
			echo view('templates/admin-header', $data);
			echo view('admin/books/edit-books');
			return view('templates/footer');
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
			return redirect()->to(base_url());
		}        
	}

	public function delete($id = null){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$tag_bookModel = new Tag_bookModel();
			$data['tag_book'] = $tag_bookModel->where('bookId', $id)->findAll();

			foreach($data['tag_book'] as $tag_bookObj){
				$data['tag_book_del'] = $tag_bookModel->where('id', $tag_bookObj['id'])->delete();
			}

			$booksModel = new BooksModel();
			$data['books'] = $booksModel->where('id', $id)->delete();

	        return redirect()->to(base_url('/AdminPanel/books'));
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
			return redirect()->to(base_url());
		}    
	}

	public function search(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "books";
			$booksModel = new BooksModel();
			$search = $this->request->getVar('search');
			$data['books'] = $booksModel->like('title', $search)->orderBy('title', 'ASC')->find();
			echo view('Templates/admin-header', $data);
			echo view('admin/books/books');
			return view('Templates/footer');
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
			return redirect()->to(base_url());
		}    
	}

	public function store(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$booksModel = new BooksModel();
			$tag_bookModel = new Tag_bookModel();
            
            // Load Files
	        $validated = $this->validate([
	            'pdf' => [
	                'uploaded[pdf]',
	                'mime_in[pdf,application/pdf,application/x-download]',
	                'max_size[pdf,20000]',
	            ]
            ]);

            if ($validated) {
	        	$featuredImg = $this->request->getFile('pdf');
		        $fileName = $featuredImg->getRandomName();
                $featuredImg->move(ROOTPATH . '/uploads/pdf/books/', $fileName);

                $data = [
                    'title' => $this->request->getVar('title'),
                    'pdf' => $fileName,
                ];
				$save = $booksModel->insert($data);
				
				// save tag_books
				$tagIds = $this->request->getVar('tags');
				$splittedstring=explode(",",$tagIds);
				foreach ($splittedstring as $key => $value) {
					$dataTagBook = [
						'bookId' => $save,
						'tagId' => $value,
					];
					$savex = $tag_bookModel->insert($dataTagBook);
				}

    	        return redirect()->to(base_url('/AdminPanel/books'));	
            }
   
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
            return redirect()->to(base_url());
		}    
	}

	public function update(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$booksModel = new BooksModel();
			$tag_bookModel = new Tag_bookModel();
            $id = $this->request->getVar('id');
			
			$data['tag_book'] = $tag_bookModel->where('bookId', $id)->findAll();

			foreach($data['tag_book'] as $tag_bookObj){
				$data['tag_book_del'] = $tag_bookModel->where('id', $tag_bookObj['id'])->delete();
			}

            // Load Files
	        $validated = $this->validate([
	            'pdf' => [
	                'uploaded[pdf]',
	                'mime_in[pdf,application/pdf,application/x-download]',
	                'max_size[pdf,20000]',
	            ]
            ]);

            if ($validated) {
	        	$featuredImg = $this->request->getFile('image');
		        $fileName = $featuredImg->getRandomName();
                $featuredImg->move(ROOTPATH . '/uploads/pdf/books/', $fileName);
                $data = [
                    'title' => $this->request->getVar('title'),
                    'pdf' => $fileName,
                ];
				$save = $booksModel->update($id, $data);
				
				// save tag_books
				$tagIds = $this->request->getVar('tags');
				$splittedstring=explode(",",$tagIds);
				foreach ($splittedstring as $key => $value) {
					$dataTagBook = [
						'bookId' => $id,
						'tagId' => $value,
					];
					$save = $tag_bookModel->insert($dataTagBook);
				}

                return redirect()->to(base_url('/AdminPanel/books'));
            }
            else{
                $data = [
                    'title' => $this->request->getVar('title'),
                ];
				$save = $booksModel->update($id, $data);
				
				// save tag_books
				$tagIds = $this->request->getVar('tags');
				$splittedstring=explode(",",$tagIds);
				foreach ($splittedstring as $key => $value) {
					$dataTagBook = [
						'bookId' => $id,
						'tagId' => $value,
					];
					$save = $tag_bookModel->insert($dataTagBook);
				}

                return redirect()->to(base_url('/AdminPanel/books'));
            }
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
			return redirect()->to(base_url());
		}    
	}
}