<?php namespace App\Controllers;

use App\Models\SettingModel;

class Home extends BaseController
{
	public function index() {
		session()->start();
		
		$settingModel = new SettingModel();
	    $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
		$data['nav'] = "home";

		echo view('templates/header', $data);
		echo view('home');
		return view('templates/footer');
	}
}