<?php
class C_Notifications extends CI_Controller {
	public function index() {
		$this->load->view("V_Header");
		$this->load->view("V_Sidebar");
		$this->load->view("MainMenu/V_Notifications");
		$this->load->view("V_Footer");
	}
}
