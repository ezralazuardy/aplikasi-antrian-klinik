<?php

defined('BASEPATH') OR exit('No direct script access allowed');

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

  public function getAntrian(){
    $data['list'] = $this->M_mainmenu->countAntrian();  
    $data['total_antrian'] = $this->M_admin->getCountAntrian();
    $data['sisa_antrian'] = $this->M_admin->getCountSisaAntrian();
    echo json_encode($data);
  }

  public function insertMessage() {
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
    } else {
      $this->session->set_flashdata('error','Terjadi kesalahan saat mengirim pesan anda...');
    }
    redirect('LandingPage');
  }
}