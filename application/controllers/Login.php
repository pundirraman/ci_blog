<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

public function _construct()
	{
		parent::__construct();
		if ($this->session->userdata('user_id'))
			return redirect('Admin/welcome');		
	}
	public function index()
	{
		$this->load->library('form_validation');

		// setting validations rules on form controls
		$this->form_validation->set_rules('txt_username','User Name','required|trim|alpha');
		$this->form_validation->set_rules('txt_password','Password','required|trim|max_length[12]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if ($this->form_validation->run())//running validation) 
		{
			$username = $this->input->post('txt_username');
			$password = $this->input->post('txt_password');
			$this->load->model('Login_model');
			//$this->load->view('Admin/login');
			$user_id = $this->Login_model->isValidate($username, $password);
			if ($user_id) 
			{
				// if data is validated
				$this->session->set_userdata('user_id', $user_id);
				//echo "Details matched";
				//$this->load->view('Admin/dashboard');
				//instead of above line we can use id using redirect method
				return redirect('Admin/welcome');
			}
			else{
				// if data is not validated
				//echo "Details not matched";
				$this->session->set_flashdata('Login_failed', 'Invalid username or password');
				return redirect('login');
			}
			//echo "Welcome, " . $username;
		}
		else 
		{
			 $this->load->view('Admin/login');
		}
	}
}