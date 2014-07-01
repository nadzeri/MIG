<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			$this->load->model('komputer_model');
		}

	public function index()
		{

			$this->load->view('header/header');
			//$this->load->view('user/sigin');
			$this->load->view('footer/footer');

			$this->load->view('login');

		}
}