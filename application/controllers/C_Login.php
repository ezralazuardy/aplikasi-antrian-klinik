<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	public function __construct() {
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
		$this->load->view("V_Login");
	}

	public function authlogin() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		/*$password = md5(md5(md5(strrev($password))));*/
		if($hasil = $this->M_login->checkUser($username)) {
			if($data = $this->M_login->checkPassword($username,$password)) {
				$akses = $this->M_login->checkAccountType($username,$password);
				if ($akses == "client") {
					$this->session->set_userdata($data[0]);
					redirect('Dashboard');
				} else if ($akses == "admin") {
					$this->session->set_userdata($data[0]);
					redirect('DashboardAdmin');
				} else {
					$this->session->set_flashdata('error','Maaf, telah terjadi kesalahan.');
				}
				if ($akses == "client") {
					$this->session->set_userdata($data[0]);
				}
			} else {
				$this->session->set_flashdata('error','Maaf, kata sandi anda salah!');
				redirect('Login');
			}
		} else {
			$this->session->set_flashdata('error','Maaf, akun ini belum terdaftar!');
			redirect('Login');	
		}
	}
}