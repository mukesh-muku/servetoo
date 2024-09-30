<?php

namespace App\Controllers;
class Subscription extends BaseController
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
        $data['content_path']='subscription';
        return view('content',$data);
    }
}
