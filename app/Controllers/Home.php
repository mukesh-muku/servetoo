<?php

namespace App\Controllers;
class Home extends BaseController
{
    protected $session;

    function __construct()
    {   $session = session();
        $this->session = \Config\Services::session();
        $this->session->start();
        // $this->LoginModel = new LoginModel();
        helper(['url', 'form']);
        helper("functions");
        date_default_timezone_set('Asia/Calcutta');
    }
    public function index()
    {
        $data['content_path']='home';
        return view('content',$data);
    }
    public function about_us()
    {
        $data['content_path']='about-us';
        return view('content',$data);
    }
    public function contact_us()
    {
        $data['content_path']='contact-us';
        return view('content',$data);
    }
}
