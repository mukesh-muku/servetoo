<?php

namespace App\Controllers;
use App\Models\LoginModel;
class Signout extends BaseController
{
    protected $session;

    function __construct()
    {   $session = session();
        $this->session = \Config\Services::session();
        $this->session->start();
       // $this->LoginModel = new LoginModel();
        helper(['url', 'form']);
        helper("functions");
    }

    public function index()
    {
        unset($_SESSION['login_data']);
        unset($_SESSION['user_section']);
        //return view('login');

    }

    function redirect_on_login() {
        echo 'redirect_on_login';
        echo '<pre>'; print_r($_SESSION);//exit();
        return redirect()->to('Home');
        //return redirect()->to('dashboard');
    }
}
