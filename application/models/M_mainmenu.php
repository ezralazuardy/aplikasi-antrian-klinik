<?php
class M_mainmenu extends CI_Model {

	public function __construct() {
		$this->load->database();
		$this->load->library('encrypt');
	}


/* ---------------------- DAFTAR PAGE ---------------------- */	
	public function generate($id){
		$this->db->select('*,tbl_pendaftaran.nama nama_user');
		$this->db->from('tbl_antrian');
		$this->db->join('tbl_pendaftaran','tbl_antrian.id_antrian = tbl_pendaftaran.id_antrian', 'outter');
		$this->db->join('tbl_dokter','tbl_dokter.id_dok = tbl_pendaftaran.id_dokter', 'outter');
		$this->db->join('tbl_layanan','tbl_dokter.id_layanan = tbl_layanan.id_layanan', 'outter');
		
		$this->db->where('tbl_antrian.id_antrian',$id);

		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

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
		$this->db->select('antrian,tanggal');
		$this->db->from('tbl_antrian');
		$this->db->where('tanggal','CURDATE()');
		$this->db->order_by('antrian','desc');
		$this->db->order_by('tanggal','desc');
		
		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;	
		}
	}

	public function insertDaftar($data){
		return  $this->db->insert('tbl_pendaftaran',$data);
	}

	public function insertAntrian($data){
		 $this->db->insert('tbl_antrian',$data);
		 return $this->db->insert_id();
	}
}
?>