<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_login_check');
		}

	public function index()
		{
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('login');
			}
		}

	public function login_check($password)
	{
		$username = $this->input->post('username');

		$this->load->model("user_model");

		$UsernameValid = $this->user_model->usernameCheck($username);
		if($UsernameValid){
			
		}else{
			$this->form_validation->set_message('login_check', 'Invalid Username');
			return FALSE;
		}

		$PasswordValid = $this->user_model->passwordCheck($username, $password);
		if($PasswordValid){

			$typeValidation = $this->user_model->typeCheck($username, $password);
			if($typeValidation == 'admin'){
				$this->load->view('Header/adminHeader');
				$this->load->view('admin/Home');
				$this->load->view('Footer/adminFooter');
				return TRUE;
			}
			else if ($typeValidation == 'maintenance') {
				//$this->load->view('Header/maintenanceHeader');
				//$this->load->view('maintenance/Home');
				//$this->load->view('Footer/maintenanceFooter');
				//return TRUE;
			}
			else{
				$this->form_validation->set_message('login_check', 'Invalid');
				return FALSE;
			}

		}else{
			$this->form_validation->set_message('login_check', 'Invalid Password');
			return FALSE;
		}

	}

}