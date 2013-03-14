<?php


class Membership_model extends CI_Model{
	
	//Validation function 
	function validate(){
		
		//validate 
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		
		//get table
		$query = $this->db->get('membership');
		
		if($query->num_rows == 1){
			//we know they are already a member...
			return true;
		}
		
	}
	
	
	//Add a member
	function create_member(){
		
		//check if email exists first
		$this->db->select('email_address');
		$this->db->from('membership');
		$this->db->where('email_address', $this->input->post('email_address'));
		
		$query = $this->db->get();
		
		if($query->num_rows() == 0){
		
			
			$new_member_insert_data = array(
			
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email_address' => $this->input->post('email_address'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
			
			);
			
			
			$insert = $this->db->insert('membership', $new_member_insert_data);
			
			return $insert;
			
		}else{
			
			return false;
			
		}
		
	}
	
	
	
}