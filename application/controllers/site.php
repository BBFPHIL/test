<?php

class Site extends CI_Controller{
	

	function members_area(){
		
		//display data
		
		$this->load->model('data_model');
		
		$data['rows'] = $this->data_model->getUserInfo();
		
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