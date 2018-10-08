<?php
class M_admin extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->library('encrypt');
	}


	/* ------------------- INSERT SECTION ------------------------ */
	public function insertPegawai($data){
		return $this->db->insert('tbl_dokter',$data);
	}





	/*--------------------- SELECT SECTION ----------------------- */
	public function selectPegawai(){
		$data = $this->db->get('tbl_dokter');
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


	/* ==================== UPDATE SECTION ====================== */

	public function updatePegawai($id,$data){
		$this->db->where('id_dok',$id);
		return $this->db->update('tbl_dokter',$data);
	}

	/*===================== DELETE SECTION ====================== */

	public function deletePegawai($id){
		$this->db->where('id_dok',$id);
		return $this->db->delete('tbl_dokter');
	}
}
?>