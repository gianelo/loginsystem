<?php

if (!defined('BASEPATH')) exit('No direct script access allowed') ;

class Home extends CI_Controller
{
    public function  __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('header/header');
        $this->load->view('body/navbar');
        $this->load->view('body/users_view');
        $this->load->view('footer/footer');

    }
}

?>