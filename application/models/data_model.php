<?php


class Data_model extends CI_Model{
	
	//retrieve site wide user info
	function getUserInfo(){
		
		$this->db->select('first_name');
		$this->db->select('last_name');
		$this->db->select('username');
		$this->db->select('email_address');
		
		$this->db->from('membership');
		
		//execute
		$q = $this->db->get();
		
		//if any returned
		if($q->num_rows() > 0){
			foreach($q->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		
	}
	
	
}