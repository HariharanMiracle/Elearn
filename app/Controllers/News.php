<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\NewsModel;
use App\Models\SettingModel;

class News extends Controller{
	public function create(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "news";
			echo view('templates/admin-header', $data);
			echo view('admin/news/create-news');
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
			$data['nav'] = "news";
			$newsModel = new NewsModel();
	        $data['news'] = $newsModel->where('id', $id)->first();
			echo view('templates/admin-header', $data);
			echo view('admin/news/edit-news');
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
			$newsModel = new NewsModel();
	        $data['news'] = $newsModel->where('id', $id)->delete();
	        return redirect()->to(base_url('/AdminPanel/news'));
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
			$data['nav'] = "news";
			$newsModel = new NewsModel();
			$search = $this->request->getVar('search');
			$data['news'] = $newsModel->like('title', $search)->orlike('postedOn', $search)->orlike('newsDate', $search)->orderBy('postedOn', 'DESC')->find();
			
			echo view('Templates/admin-header', $data);
			echo view('admin/news/news');
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
            $newsModel = new NewsModel();
            
            // Load Images
	        $validated = $this->validate([
	            'image' => [
	                'uploaded[image]',
	                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
	                'max_size[image,20000]',
	            ]
            ]);
            
            if ($validated) {
	        	$featuredImg = $this->request->getFile('image');
		        $fileName = $featuredImg->getRandomName();
		        $featuredImg->move(ROOTPATH . '/uploads/images/news/', $fileName);
	        
	        	$data = [
		            'title' => $this->request->getVar('title'),
		            'image' => $fileName,
                    'description' => $this->request->getVar('description'),
                    'link' => $this->request->getVar('link'),
                    'newsDate' => $this->request->getVar('newsDate'),
                    'newsTime' => $this->request->getVar('newsTime'),
		            'postedOn' => date("Y-m-d"),
                ];
                
				$save = $newsModel->insert($data);
    	        return redirect()->to(base_url('/AdminPanel/news'));	
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
			$newsModel = new NewsModel();
            $id = $this->request->getVar('id');
            
            // Load Images
	        $validated = $this->validate([
	            'image' => [
	                'uploaded[image]',
	                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
	                'max_size[image,20000]',
	            ]
            ]);

            if ($validated) {
	        	$featuredImg = $this->request->getFile('image');
		        $fileName = $featuredImg->getRandomName();
		        $featuredImg->move(ROOTPATH . '/uploads/images/news/', $fileName);

                $dateTxt = "";
                if($this->request->getVar('newsDateX') == ""){
                    $dateTxt = $this->request->getVar('newsDate');
                }
                else{
                    $dateTxt = $this->request->getVar('newsDateX');
                }

	        	$data = [
		            'title' => $this->request->getVar('title'),
		            'image' => $fileName,
                    'description' => $this->request->getVar('description'),
                    'link' => $this->request->getVar('link'),
                    'newsDate' => $dateTxt,
                    'newsTime' => $this->request->getVar('newsTime'),
		            'postedOn' => date("Y-m-d"),
                ];
                
    	        $save = $newsModel->update($id, $data);
    	        return redirect()->to(base_url('/AdminPanel/news'));	
            }
            else{
                $dateTxt = "";
                if($this->request->getVar('newsDateX') == ""){
                    $dateTxt = $this->request->getVar('newsDate');
                }
                else{
                    $dateTxt = $this->request->getVar('newsDateX');
                }

	        	$data = [
		            'title' => $this->request->getVar('title'),
                    'description' => $this->request->getVar('description'),
                    'link' => $this->request->getVar('link'),
                    'newsDate' => $dateTxt,
                    'newsTime' => $this->request->getVar('newsTime'),
		            'postedOn' => date("Y-m-d"),
                ];
                
    	        $save = $newsModel->update($id, $data);
    	        return redirect()->to(base_url('/AdminPanel/news'));	
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