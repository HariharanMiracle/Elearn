<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\SettingModel;

class User extends Controller{
    
    public function create(){
        session()->start();

        if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADM"){
            $settingModel = new SettingModel();
            $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
            $data['nav'] = "user";
        
            echo view("templates/header", $data);
            echo view("admin/user/create-user");
            return view("templates/footer");
        }
        else{
            session()->destroy();
            return redirect()->to(base_url());
        }
    }

    public function register(){
        session()->start();

        $settingModel = new SettingModel();
        $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
        $data['nav'] = "";
        
        echo view("templates/header", $data);
        echo view("member/user/register");
        return view("templates/footer");
    }

    public function adminStore(){
        session()->start();

        $settingModel = new SettingModel();
        $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
        $data['nav'] = "user";
        
        if($_SESSION['isLoggedIn'] == 1 && $_SESSION['user']['privilege'] == "ADMIN"){
            $model = new UserModel();
            $user = $model->where('username', $this->request->getVar('username'))->first();
            if($user['username'] == ""){
                $data = [
                    'username' => $this->request->getVar('username'),
                    'password'  => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
                    'email'  => $this->request->getVar('email'),
                    'fname'  => $this->request->getVar('fname'),
                    'lname'  => $this->request->getVar('lname'),
                    'contact'  => $this->request->getVar('contact'),
                    'dob'  => $this->request->getVar('dob'),
                    'privilege'  => $this->request->getVar('privilege'),
                    'status'  => "ACTIVE",
                ];
                $save = $model->insert($data); 
                return redirect()->to(base_url());                
            }
            else{
                $data['userErrMsg'] = "Username is already taken...";
                echo view('Templates/admin-header', $data);
                echo view('admin/user/create-user');
                return view("templates/footer");
            }
        }
        else{
            session()->destroy();
            return redirect()->to(base_url());
        }
    }

    public function store(){
        $settingModel = new SettingModel();
        $data['setting'] = $settingModel->orderBy('id', 'ASC')->findAll();
        $data['nav'] = "";
        
        $model = new UserModel();
        $user = $model->where('username', $this->request->getVar('username'))->first();
        if($user['username'] == ""){
            $data = [
                'username' => $this->request->getVar('username'),
                'password'  => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
                'email'  => $this->request->getVar('email'),
                'fname'  => $this->request->getVar('fname'),
                'lname'  => $this->request->getVar('lname'),
                'contact'  => $this->request->getVar('contact'),
                'dob'  => $this->request->getVar('dob'),
                'privilege'  => "USER",
                'status'  => "ACTIVE",
            ];
            $save = $model->insert($data); 
            return redirect()->to(base_url());          
        }
        else{
            $data['userErrMsg'] = "Username is already taken...";
            echo view('Templates/header', $data);
            echo view('member/user/register');
            return view("templates/footer");
        }
    }

    public function login(){
        session()->start();

        $_SESSION['errLoginMsg'] = "";
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $modelUser = new UserModel();
        $user = $modelUser->where('username', $username)->first();

        if(password_verify($password, $user['password'])){
            // password valid
            if($user['status'] == 'ACTIVE'){
                // account is active
                if($user['privilege'] == "ADMIN"){
                    //Admin
                    $_SESSION['user'] = $user;
                    $_SESSION['isLoggedIn'] = 1;
                    return redirect()->to(base_url('AdminPanel'));
                }
                else{
                    //User
                    $_SESSION['user'] = $user;
                    $_SESSION['isLoggedIn'] = 1;
                    return redirect()->to(base_url());
                }
            }
            else{
                // account is deactivated
                $_SESSION['errLoginMsg'] = "Your account is deactivated...";
                return redirect()->to(base_url());          
            }
        }
        else{
            // credentials invalid
            $_SESSION['errLoginMsg'] = "Your account credential is invalid...";
            return redirect()->to(base_url());          
        }
    }
    
    public function logout(){
        session()->destroy();
        return redirect()->to(base_url());          
    }
}