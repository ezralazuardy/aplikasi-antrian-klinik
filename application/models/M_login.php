<?php
class M_login extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->library('encrypt');
	}

	public function checkUser($data){
		 $data = $this->db->get_where('tbl_user',array('username' => '$data'));
		 if($data->num_rows() > 0){
		 	return $data->row();
		 }else{
		 	return false;
		 }
		 
	}
	
	public function checkPassword($username,$password){
		$data = $this->db->get_where('tbl_user',array('username' => '$username','password' => '$password'));
		if($data->num_rows() > 0){
		 	return $data->row();
		 }else{
		 	return false;
		 }
	}


}
?>