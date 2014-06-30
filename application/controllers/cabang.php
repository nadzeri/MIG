<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cabang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->model('cabang_model');
	}
	public function index()
	{
		
	}

	public function tambahCabang()
	{
		$this->load->view('cabang/tambahcabang');
	}

	public function insertCabang()
	{
		$data['Nama_Cabang'] = $this->input->post('Nama_Cabang');
		$this->cabang_model->do_insert($data);
		$this->tambahCabang();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */