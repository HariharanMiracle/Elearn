<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SettingModel;

class AdminPanel extends Controller{
    public function index(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "home";
	
			echo view('templates/admin-header', $data);
			echo view('admin-home');
			return view('templates/footer');
		}
		else{
			session()->destroy();
            return redirect()->to(base_url());
		}
    }
}