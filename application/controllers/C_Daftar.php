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

	public function generate($id){
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$id = $this->encrypt->decode($plaintext_string);

		$data =  array();
		$data['list'] = $this->M_mainmenu->generate($id);
		// echo "<pre>";
		// print_r($data);
		// exit();
		$this->load->view("MainMenu/V_Generate",$data);
	}

	/* ----------------------- INSERT SECTION ----------------------------*/

	public function insertDaftar() {

		$id_dokter = $this->input->post('id_dokter');
		$nama = $this->input->post('nama');
		$umur = $this->input->post('umur');
		$berat_badan = $this->input->post('berat_badan');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tanggal_besuk = $this->input->post('tanggal_besuk');
		$alamat = $this->input->post('alamat');

		$antrian = $this->getAntrian();

		$data  = array(
			'id_antrian' => $antrian,
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

		/* Encrypt ID */
		$encrypted_string = $this->encrypt->encode($antrian);
		$id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);

		if($this->M_mainmenu->insertDaftar($data)) {
			redirect('Daftar/generate/'.$id);
		} else {
			redirect('Daftar/error');
		}
	}


	public function getAntrian(){
		$antrian = '';
		
		if($data = $this->M_mainmenu->countAntrian()){

			$no_urut = (int) substr($data[0]['antrian'],1,3);
			
			if(strlen($no_urut) == 1){
				$antrian = "A00".((int) $no_urut + 1);
			}else if(strlen($no_urut) == 2){
				$antrian = "A0".((int) $no_urut + 1);
			}else{
				$antrian = "A".((int) $no_urut + 1);
			}

			$tanggal = date('Y-m-d');

			$data = array(
				'tanggal' => $tanggal,
				'antrian' => $antrian
			);

			// echo "<pre>";
			// print_r($data);
			// exit();
			$antrian = $this->M_mainmenu->insertAntrian($data);

			
		}else{
			$antrian = 'A001';
			$tanggal = date('Y-m-d');

			$data = array(
				'tanggal' => $tanggal,
				'antrian' => $antrian
			);

			$antrian = $this->M_mainmenu->insertAntrian($data);
		}
		return $antrian;
	}


}
