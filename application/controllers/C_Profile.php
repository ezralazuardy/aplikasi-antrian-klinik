<?php
class C_Profile extends CI_Controller {
	public function index() {
		$this->load->view("V_Header");
		$this->load->view("V_Sidebar");
		$this->load->view("MainMenu/V_Page-profile");
		$this->load->view("V_Footer");
	}
}
