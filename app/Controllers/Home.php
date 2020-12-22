<?php namespace App\Controllers;

use App\Models\SettingModel;
use App\Models\TagsModel;
use App\Models\VideosModel;
use App\Models\EventsModel;
use App\Models\NoticeModel;
use App\Models\NewsModel;
use App\Models\CourseModel;
use App\Models\BooksModel;

class Home extends BaseController
{
	public function index() {
		session()->start();
		
		$settingModel = new SettingModel();
	    $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
		$data['nav'] = "home";

		$newsModel = new NewsModel();
		$data['news'] = $newsModel->orderBy('postedOn', 'DESC')->findAll();
		
		$eventsModel = new EventsModel();
		$data['events'] = $eventsModel->orderBy('postedOn', 'DESC')->findAll();
		
		$noticeModel = new NoticeModel();
	    $data['notice'] = $noticeModel->orderBy('postedOn', 'DESC')->findAll();

		echo view('templates/header', $data);
		echo view('home');
		return view('templates/footer');
	}

	public function youtube() {
		$settingModel = new SettingModel();
	    $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
		$data['nav'] = "youtube";

		$videosModel = new VideosModel();
	    $data['videos'] = $videosModel->orderBy('postedOn', 'DESC')->findAll();

		echo view('templates/header', $data);
		echo view('youtube');
		return view('templates/footer');
	}

	public function youtubeSearch(){
		$settingModel = new SettingModel();
	    $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
		$data['nav'] = "youtube";

		$videosModel = new VideosModel();
		$title = $this->request->getVar('title');
		if($title == null){
			$title = "";
		}
	    $data['videos'] = $videosModel->like('title', $title)->orderBy('postedOn', 'DESC')->findAll();

		echo view('templates/header', $data);
		echo view('youtube');
		return view('templates/footer');
	}

	public function books() {
		$settingModel = new SettingModel();
	    $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
		$data['nav'] = "books";

		$booksModel = new BooksModel();
	    $data['books'] = $booksModel->orderBy('id', 'DESC')->findAll();

		echo view('templates/header', $data);
		echo view('books');
		return view('templates/footer');
	}

	public function booksSearch() {
		$settingModel = new SettingModel();
	    $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
		$data['nav'] = "books";

		$booksModel = new BooksModel();
		$title = $this->request->getVar('title');
		if($title == null){
			$title = "";
		}
	    $data['books'] = $booksModel->like('title', $title)->orderBy('id', 'DESC')->findAll();

		echo view('templates/header', $data);
		echo view('books');
		return view('templates/footer');
	}
}