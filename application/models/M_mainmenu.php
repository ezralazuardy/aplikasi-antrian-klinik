<?php
class M_mainmenu extends CI_Model {

	public function __construct() {
		$this->load->database();
		$this->load->library('encrypt');
	}


/* ---------------------- DAFTAR PAGE ---------------------- */	
	public function generate($id){
		$this->db->select('*,tbl_pendaftaran.nama nama_user,tbl_layanan.nama layanan_kesehatan');
		$this->db->from('tbl_antrian');
		$this->db->join('tbl_pendaftaran','tbl_antrian.id_antrian = tbl_pendaftaran.id_antrian', 'outter');
		$this->db->join('tbl_dokter','tbl_dokter.id_dok = tbl_pendaftaran.id_dokter', 'outter');
		$this->db->join('tbl_layanan','tbl_dokter.id_layanan = tbl_layanan.id_layanan', 'outter');
		$this->db->join('tbl_jamkes','tbl_pendaftaran.id_jamkes = tbl_jamkes.id_jamkes', 'outter');
		
		$this->db->where('tbl_antrian.id_antrian',$id);

		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function selectLayanan(){
		$this->db->select('*');
		$this->db->from('tbl_layanan');
		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function selectJadwalDokter($data){
		$this->db->select('*');
		$this->db->from('tbl_dokter');
		$this->db->join('tbl_layanan','tbl_dokter.id_layanan = tbl_layanan.id_layanan', 'inner');
		$this->db->join('tbl_jadwal','tbl_jadwal.id_dokter = tbl_dokter.id_dok','inner');
		$this->db->where($data);

		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function selectJamkes(){
		$this->db->select('*');;
		$this->db->from('tbl_jamkes');
		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function countAntrian($daftar = false){

		$date = date('Y-m-d');

		$this->db->select('antrian,tanggal');
		$this->db->from('tbl_antrian');
		$this->db->where('tanggal',$date);
		$this->db->where('status != 1');
		if($daftar){
			$this->db->order_by('antrian','desc');	
		}else{
			$this->db->order_by('antrian','asc');
		}
		
		
		$this->db->order_by('tanggal','desc');
		
		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;	
		}
	}

	public function insertDaftar($data){
		return $this->db->insert('tbl_pendaftaran',$data);
	}

	public function insertAntrian($data){
		$this->db->insert('tbl_antrian',$data);
		 return $this->db->insert_id();
	}

	public function insertHubungi($data){
		return $this->db->insert('tbl_hubungi',$data);
	}
}
?>