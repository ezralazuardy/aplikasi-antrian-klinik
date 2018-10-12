<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('M_login');
		date_default_timezone_set("Asia/Bangkok");
	}


	public function index() {
		$this->load->view("MainMenu/V_Page-login");
	}

	public function login(){
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$password = $this->encrypt->encode($this->encrypt->encode($password));

		if($this->M_login->checkUser($username)){
			if($data = $this->M_login->checkPassword($username,$password)){
				echo "<pre>";
				print_r($data);
				exit();
				$this->session->set_userdata($data);
			}else{
				$this->session->set_flashdata();
				redirect('Login');
			}
		}else{
			redirect('Login');	
		}
	}
}
