<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\EventsModel;
use App\Models\SettingModel;

class Events extends Controller{
	public function create(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "events";
			echo view('templates/admin-header', $data);
			echo view('admin/events/create-events');
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
			$data['nav'] = "events";
			$eventsModel = new EventsModel();
	        $data['events'] = $eventsModel->where('id', $id)->first();
			echo view('templates/admin-header', $data);
			echo view('admin/events/edit-events');
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
			$eventsModel = new EventsModel();
	        $data['events'] = $eventsModel->where('id', $id)->delete();
	        return redirect()->to(base_url('/AdminPanel/events'));
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
			$data['nav'] = "events";
			$eventsModel = new EventsModel();
			$search = $this->request->getVar('search');
			$data['events'] = $eventsModel->like('title', $search)->orlike('eventDate', $search)->orlike('postedOn', $search)->orderBy('name', 'ASC')->find();
			echo view('Templates/admin-header', $data);
			echo view('admin/events/events');
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
            $eventsModel = new EventsModel();
            
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
		        $featuredImg->move(ROOTPATH . '/uploads/images/events/', $fileName);
	        
	        	$data = [
		            'title' => $this->request->getVar('title'),
		            'image' => $fileName,
                    'link' => $this->request->getVar('link'),
		            'eventDate' => $this->request->getVar('eventDate'),
		            'eventTime' => $this->request->getVar('eventTime'),
		            'postedOn' => date("Y-m-d"),
		            'meetingId' => $this->request->getVar('meetingId'),
		            'passcode' => $this->request->getVar('passcode'),
		            'timeZone' => $this->request->getVar('timeZone'),
                ];
                
                $save = $eventsModel->insert($data);
    	        return redirect()->to(base_url('/AdminPanel/events'));	
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
			$eventsModel = new EventsModel();
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
		        $featuredImg->move(ROOTPATH . '/uploads/images/events/', $fileName);
            
                $dateTxt = "";
                if($this->request->getVar('eventDateX') == ""){
                    $dateTxt = $this->request->getVar('eventDate');
                }
                else{
                    $dateTxt = $this->request->getVar('eventDateX');
                }

	        	$data = [
		            'title' => $this->request->getVar('title'),
		            'image' => $fileName,
                    'link' => $this->request->getVar('link'),
		            'eventDate' => $dateTxt,
		            'eventTime' => $this->request->getVar('eventTime'),
		            'postedOn' => date("Y-m-d"),
		            'meetingId' => $this->request->getVar('meetingId'),
		            'passcode' => $this->request->getVar('passcode'),
		            'timeZone' => $this->request->getVar('timeZone'),
                ];
                
    	        $save = $eventsModel->update($id, $data);
    	        return redirect()->to(base_url('/AdminPanel/events'));	
            }
            else{
                $dateTxt = "";
                if($this->request->getVar('eventDateX') == ""){
                    $dateTxt = $this->request->getVar('eventDate');
                }
                else{
                    $dateTxt = $this->request->getVar('eventDateX');
                }

	        	$data = [
		            'title' => $this->request->getVar('title'),
                    'link' => $this->request->getVar('link'),
		            'eventDate' => $dateTxt,
		            'eventTime' => $this->request->getVar('eventTime'),
		            'postedOn' => date("Y-m-d"),
		            'meetingId' => $this->request->getVar('meetingId'),
		            'passcode' => $this->request->getVar('passcode'),
		            'timeZone' => $this->request->getVar('timeZone'),
                ];
                
    	        $save = $eventsModel->update($id, $data);
    	        return redirect()->to(base_url('/AdminPanel/events'));	
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