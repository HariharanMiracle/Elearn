<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\TagsModel;
use App\Models\SettingModel;

class Tags extends Controller{
	public function create(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "tags";
			echo view('templates/admin-header', $data);
			echo view('admin/tags/create-tags');
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
			$data['nav'] = "tags";
			$tagsModel = new TagsModel();
	        $data['tags'] = $tagsModel->where('id', $id)->first();
			echo view('templates/admin-header', $data);
			echo view('admin/tags/edit-tags');
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
			$tagsModel = new TagsModel();
	        $data['tags'] = $tagsModel->where('id', $id)->delete();
	        return redirect()->to(base_url('/AdminPanel/tags'));
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
			$data['nav'] = "tags";
			$tagsModel = new TagsModel();
			$search = $this->request->getVar('search');
			$data['tags'] = $tagsModel->like('name', $search)->orderBy('name', 'ASC')->find();
			echo view('Templates/admin-header', $data);
			echo view('admin/tags/tags');
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
			$tagsModel = new TagsModel();
			$data = [
	            'name' => $this->request->getVar('name'),
	        ];
	        $save = $tagsModel->insert($data);
	        return redirect()->to(base_url('/AdminPanel/tags'));	
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
			$tagsModel = new TagsModel();
	        $id = $this->request->getVar('id');
	        $data = [
	            'name' => $this->request->getVar('name'),
			];
	        $save = $tagsModel->update($id, $data);
	        return redirect()->to(base_url('/AdminPanel/tags'));
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
			return redirect()->to(base_url());
		}    
	}
}