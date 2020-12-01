<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SettingModel;

class AdminPanel extends Controller{
    public function index(){
        session()->start();
		
		$_SESSION['isLoggedIn'] == 1;

		$settingModel = new SettingModel();
	    $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();

		$data['nav'] = "home";

		echo view('templates/admin-header', $data);
		echo view('home');
		return view('templates/footer');
    }
}