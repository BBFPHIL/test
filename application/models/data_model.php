<?php


class Data_model extends CI_Model{
	
	function getUserInfo(){
		
		$this->db->select('first_name');
		$this->db->select('last_name');
		$this->db->select('username');
		$this->db->select('email_address');
		
		$this->db->from('membership');
		
		$q = $this->db->get();
		
		if($q->num_rows() > 0){
			foreach($q->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		
	}
	
	
}