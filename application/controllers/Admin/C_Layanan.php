<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Layanan extends CI_Controller {

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
		// generate all data layanan
		$data['layanan'] = $this->M_admin->selectLayanan();
		$this->load->view("V_Header");
		$this->load->view("Admin/Layanan/V_Index",$data);
		$this->load->view("V_Footer");
	}


	public function inputLayanan(){
		$this->load->view("V_Header");
		$this->load->view("Admin/Layanan/V_Input");
		$this->load->view("V_Footer");	
	}

/* ----------------------- VIEW LOAD END ----------------------------*/

/* ----------------------- VIEW LOAD DETAIL -------------------------*/

public function layananDetail($id = false) {
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);
		$data['id_layanan']	= $plaintext_string;
		$data['list'] = $this->M_admin->getLayanan($plaintext_string);
		$data['id'] = $id;
		$this->load->view("V_Header");
		$this->load->view("Admin/Layanan/V_Detail",$data);
		$this->load->view("V_Footer");

}

public function layananEdit($id = false) {
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);
		$data['id_layanan']	= $plaintext_string;
		$data['list'] = $this->M_admin->getLayanan($plaintext_string);
		$this->load->view("V_Header");
		$this->load->view("Admin/Layanan/V_Edit",$data);
		$this->load->view("V_Footer");
}

/*------------------------ VIEW LOAD DETAIL END ----------------------*/

/* ----------------------- INSERT SECTION ----------------------------*/
	public function insertLayanan() {
		$nama = $this->input->post('nama');
		$layanan_medis = $this->input->post('layanan_medis');
		$info_medis = $this->input->post('info_medis');
		$data  = array(
				'nama' => $nama, 
				'layanan_medis' => $layanan_medis,
				'info_medis' => $info_medis
				);
		// echo "<pre>";
		// print_r($data);
		// exit();
		if($this->M_admin->insertLayanan($data)) {
			redirect('Layanan/index/simpan');
		} else {
			redirect('Layanan/index/error');
		}
	}

/*------------------------------- UPDATE SECTION --------------------------------*/

	public function updateLayanan(){
		$nama = $this->input->post('nama');
		$layanan_medis = $this->input->post('layanan_medis');
		$info_medis = $this->input->post('info_medis');
		$data  = array(
				'nama' => $nama, 
				'layanan_medis' => $layanan_medis,
				'info_medis' => $info_medis
				);
		// echo "<pre>";
		// print_r($data);
		// exit();
		if($this->M_admin->updateLayanan($id,$data)) {
			redirect('Layanan/index/update');
		} else {
			redirect('Layanan/index/error');
		}	
	}

/*-=-=-=-=-=-=-=-=-=--=-=-=-=-=- DELETE SECTION -=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-= */

public function deleteLayanan($id) {
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);
		$id_dok	= $plaintext_string;
		if($this->M_admin->deleteLayanan($id_dok)) {
			redirect('Layanan/index/delete');
		} else {
			redirect('Layanan/index/error');
		}	
	}
}
