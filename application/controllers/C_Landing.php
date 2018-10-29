<?php
class C_Landing extends CI_Controller {

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


	public function index() {
		$data['list'] = $this->M_mainmenu->countAntrian();	
		$data['total_antrian'] = $this->M_admin->getCountAntrian();
		$data['sisa_antrian'] = $this->M_admin->getCountSisaAntrian();

		$this->load->view("V_Landing",$data);
	}
}
