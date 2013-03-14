<?php

class Site extends CI_Controller{
	

	function members_area(){
		
		$this->load->view('members_area');
		
	}
	
	/*
	function is_logged_in(){
		
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in != true){
			echo "Permission denied";
			die();
		}
		
	}
	
	*/
}