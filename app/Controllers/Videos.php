<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\VideosModel;
use App\Models\SettingModel;

class Videos extends Controller{
	public function create(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "youtube";
			echo view('templates/admin-header', $data);
			echo view('admin/videos/create-videos');
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
			$data['nav'] = "youtube";
			$videosModel = new VideosModel();
	        $data['videos'] = $videosModel->where('id', $id)->first();
			echo view('templates/admin-header', $data);
			echo view('admin/videos/edit-videos');
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
			$videosModel = new VideosModel();
	        $data['videos'] = $videosModel->where('id', $id)->delete();
	        return redirect()->to(base_url('/AdminPanel/videos'));
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
			$data['nav'] = "youtube";
			$videosModel = new VideosModel();
			$search = $this->request->getVar('search');
			$data['videos'] = $videosModel->like('title', $search)->orlike('postedOn', $search)->orderBy('postedOn', 'DESC')->find();
			echo view('Templates/admin-header', $data);
			echo view('admin/videos/videos');
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
			$videosModel = new VideosModel();
			$data = [
	            'title' => $this->request->getVar('title'),
                'link' => $this->request->getVar('link'), 
                'postedOn' => date("Y-m-d"),
	        ];
	        $save = $videosModel->insert($data);
	        return redirect()->to(base_url('/AdminPanel/videos'));	
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
			$videosModel = new VideosModel();
	        $id = $this->request->getVar('id');
	        $data = [
	            'title' => $this->request->getVar('title'),
                'link' => $this->request->getVar('link'), 
                'postedOn' => date("Y-m-d"),
	        ];
	        $save = $videosModel->update($id, $data);
	        return redirect()->to(base_url('/AdminPanel/videos'));
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
			return redirect()->to(base_url());
		}    
	}
}