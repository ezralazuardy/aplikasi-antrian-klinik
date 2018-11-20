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

	public function insertJamkes($data){
		return $this->db->insert('tbl_jamkes',$data);
	}

	public function insertHubungi($data){
		return $this->db->insert('tbl_jamkes',$data);
	}

	/*-=--=-=-=-=-=-=--=-=-= SELECT MAIN SECTION -=-=-=-=-=-=-=-=-=-=-=-= */

	public function getCountAntrian(){
		$date = date('Y-m-d');
		$select = array('*');
		$this->db->select($select);
		$this->db->from('tbl_antrian');
		$this->db->where('tanggal',$date);
		$this->db->group_by('antrian');

		$data = $this->db->get();

		return $data->num_rows();
	}

	public function getCountSisaAntrian(){
		$date = date('Y-m-d');
		$select = array('*');
		$this->db->select($select);
		$this->db->from('tbl_antrian');
		$this->db->where('tanggal',$date);
		$this->db->where('status','0');
		$this->db->group_by('antrian');

		$data = $this->db->get();

		return $data->num_rows();
	}

	public function getCurrentAntrian(){
		$date = date('Y-m-d');
		$select = array('*');
		$this->db->select($select);
		$this->db->from('tbl_antrian');
		$this->db->where('tanggal',$date);
		$this->db->where('status','0');
		$this->db->order_by('antrian','asc');
		
		
		$data = $this->db->get();

		return $data->result_array();
	}



	/*-=--=-=-=-=-=-=--=-=-= SELECT SECTION -=-=-=-=-=-=-=-=-=-=-=-= */
	public function selectPegawai(){
		$this->db->select('tbl_dokter.*,tbl_layanan.*');;
		$this->db->from('tbl_dokter');
		$this->db->join('tbl_layanan','tbl_dokter.id_layanan = tbl_layanan.id_layanan', 'left');
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
		$this->db->where('id_jadwal',$id);
		$data = $this->db->get('tbl_jadwal');
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}	
	}

	public function selectJamkes(){
		$this->db->select('*');
		$this->db->from('tbl_jamkes');
		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function getJamkes($id){
		$this->db->where('id_jamkes',$id);
		$data = $this->db->get('tbl_dokter');
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}	
	}

	public function selectHubungi(){
		$this->db->select('*');
		$this->db->from('tbl_hubungi');
		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function getHubungi($id){
		$this->db->where('id_hubungi',$id);
		$data = $this->db->get('tbl_hubungi');
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}	
	}

	public function selectAntrian(){
		$this->db->select('* , tbl_pendaftaran.nama nama_user');
		$this->db->from('tbl_antrian');
		$this->db->join('tbl_pendaftaran','tbl_antrian.id_antrian = tbl_pendaftaran.id_antrian', 'outter');
		$this->db->join('tbl_dokter','tbl_dokter.id_dok = tbl_pendaftaran.id_dokter', 'outter');
		$this->db->join('tbl_layanan','tbl_dokter.id_layanan = tbl_layanan.id_layanan', 'outter');
		$this->db->join('tbl_jamkes','tbl_pendaftaran.id_jamkes = tbl_jamkes.id_jamkes', 'outter');
		$this->db->where('tbl_antrian.status != 1');
		$this->db->order_by('tanggal','desc');
		$this->db->order_by('antrian','asc');
		
		
		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}

	}

	public function getAntrian($id){		
		$this->db->select('*');
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

	public function updateHubungi($id,$data){
		$this->db->where('id_hubungi',$id);
		return $this->db->update('tbl_hubungi',$data);
	}

	public function skipAntrian($id){
		$this->db->set('status','1');
		$this->db->where('id_antrian',$id);
		return $this->db->update('tbl_antrian');
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

	public function deleteJamkes($id){
		$this->db->where('id_jamkes',$id);
		return $this->db->delete('tbl_jamkes');
	}

	public function deleteHubungi($id){
		$this->db->where('id_hubungi',$id);
		return $this->db->delete('tbl_hubungi');
	}
}
?>