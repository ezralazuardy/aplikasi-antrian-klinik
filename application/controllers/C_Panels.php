<?php
class C_Panels extends CI_Controller {
	public function index() {
		$this->load->view("V_Header");
		$this->load->view("V_Sidebar");
		$this->load->view("MainMenu/V_Panels");
		$this->load->view("V_Footer");
	}
}
