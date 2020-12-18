<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SettingModel;
use App\Models\TagsModel;
use App\Models\VideosModel;
use App\Models\EventsModel;
use App\Models\NoticeModel;

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

	public function notice(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "notice";

			$noticeModel = new NoticeModel();
	        $data['notice'] = $noticeModel->orderBy('postedOn', 'DESC')->findAll();

			$count = 0;
			foreach($data['notice'] as $obj){
				$subStr1 = substr($obj['description'],0,100);
				$subStr2 = substr($obj['description'],100,strlen($obj['description']));

				$data['notice'][$count]['description1'] = $subStr1;
				$data['notice'][$count]['description2'] = $subStr2;

				$count++;
			}

			echo view('templates/admin-header', $data);
			echo view('admin/notice/notice');
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