<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function _construct()
	{
		parent::__construct();
		if (! $this->session->userdata('user_id')) {
			return redirect('Admin/login');
		}
		else
			return redirect('Admin/welcome');		
	}
	public function index()
	{

	}
	public function login()
	{
		if ($this->session->userdata('user_id')) {
			return redirect('Admin/welcome');
		}
		//$this->load->library('form_validation');

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
				return redirect('Admin/login');
			}
			//echo "Welcome, " . $username;
		}
		else 
		{
			 $this->load->view('Admin/login');
		}
	}

	public function logout()
	{
		//echo "test".md5(123);
		//exit;
		$this->session->unset_userdata('user_id');
		return redirect('Admin/login');
	}

	public function welcome()
	{
		
		$this->load->model('Login_model');
		$articles = $this->Login_model->articleList();
		$this->load->view('Admin/dashboard', ['articles'=>$articles]);
	}

	public function register()
	{
		$this->load->view('Admin/register');		
	}

	public function addArticles()
	{
		if (!$this->session->userdata('user_id')) {
			return redirect('Admin/login');
		}
		$this->load->view('Admin/add_articles');			
	}

	public function sendemail()
	{
		//$this->load->library('form_validation');

		// setting validations rules on form controls
		$this->form_validation->set_rules('txt_username','User Name','required|trim|alpha|max_length[12]|is_unique[users.username]');
		$this->form_validation->set_rules('txt_password','Password','required|trim|max_length[12]');
		$this->form_validation->set_rules('txt_firstname','Firstname','required|trim|max_length[30]');
		$this->form_validation->set_rules('txt_lastname','Lastname','required|trim|max_length[30]');
		$this->form_validation->set_rules('txt_email','Email','required|trim|max_length[100]|valid_email|is_unique[users.email]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if ($this->form_validation->run())//running validation) 
		{
			$this->email->from(set_value('txt_email'), set_value('txt_firstname'));
			$this->email->to("pundirraman@gmail.com");
			$this->email->subject("Registration Greeting..");
			$this->email->message("Thankyou for registration.");
			$this->email->set_newline("\r\n");
			$this->email->send();
			if (!$this->email->send()) {
				show_error($this->email->print_debugger());
			}
			else{
				echo "Email sent successfully";
			}
		}
		else 
		{
			 $this->load->view('Admin/register');
		}		
	}
}
