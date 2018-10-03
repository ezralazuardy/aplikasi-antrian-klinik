<?php
class C_Icons extends CI_Controller {
	public function index() {
		$this->load->view("V_Header");
		$this->load->view("V_Sidebar");
		$this->load->view("MainMenu/V_Icons");
		$this->load->view("V_Footer");
	}
}
