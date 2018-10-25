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
		date_default_timezone_set("Asia/Bangkok");
	}


	public function index() {
		$count['list'] = $this->M_mainmenu->countAntrian();

		$this->load->view("V_Landing",$count);
	}
}
