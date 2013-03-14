<?php

class Site extends CI_Controller{
	

	function members_area(){
		
		//display data
		
		$this->load->model('data_model');
		
		$data['rows'] = $this->data_model->getUserInfo();
		
		$this->load->view('members_area', $data);
		
		
	}
	
	
}