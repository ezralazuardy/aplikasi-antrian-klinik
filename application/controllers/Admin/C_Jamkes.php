<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Jamkes extends CI_Controller {

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
			if($status == 'error'){
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
		// generate all data jamkes
		$data['jamkes'] = $this->M_admin->selectJamkes();
		$this->load->view("V_Header");
		$this->load->view("Admin/Jamkes/V_Index",$data);
		$this->load->view("V_Footer");
	}


	public function inputJamkes(){
		$this->load->view("V_Header");
		$this->load->view("Admin/Jamkes/V_Input");
		$this->load->view("V_Footer");	
	}

/* ----------------------- VIEW LOAD END ----------------------------*/


/* ----------------------- INSERT SECTION ----------------------------*/
	public function insertJamkes() {
		$nama_jamkes = $this->input->post('nama_jamkes');
		$singkatan = $this->input->post('singkatan');

		$data  = array(
				'nama_jamkes' => $nama_jamkes, 
				'singkatan' => $singkatan
				);

		// echo "<pre>";
		// print_r($data);
		// exit();

		if($this->M_admin->insertJamkes($data)) {
			redirect('Jamkes/index/simpan');
		} else {
			redirect('Jamkes/index/error');
		}
	}


/*-=-=-=-=-=-=-=-=-=--=-=-=-=-=- DELETE SECTION -=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-= */

public function deleteJamkes($id) {
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);
		$id_dok	= $plaintext_string;
		if($this->M_admin->deleteJamkes($id_dok)) {
			redirect('Jamkes/index/delete');
		} else {
			redirect('Jamkes/index/error');
		}	
	}
}
