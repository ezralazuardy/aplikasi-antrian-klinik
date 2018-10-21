<?php
class M_mainmenu extends CI_Model {

	public function __construct() {
		$this->load->database();
		$this->load->library('encrypt');
	}


/* ---------------------- DAFTAR PAGE ---------------------- */	
	public function selectDokter(){
		$this->db->select('*');;
		$this->db->from('tbl_dokter');
		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function countAntrian(){
		$this->db->select('antrian');
		$this->db->from('tbl_antrian');
		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;	
		}
	}
}
?>