<?php

namespace App\Controllers;
class Services extends BaseController
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
    public function index($sub_services='services')
    {
       // echo $sub_services;exit();

       // $data['content_path']='services';
        $data['sub_services']=$sub_services;
        $data['content_path']=$sub_services;
        return view('content',$data);
    }

  
}
