<?php

if (!defined('BASEPATH')) exit('No direct script access allowed') ;

class Users extends CI_Controller
{
    public function  __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('header/header');
        $this->load->view('body/navbar');
        $this->load->view('body/user/user_main');
        $this->load->view('footer/footer');

    }

    public function add_user(){
        $this->load->view('header/header');
        $this->load->view('body/navbar');
        $this->load->view('body/user/user_add');
        $this->load->view('footer/footer');
    }
}

?>