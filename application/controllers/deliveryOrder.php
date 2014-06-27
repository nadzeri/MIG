<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DeliveryOrder extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->model('deliveryorder_model');
	}
	public function index()
	{
		$this->load->view('deliveryorder/deliveryOrder');
	}
	public function tambahDeliveryOrder()
	{
		$data['NO_DO'] = $this->input->post('NO_DO');
		$data['TGL_SEWA'] = $this->input->post('TGL_SEWA');
		$data['TGL_KIRIM'] = $this->input->post('TGL_KIRIM');
		$data['MATA_UANG'] = $this->input->post('MATA_UANG');
		//$this->deliveryorder_model->tambah($data);
		$data['cabang'] = $this->input->post('cabang');
		$this->load->view('deliveryorder/detailDeliveryOrder',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */