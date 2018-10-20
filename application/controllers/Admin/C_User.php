<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller {

/* ----------------------- VIEW LOAD ----------------------------*/
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Admin/M_admin');
		date_default_timezone_set("Asia/Bangkok");
	}

	public function index($status=false) {
		// check status insert update
		if($status) {
			if($status == 'error') {
				$data['status'] = 
				'
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					<i class="false fa-times-circle"></i> Terdapat Kesalahan dalam database
				</div>
				';
			} else {
				$data['status'] = 
				'
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					<i class="fa fa-check-circle"></i> Data Berhasil di'.$status.'
				</div>
				';	
			}
		} else {
			$data['status'] = '';
		}
		// generate all data user
		$data['user'] = $this->M_admin->selectUser();
		$this->load->view("V_Header");
		$this->load->view("Admin/User/V_Index",$data);
		$this->load->view("V_Footer");
	}

	public function inputUser(){
		$this->load->view("V_Header");
		$this->load->view("Admin/User/V_Input");
		$this->load->view("V_Footer");	
	}

/* ----------------------- VIEW LOAD END ----------------------------*/

/* ----------------------- VIEW LOAD DETAIL -------------------------*/

public function userDetail($id = false) {
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);
		$data['id_user']	= $plaintext_string;
		$data['list'] = $this->M_admin->getUser($plaintext_string);
		$data['id'] = $id;
		$this->load->view("V_Header");
		$this->load->view("Admin/User/V_Detail",$data);
		$this->load->view("V_Footer");
}

public function userEdit($id = false) {
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);
		$data['id_user']	= $plaintext_string;
		$data['list'] = $this->M_admin->getUser($plaintext_string);
		$this->load->view("V_Header");
		$this->load->view("Admin/User/V_Edit",$data);
		$this->load->view("V_Footer");
}

/*------------------------ VIEW LOAD DETAIL END ----------------------*/

/* ----------------------- INSERT SECTION ----------------------------*/

	public function insertUser() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = md5(md5(md5(strrev($password))));
		$nama = $this->input->post('nama');
		$akses = $this->input->post('akses');
		$data  = array(
				'username' => $username, 
				'password' => $password,
				'nama' => $nama,
				'akses' => $akses
				);
		// echo "<pre>";
		// print_r($data);
		// exit();
		if($this->M_admin->insertUser($data)) {
			$this->session->set_flashdata('success', 'User berhasil ditambahkan!');
			redirect('User/index');
		} else {
			$this->session->set_flashdata('error', 'Terjadi error pada saat insert ke database');
			redirect('User/index');
		}
	}

/*------------------------------- UPDATE SECTION --------------------------------*/

	public function updateUser() {
		$id = $this->input->post('id_user');
		$username = $this->input->post('username');
		$nama = $this->input->post('nama');
		$akses = $this->input->post('akses');
		$data  = array(
				'username' => $username, 
				'password' => $password,
				'nama' => $nama,
				'akses' => $akses
				);
		// echo "<pre>";
		// print_r($data);
		// exit();
		if($this->M_admin->updateUser($id,$data)) {
			$this->session->set_flashdata('success', 'User berhasil diupdate!');
			redirect('User/index');
		} else {
			$this->session->set_flashdata('error', 'Terjadi error pada saat update ke database');
			redirect('User/index');
		}	
	}

/*-=-=-=-=-=-=-=-=-=--=-=-=-=-=- DELETE SECTION -=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-= */

public function deleteUser($id) {
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);
		$id_dok	= $plaintext_string;
		if($this->M_admin->deleteUser($id_dok)) {
			$this->session->set_flashdata('success', 'User berhasil didelete!');
			redirect('User/index');
		} else {
			$this->session->set_flashdata('error', 'Terjadi error pada saat delete dari database');
			redirect('User/index');
		}	
	}
}
