<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index() {
		session()->start();
		
		$data['nav'] = "home";

		echo view('templates/header', $data);
		echo view('home');
		return view('templates/footer');
	}
}