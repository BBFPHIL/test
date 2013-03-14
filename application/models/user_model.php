<?php

class User_data extends CI_Model{
	
	
	function get_all_users(){
		
		$q = $this->db->query("SELECT * FROM membership");
		
		if($q->num_rows() > 0){
			foreach($q->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		
	}
	
	
	
}