<?php

class Site extends CI_Controller{
	

	function members_area(){
		
		//display data
		
		$this->load->model('user_model');
		
		$data['rows'] = $this->user_model->get_all_users();
		
		$this->load->view('members_area', $data);
		
		
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