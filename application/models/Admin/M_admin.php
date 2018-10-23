<?php
class M_admin extends CI_Model {

	public function __construct() {
		$this->load->database();
		$this->load->library('encrypt');
	}

	/* -=-=-=-=-=-=-=-=-=-=- INSERT SECTION -=-=-=-=-=-=-=-=-=-=-=- */
	public function insertPegawai($data){
		return $this->db->insert('tbl_dokter',$data);
	}

	public function insertLayanan($data){
		return $this->db->insert('tbl_layanan',$data);
	}

	public function insertUser($data){
		return $this->db->insert('tbl_user',$data);
	}

	public function insertJadwal($data){
		return $this->db->insert('tbl_jadwal',$data);
	}

	/*-=--=-=-=-=-=-=--=-=-= SELECT SECTION -=-=-=-=-=-=-=-=-=-=-=-= */
	public function selectPegawai(){
		$this->db->select('tbl_dokter.*,tbl_layanan.*');;
		$this->db->from('tbl_dokter');
		$this->db->join('tbl_layanan','tbl_dokter.id_layanan = tbl_layanan.id_layanan', 'inner');
		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function getPegawai($id){
		$this->db->where('id_dok',$id);
		$data = $this->db->get('tbl_dokter');
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}	
	}

	public function selectLayanan(){
		$data = $this->db->get('tbl_layanan');
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function getLayanan($id){
		$this->db->where('id_layanan',$id);
		$data = $this->db->get('tbl_layanan');
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}	
	}

	public function selectUser(){
		$data = $this->db->get('tbl_user');
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function getUser($id){
		$this->db->where('id_user',$id);
		$data = $this->db->get('tbl_user');
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}	
	}

	public function selectJadwal(){
		$this->db->select('tbl_jadwal.*,tbl_dokter.*');;
		$this->db->from('tbl_jadwal');
		$this->db->join('tbl_dokter','tbl_dokter.id_dok = tbl_jadwal.id_dokter', 'inner');
		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function getJadwal($id){
		$this->db->where('id_dok',$id);
		$data = $this->db->get('tbl_dokter');
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}	
	}

	/* -=-=-=-=-=-=-=-=-=-=- UPDATE SECTION -=-=-=-=-=-=-=-=-=-=- */
	public function updatePegawai($id,$data){
		$this->db->where('id_dok',$id);
		return $this->db->update('tbl_dokter',$data);
	}

	public function updateLayanan($id,$data){
		$this->db->where('id_layanan',$id);
		return $this->db->update('tbl_layanan',$data);
	}

	public function updateUser($id,$data){
		$this->db->where('id_user',$id);
		return $this->db->update('tbl_user',$data);
	}


	public function updateJadwal($id,$data){
		$this->db->where('id_jadwal',$id);
		return $this->db->update('tbl_jadwal',$data);
	}

	/* -=-=-=-=-=-=-=-=-=-=- DELETE SECTION -=-=-=-=-=-=-=-=-=-=- */
	public function deletePegawai($id){
		$this->db->where('id_dok',$id);
		return $this->db->delete('tbl_dokter');
	}

	public function deleteLayanan($id){
		$this->db->where('id_layanan',$id);
		return $this->db->delete('tbl_layanan');
	}

	public function deleteUser($id){
		$this->db->where('id_user',$id);
		return $this->db->delete('tbl_user');
	}

	public function deleteJadwal($id){
		$this->db->where('id_jadwal',$id);
		return $this->db->delete('tbl_jadwal');
	}
}
?>