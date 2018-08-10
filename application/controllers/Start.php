<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

	public function index()
	{
        if (isset($_SESSION['userno'])){
            redirect(base_url('home'));
        }else{
            $this->load->view('template/headfile');
            $this->load->view('start');
            $this->load->view('template/footfile');
        }
	}

    public function signUp(){
        $this->load->view('template/signup_head');
        $this->load->view('signup');
        $this->load->view('template/signup_foot');
    }

    public function login(){
        $this->load->view('template/signup_head');
        $this->load->view('login');
        $this->load->view('template/signup_foot');
    }
}
