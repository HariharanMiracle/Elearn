<?php namespace App\Controllers;

use App\Models\SettingModel;
use App\Models\TagsModel;
use App\Models\VideosModel;
use App\Models\EventsModel;
use App\Models\NoticeModel;
use App\Models\NewsModel;
use App\Models\CourseModel;
use App\Models\BooksModel;
use App\Models\ArticlesModel;
use App\Models\Tag_bookModel;
use App\Models\Tag_articleModel;

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

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
            return redirect()->to(base_url('AdminPanel'));
		}

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

		$tagsModel = new TagsModel();
	    $data['tags'] = $tagsModel->orderBy('id', 'DESC')->findAll();

		$booksModel = new BooksModel();
	    $data['books'] = $booksModel->orderBy('id', 'DESC')->findAll();

		echo view('templates/header', $data);
		echo view('books');
		return view('templates/footer');
	}

	public function booksSearch() {
		$state = false;
		$settingModel = new SettingModel();
	    $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
		$data['nav'] = "books";

		$tag_bookModel = new Tag_bookModel();
	    $data['tag_book'] = $tag_bookModel->orderBy('id', 'DESC')->findAll();

		$booksModel = new BooksModel();
		$title = $this->request->getVar('title');
		if($title == null){
			$title = "";
		}
		$data['books1'] = $booksModel->like('title', $title)->orderBy('id', 'DESC')->findAll();

		$tagsModel = new TagsModel();
	    $data['tags'] = $tagsModel->orderBy('id', 'DESC')->findAll();

		// Selected Tag Options
		$selecetedId = array();
		$i = 0;
		foreach($data['tags'] as $tagObj){
			$option = $this->request->getVar('tagOpt'.$tagObj['id']);
			if($option != 0){
				// selected
				$selecetedId[$i] = $tagObj['id'];
				$i++;
			}
		}

		if(count($selecetedId) == 0){
			$state = true;
		}
		else{
			$state = false;
		}


		$data['books'] = array();
		$c = 0;
		foreach($data['books1'] as $bookObj){
			$status = false;
			foreach($data['tag_book'] as $tag_bookObj){
				if($bookObj['id'] == $tag_bookObj['bookId']){
					foreach($selecetedId as $formId){
						if($formId == $tag_bookObj['tagId']){
							$status = true;
						}
					}
				}
			}

			if($status == true){
				$data['books'][$c] = $bookObj;
				$c++;
			}
		}

		if($state == true){
			$data['books'] = array();
			$data['books'] = $data['books1'];
		}
    
		echo view('templates/header', $data);
		echo view('books');
		return view('templates/footer');
	}

	public function course() {
		$settingModel = new SettingModel();
	    $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
		$data['nav'] = "course";

		$courseModel = new CourseModel();
	    $data['course'] = $courseModel->orderBy('id', 'DESC')->findAll();

		echo view('templates/header', $data);
		echo view('course');
		return view('templates/footer');
	}

	public function courseSearch() {
		$settingModel = new SettingModel();
	    $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
		$data['nav'] = "course";

		$courseModel = new CourseModel();
		$name = $this->request->getVar('name');
		if($name == null){
			$name = "";
		}
	    $data['course'] = $courseModel->like('name', $name)->orderBy('id', 'DESC')->findAll();

		echo view('templates/header', $data);
		echo view('course');
		return view('templates/footer');
	}

	public function contact(){
		$settingModel = new SettingModel();
	    $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
		$data['nav'] = "contact";

		echo view('templates/header', $data);
		echo view('contact');
		return view('templates/footer');
	}

	public function articles() {
		$settingModel = new SettingModel();
	    $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
		$data['nav'] = "articles";

		$tagsModel = new TagsModel();
	    $data['tags'] = $tagsModel->orderBy('id', 'DESC')->findAll();

		$articlesModel = new ArticlesModel();
	    $data['articles'] = $articlesModel->orderBy('id', 'DESC')->findAll();

		echo view('templates/header', $data);
		echo view('articles');
		return view('templates/footer');
	}

	public function articlesSearch() {
		$state = false;
		$settingModel = new SettingModel();
	    $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
		$data['nav'] = "articles";

		$tag_articleModel = new Tag_articleModel();
	    $data['tag_article'] = $tag_articleModel->orderBy('id', 'DESC')->findAll();

		$articlesModel = new ArticlesModel();
		$title = $this->request->getVar('title');
		if($title == null){
			$title = "";
		}
		$data['articles1'] = $articlesModel->like('title', $title)->orderBy('id', 'DESC')->findAll();

		$tagsModel = new TagsModel();
	    $data['tags'] = $tagsModel->orderBy('id', 'DESC')->findAll();

		// Selected Tag Options
		$selecetedId = array();
		$i = 0;
		foreach($data['tags'] as $tagObj){
			$option = $this->request->getVar('tagOpt'.$tagObj['id']);
			if($option != 0){
				// selected
				$selecetedId[$i] = $tagObj['id'];
				$i++;
			}
		}

		if(count($selecetedId) == 0){
			$state = true;
		}
		else{
			$state = false;
		}


		$data['articles'] = array();
		$c = 0;
		foreach($data['articles1'] as $articleObj){
			$status = false;
			foreach($data['tag_article'] as $tag_articleObj){
				if($articleObj['id'] == $tag_articleObj['articleId']){
					foreach($selecetedId as $formId){
						if($formId == $tag_articleObj['tagId']){
							$status = true;
						}
					}
				}
			}

			if($status == true){
				$data['articles'][$c] = $articleObj;
				$c++;
			}
		}

		if($state == true){
			$data['articles'] = array();
			$data['articles'] = $data['articles1'];
		}
    
		echo view('templates/header', $data);
		echo view('articles');
		return view('templates/footer');
	}
}