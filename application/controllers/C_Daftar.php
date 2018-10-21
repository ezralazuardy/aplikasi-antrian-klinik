<?php
class C_Daftar extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('M_mainmenu');
		date_default_timezone_set("Asia/Bangkok");
	}


	public function index() {
		$data['list'] = $this->M_mainmenu->selectDokter();
		$this->load->view("MainMenu/V_Daftar",$data);
	}

	/* ----------------------- INSERT SECTION ----------------------------*/

	public function insertDaftar() {

		echo "<pre>";
		print_r($_POST);
		exit();

		$id_dokter = $this->input->post('id_dokter');
		$nama = $this->input->post('nama');
		$umur = $this->input->post('umur');
		$berat_badan = $this->input->post('berat_badan');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tanggal_besuk = $this->input->post('tanggal_besuk');
		$alamat = $this->input->post('alamat');

		$this->getAntrian();

		$data  = array(
			''
			'nama' => $nama, 
			'umur' => $umur, 
					'berat_badan' => $berat_badan, 
				'jenis_kelamin' => $jenis_kelamin, 	
				'tanggal_besuk' => $tanggal_besuk, 	
				'alamat' => $alamat ,
				'id_dokter' => $id_dokter 
				
				);
		// echo "<pre>";
		// print_r($data);
		// exit();
		if($this->M_admin->insertJadwal($data)) {
			redirect('Jadwal/index/simpan');
		} else {
			redirect('Jadwal/index/error');
		}
	}


	public function getAntrian(){
		if($data = $this->M_mainmenu->countAntrian()){

		}else{
			return 'A001';
		}
	}
}
