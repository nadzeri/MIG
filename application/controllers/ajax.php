<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('komputer_model');
	}

	public function index()
	{
		echo 'hamdi';
		$id = $_POST['id'];
		echo $id;
	}
}