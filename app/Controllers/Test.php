<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Test extends Controller{
    public function index(){
        // return view('test');
        echo '<div style="text-align: center"><h1 style="color: red">YOU DONT BELONG HERE!!!</h1></div>';
    }
}