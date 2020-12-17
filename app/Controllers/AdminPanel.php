<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SettingModel;
use App\Models\TagsModel;

class AdminPanel extends Controller{
    public function index(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "home";
	
			echo view('templates/admin-header', $data);
			echo view('admin-home');
			return view('templates/footer');
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
            return redirect()->to(base_url());
		}
	}
	
	public function tags(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "tags";

			$tagsModel = new TagsModel();
	        $data['tags'] = $tagsModel->orderBy('name', 'ASC')->findAll();

			echo view('templates/admin-header', $data);
			echo view('admin/tags/tags');
			return view('templates/footer');
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
            return redirect()->to(base_url());
		}
	}
}