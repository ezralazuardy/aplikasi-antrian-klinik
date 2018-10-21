<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin extends CI_Controller {

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

	public function index() {
		$this->load->view("V_Header");
		$this->load->view("V_Sidebar");
		$this->load->view("Admin/Pegawai/V_Input");
		$this->load->view("V_Footer");
	}

	public function pegawai($status=false) {
		// check status insert update
		if($status){
			if($status == 'error'){
				$data['status'] = 
				'
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					<i class="fa fa-times-circle"></i> Terdapat Kesalahan dalam database
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
		// generate all data pegawai
		$data['pegawai'] = $this->M_admin->selectPegawai();
		$this->load->view("V_Header");
		$this->load->view("Admin/Pegawai/V_Index",$data);
		$this->load->view("V_Footer");
	}

	public function insert(){
		$this->load->view("V_Header");
		$this->load->view("Admin/Pegawai/V_Input");
		$this->load->view("V_Footer");	
	}

/* ----------------------- VIEW LOAD END ----------------------------*/

/* ----------------------- VIEW LOAD DETAIL -------------------------*/

public function pegawaiDetail($id = false) {
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);
		$data['id_dok']	= $plaintext_string;
		$data['list'] = $this->M_admin->getPegawai($plaintext_string);
		$data['id'] = $id;
		$this->load->view("V_Header");
		$this->load->view("Admin/Pegawai/V_Detail",$data);
		$this->load->view("V_Footer");
}

public function pegawaiEdit($id = false){
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);
		$data['id_dok']	= $plaintext_string;
		$data['list'] = $this->M_admin->getPegawai($plaintext_string);
		$this->load->view("V_Header");
		$this->load->view("Admin/Pegawai/V_Edit",$data);
		$this->load->view("V_Footer");
}

/*------------------------ VIEW LOAD DETAIL END ----------------------*/

/* ----------------------- INSERT SECTION ----------------------------*/
	public function insertPegawai(){
		$namaDokter = $this->input->post('nama-dokter');
		$tempatLahir = $this->input->post('tempat-lahir');
		$tanggalLahir = date_format(date_create($this->input->post('tanggal-lahir')),'Y-m-d');
		$alamat = $this->input->post('alamat');
		$jenisKelamin = $this->input->post('jenis-kelamin');
		$status = $this->input->post('status');
		$pendidikan = $this->input->post('pendidikan');
		$layanan = $this->input->post('layanan');
		$data  = array(
				'nama_dokter' => $namaDokter, 
				'tempat_lahir' => $tempatLahir,
				'tanggal_lahir' => $tanggalLahir,
				'alamat' => $alamat,
				'jenis_kelamin' => $jenisKelamin,
				'status' => $status,
				'pendidikan_akhir' => $pendidikan,
				'id_layanan' => $layanan
				);
		// echo "<pre>";
		// print_r($data);
		// exit();
		if($this->M_admin->insertPegawai($data)) {
			redirect('Admin/pegawai/simpan');
		} else {
			redirect('Admin/pegawai/error');
		}
	}

/*------------------------------- UPDATE SECTION --------------------------------*/
	public function updatePegawai(){
		$id = $this->input->post('id_dok');
		$namaDokter = $this->input->post('nama-dokter');
		$tempatLahir = $this->input->post('tempat-lahir');
		$tanggalLahir = date_format(date_create($this->input->post('tanggal-lahir')),'Y-m-d');
		$alamat = $this->input->post('alamat');
		$jenisKelamin = $this->input->post('jenis-kelamin');
		$status = $this->input->post('status');
		$pendidikan = $this->input->post('pendidikan');
		$layanan = $this->input->post('layanan');
		$data  = array(
				'nama_dokter' => $namaDokter, 
				'tempat_lahir' => $tempatLahir,
				'tanggal_lahir' => $tanggalLahir,
				'alamat' => $alamat,
				'jenis_kelamin' => $jenisKelamin,
				'status' => $status,
				'pendidikan_akhir' => $pendidikan,
				'id_layanan' => $layanan
				);
		// echo "<pre>";
		// print_r($data);
		// exit();
		if($this->M_admin->updatePegawai($id,$data)) {
			redirect('Admin/pegawai/update');
		} else {
			redirect('Admin/pegawai/error');
		}	
	}

/*-=-=-=-=-=-=-=-=-=--=-=-=-=-=- DELETE SECTION -=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-= */

public function deletePegawai($id){
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);
		$id_dok	= $plaintext_string;
		if($this->M_admin->deletePegawai($id_dok)) {
			redirect('Admin/pegawai/delete');
		} else {
			redirect('Admin/pegawai/error');
		}	
	}
}
