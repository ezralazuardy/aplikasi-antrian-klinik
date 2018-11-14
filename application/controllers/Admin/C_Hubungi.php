<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Hubungi extends CI_Controller {

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
		// generate all data hubungi
		$data['hubungi'] = $this->M_admin->selectHubungi();
		$this->load->view("V_Header");
		$this->load->view("Admin/Hubungi/V_Index",$data);
		$this->load->view("V_Footer");
	}


	public function inputHubungi(){
		$this->load->view("V_Header");
		$this->load->view("Admin/Hubungi/V_Input");
		$this->load->view("V_Footer");	
	}

/* ----------------------- VIEW LOAD END ----------------------------*/

/* ----------------------- VIEW LOAD DETAIL -------------------------*/

public function hubungiDetail($id = false) {
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);
		$data['id_hubungi']	= $plaintext_string;
		$data['list'] = $this->M_admin->getHubungi($plaintext_string);
		$data['id'] = $id;

		$this->load->view("V_Header");
		$this->load->view("Admin/Hubungi/V_Detail",$data);
		$this->load->view("V_Footer");

}

public function hubungiAnswer($id = false) {
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);
		$data['id_hubungi']	= $plaintext_string;
		$data['list'] = $this->M_admin->getHubungi($plaintext_string);

		$this->load->view("V_Header");
		$this->load->view("Admin/Hubungi/V_Answer",$data);
		$this->load->view("V_Footer");
}

/*------------------------ VIEW LOAD DETAIL END ----------------------*/

/* ----------------------- INSERT SECTION ----------------------------*/
	public function insertHubungi() {
		 $nama = $this->input->post('nama');
   		 $email = $this->input->post('email');
   		 $pesan = $this->input->post('pesan');
   		 $data  = array(
   		   'nama' => $nama,
   		   'email' => $email,
   		   'pesan' => $pesan
   		 );
   		 
   		 if ($this->M_mainmenu->insertHubungi($data)) {
   		   $this->session->set_flashdata('success','Pesan anda berhasil dikirim!');
   		   redirect('Hubungi/index/update');
   		 } else {
   		   $this->session->set_flashdata('error','Terjadi kesalahan saat mengirim pesan anda...');
   		   redirect('Hubungi/index/update');
   		 }

	}

/*------------------------------- UPDATE SECTION --------------------------------*/

	public function answerHubungi(){
		
   		 
   		 $to      = $this->input->post('email');
		 $subject = $this->input->post('subject');
		 $message = $this->input->post('pesan');
		 $headers = 
			'From: Admin Staff Puskesmas' . "\r\n" .
    		'Reply-To: '.$this->input->post('nama')."\r\n" .
    		'X-Mailer: PHP/' . phpversion();



   		 if (mail($to, $subject, $message, $headers)) {
   		   $this->session->set_flashdata('success','Pesan anda berhasil dikirim!');
   		   redirect('Hubungi/index');
   		 } else {
   		   $this->session->set_flashdata('error','Terjadi kesalahan saat mengirim pesan anda...');
   		   redirect('Hubungi/index');
   		 }	
	}

/*-=-=-=-=-=-=-=-=-=--=-=-=-=-=- DELETE SECTION -=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-= */

public function deleteHubungi($id) {
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);
		$id_dok	= $plaintext_string;
		if($this->M_admin->deleteHubungi($id_dok)) {
			redirect('Hubungi/index/delete');
		} else {
			redirect('Hubungi/index/error');
		}	
	}
}
