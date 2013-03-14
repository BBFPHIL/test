<?php


class Login extends CI_Controller{
	
	function index(){
		
		$data['main_content'] = 'login_form';
		$this->load->view('includes/template', $data);
		
	}
	
	//user validation
	function validate_credentials(){
		
		$this->load->model('membership_model');
		
		//call validate
		$query = $this->membership_model->validate();
		
		//if user true
		if($query){
			$data = array(
			
				'username' => $this->input->post('username'),
				'is_logged_in' => true
				
			);
			
			//add to session id
			$this->session->set_userdata($data);
			redirect('site/members_area');
			
		}else{
		
			$this->index();
			
		}
		
	}
	
	
	//sign up function
	function signup(){
		
		$data['main_content'] = 'signup_form';
		
		$this->load->view('includes/template', $data);
		
		
	}
	
	//Add a new member
	function create_member(){
		
		$this->load->library('form_validation');
		//name, error msg, and validation rules
		
		//validate person info
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		
		
		//if return false, load view again
		if($this->form_validation->run() == FALSE){
			
			$this->signup();
			
		}else{
			$this->load->model('membership_model');
			
			//if true, entered in
			if($query = $this->membership_model->create_member()){
			
				$data['main_content'] = 'signup_successful';
				$this->load->view('includes/template', $data);
				
			}else{
				//problem adding
				$this->load->view('signup_form');
			}
		}
		
		
	}
	
	
}