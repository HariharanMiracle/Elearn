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
}