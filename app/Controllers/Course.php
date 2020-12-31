<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\CourseModel;
use App\Models\SettingModel;

class Course extends Controller{
	public function create(){
        session()->start();

		if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN" && $_SESSION['user']['status'] == "ACTIVE"){
			$settingModel = new SettingModel();
			$data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
			$data['nav'] = "course";
			echo view('templates/admin-header', $data);
			echo view('admin/course/create-course');
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
			$data['nav'] = "course";
			$courseModel = new CourseModel();
	        $data['course'] = $courseModel->where('id', $id)->first();
			echo view('templates/admin-header', $data);
			echo view('admin/course/edit-course');
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
			$courseModel = new CourseModel();
	        $data['course'] = $courseModel->where('id', $id)->delete();
	        return redirect()->to(base_url('/AdminPanel/course'));
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
			$data['nav'] = "course";
			$courseModel = new CourseModel();
			$search = $this->request->getVar('search');
			$data['course'] = $courseModel->like('name', $search)->orderBy('name', 'ASC')->find();
			
			echo view('Templates/admin-header', $data);
			echo view('admin/course/course');
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
            $courseModel = new CourseModel();
            
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
		        $featuredImg->move(ROOTPATH . '/uploads/images/course/', $fileName);
	        
	        	$data = [
		            'name' => $this->request->getVar('name'),
                    'description' => $this->request->getVar('description'),
                    'image' => $fileName,
                ];
                
				$save = $courseModel->insert($data);
    	        return redirect()->to(base_url('/AdminPanel/course'));	
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
			$courseModel = new CourseModel();
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
		        $featuredImg->move(ROOTPATH . '/uploads/images/course/', $fileName);

                $data = [
		            'name' => $this->request->getVar('name'),
                    'description' => $this->request->getVar('description'),
                    'image' => $fileName,
                ];
	        	
    	        $save = $courseModel->update($id, $data);
    	        return redirect()->to(base_url('/AdminPanel/course'));	
            }
            else{
	        	$data = [
		            'name' => $this->request->getVar('name'),
                    'description' => $this->request->getVar('description'),
                ];
                
    	        $save = $courseModel->update($id, $data);
    	        return redirect()->to(base_url('/AdminPanel/course'));	
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