<?php
class C_Elements extends CI_Controller {
	public function index() {
		$this->load->view("V_Header");
		$this->load->view("V_Sidebar");
		$this->load->view("MainMenu/V_Elements");
		$this->load->view("V_Footer");
	}
}
