<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SettingModel;
use App\Models\TagsModel;
use App\Models\VideosModel;
use App\Models\EventsModel;

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

	public function videos(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "youtube";

			$videosModel = new VideosModel();
	        $data['videos'] = $videosModel->orderBy('postedOn', 'DESC')->findAll();

			echo view('templates/admin-header', $data);
			echo view('admin/videos/videos');
			return view('templates/footer');
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
            return redirect()->to(base_url());
		}
	}

	public function events(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "events";

			$eventsModel = new EventsModel();
	        $data['events'] = $eventsModel->orderBy('postedOn', 'DESC')->findAll();

			echo view('templates/admin-header', $data);
			echo view('admin/events/events');
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