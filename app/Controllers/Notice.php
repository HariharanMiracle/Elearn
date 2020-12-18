<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\NoticeModel;
use App\Models\SettingModel;

class Notice extends Controller{
	public function create(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "notice";
			echo view('templates/admin-header', $data);
			echo view('admin/notice/create-notice');
			return view('templates/footer');
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
			return redirect()->to(base_url());
		}
	}

	public function edit($id = null){
		session()->start();
		
		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "notice";
			$noticeModel = new NoticeModel();
	        $data['notice'] = $noticeModel->where('id', $id)->first();
			echo view('templates/admin-header', $data);
			echo view('admin/notice/edit-notice');
			return view('templates/footer');
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
			return redirect()->to(base_url());
		}        
	}

	public function delete($id = null){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$noticeModel = new NoticeModel();
	        $data['notice'] = $noticeModel->where('id', $id)->delete();
	        return redirect()->to(base_url('/AdminPanel/notice'));
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
			return redirect()->to(base_url());
		}    
	}

	public function search(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "notice";
			$noticeModel = new NoticeModel();
			$search = $this->request->getVar('search');
			$data['notice'] = $noticeModel->like('title', $search)->orlike('postedOn', $search)->orderBy('postedOn', 'DESC')->find();
			
			$count = 0;
			foreach($data['notice'] as $obj){
				$subStr1 = substr($obj['description'],0,100);
				$subStr2 = substr($obj['description'],100,strlen($obj['description']));

				$data['notice'][$count]['description1'] = $subStr1;
				$data['notice'][$count]['description2'] = $subStr2;

				$count++;
			}
			
			echo view('Templates/admin-header', $data);
			echo view('admin/notice/notice');
			return view('Templates/footer');
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
			return redirect()->to(base_url());
		}    
	}

	public function store(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
            $noticeModel = new NoticeModel();
            
            // Load Images
	        $validated = $this->validate([
	            'image' => [
	                'uploaded[image]',
	                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
	                'max_size[image,20000]',
	            ]
            ]);
            
            if ($validated) {
	        	$featuredImg = $this->request->getFile('image');
		        $fileName = $featuredImg->getRandomName();
		        $featuredImg->move(ROOTPATH . '/uploads/images/notice/', $fileName);
	        
	        	$data = [
		            'title' => $this->request->getVar('title'),
		            'image' => $fileName,
                    'description' => $this->request->getVar('description'),
		            'postedOn' => date("Y-m-d"),
                ];
                
				$save = $noticeModel->insert($data);
    	        return redirect()->to(base_url('/AdminPanel/notice'));	
	        }
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
            return redirect()->to(base_url());
		}
	}

	public function update(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$noticeModel = new NoticeModel();
            $id = $this->request->getVar('id');
            
            // Load Images
	        $validated = $this->validate([
	            'image' => [
	                'uploaded[image]',
	                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
	                'max_size[image,20000]',
	            ]
            ]);

            if ($validated) {
	        	$featuredImg = $this->request->getFile('image');
		        $fileName = $featuredImg->getRandomName();
		        $featuredImg->move(ROOTPATH . '/uploads/images/notice/', $fileName);

	        	$data = [
		            'title' => $this->request->getVar('title'),
		            'image' => $fileName,
                    'description' => $this->request->getVar('description'),
		            'postedOn' => date("Y-m-d"),
                ];
                
    	        $save = $noticeModel->update($id, $data);
    	        return redirect()->to(base_url('/AdminPanel/notice'));	
            }
            else{
	        	$data = [
		            'title' => $this->request->getVar('title'),
                    'description' => $this->request->getVar('description'),
		            'postedOn' => date("Y-m-d"),
                ];
                
    	        $save = $noticeModel->update($id, $data);
    	        return redirect()->to(base_url('/AdminPanel/notice'));	
            }
		}
		else{
			session()->destroy();
			session()->start();
			$_SESSION['errLoginMsg'] = "Unauthorized access !!!";
			return redirect()->to(base_url());
		}    
	}
}