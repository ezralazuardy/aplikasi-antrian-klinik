<?php
class C_MainMenu extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('M_mainmenu');
		$this->load->model('Admin/M_admin');
		date_default_timezone_set("Asia/Bangkok");
	}


	public function jadwal() {
		$data['jadwal'] = $this->M_admin->selectJadwal();
		$this->load->view("MainMenu/V_Jadwal",$data);
	}

	public function dokter() {
		$data['pegawai'] = $this->M_admin->selectPegawai();
		$this->load->view("MainMenu/V_Dokter",$data);
	}

	public function layanan(){
		$data['layanan'] = $this->M_admin->selectLayanan();
		$this->load->view("MainMenu/V_Layanan",$data);	
	}
}
