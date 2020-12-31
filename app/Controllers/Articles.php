<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ArticlesModel;
use App\Models\Tag_articleModel;
use App\Models\TagsModel;
use App\Models\SettingModel;

class Articles extends Controller{
	public function create(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "articles";

			$tagsModel = new TagsModel();
			$data['tags'] = $tagsModel->orderBy('id', 'ASC')->findAll();

			echo view('templates/admin-header', $data);
			echo view('admin/articles/create-articles');
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
			$data['nav'] = "articles";

			$tag_articleModel = new Tag_articleModel();
			$data['tag_article'] = $tag_articleModel->orderBy('id', 'ASC')->findAll();

			$tagsModel = new TagsModel();
			$data['tags'] = $tagsModel->orderBy('id', 'ASC')->findAll();

			$articlesModel = new ArticlesModel();
			$data['articles'] = $articlesModel->where('id', $id)->first();

			echo view('templates/admin-header', $data);
			echo view('admin/articles/view-articles');
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
			$data['nav'] = "articles";
			$articlesModel = new ArticlesModel();
			$data['articles'] = $articlesModel->where('id', $id)->first();
			$tagsModel = new TagsModel();
			$tag_articleModel = new Tag_articleModel();
	        $data['tags'] = $tagsModel->orderBy('id', 'ASC')->findAll();
	        $data['tag_article'] = $tag_articleModel->where('articleId', $id)->orderBy('id', 'ASC')->findAll();
			echo view('templates/admin-header', $data);
			echo view('admin/articles/edit-articles');
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
			$tag_articleModel = new Tag_articleModel();
			$data['tag_article'] = $tag_articleModel->where('articleId', $id)->findAll();

			foreach($data['tag_article'] as $tag_articleObj){
				$data['tag_article_del'] = $tag_articleModel->where('id', $tag_articleObj['id'])->delete();
			}

			$articlesModel = new ArticlesModel();
			$data['articles'] = $articlesModel->where('id', $id)->delete();

	        return redirect()->to(base_url('/AdminPanel/articles'));
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
			$data['nav'] = "articles";
			$articlesModel = new ArticlesModel();
			$search = $this->request->getVar('search');
			$data['articles'] = $articlesModel->like('title', $search)->orderBy('title', 'ASC')->find();
			echo view('Templates/admin-header', $data);
			echo view('admin/articles/articles');
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
			$articlesModel = new ArticlesModel();
			$tag_articleModel = new Tag_articleModel();
            
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
                $featuredImg->move(ROOTPATH . '/uploads/pdf/articles/', $fileName);

                $data = [
                    'title' => $this->request->getVar('title'),
                    'pdf' => $fileName,
                ];
				$save = $articlesModel->insert($data);
				
				// save tag_articles
				$tagIds = $this->request->getVar('tags');
				$splittedstring=explode(",",$tagIds);
				foreach ($splittedstring as $key => $value) {
					$dataTagArticle = [
						'articleId' => $save,
						'tagId' => $value,
					];
					$savex = $tag_articleModel->insert($dataTagArticle);
				}

    	        return redirect()->to(base_url('/AdminPanel/articles'));	
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
			$articlesModel = new ArticlesModel();
			$tag_articleModel = new Tag_articleModel();
            $id = $this->request->getVar('id');
			
			$data['tag_article'] = $tag_articleModel->where('articleId', $id)->findAll();

			foreach($data['tag_article'] as $tag_articleObj){
				$data['tag_article_del'] = $tag_articleModel->where('id', $tag_articleObj['id'])->delete();
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
                $featuredImg->move(ROOTPATH . '/uploads/pdf/articles/', $fileName);
                $data = [
                    'title' => $this->request->getVar('title'),
                    'pdf' => $fileName,
                ];
				$save = $articlesModel->update($id, $data);
				
				// save tag_articles
				$tagIds = $this->request->getVar('tags');
				$splittedstring=explode(",",$tagIds);
				foreach ($splittedstring as $key => $value) {
					$dataTagArticle = [
						'articleId' => $id,
						'tagId' => $value,
					];
					$save = $tag_articleModel->insert($dataTagArticle);
				}

                return redirect()->to(base_url('/AdminPanel/articles'));
            }
            else{
                $data = [
                    'title' => $this->request->getVar('title'),
                ];
				$save = $articlesModel->update($id, $data);
				
				// save tag_articles
				$tagIds = $this->request->getVar('tags');
				$splittedstring=explode(",",$tagIds);
				foreach ($splittedstring as $key => $value) {
					$dataTagArticle = [
						'articleId' => $id,
						'tagId' => $value,
					];
					$save = $tag_articleModel->insert($dataTagArticle);
				}

                return redirect()->to(base_url('/AdminPanel/articles'));
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