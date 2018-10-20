<?php
class M_login extends CI_Model {

	public function __construct() {
		$this->load->database();
		$this->load->library('encrypt');
	}

	public function checkUser($data) {
		 $this->db->where('username',$data);
		 $data = $this->db->get('tbl_user');
		 if ($data->num_rows() > 0) {
		 	return $data->result_array();
		 } else {
		 	return false;
		 }
	}
	
	public function checkPassword($username,$password) {
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$data = $this->db->get('tbl_user');
		if ($data->num_rows() > 0) {
		 	return $data->result_array();
		} else {
			return false;
		}
	}

	public function checkAccountType($username,$password) {
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('tbl_user');
		if ($query->num_rows() > 0) {
		    $row = $query->row(); 
		    return $row->akses;
		}
		return null;
	}
}
?>