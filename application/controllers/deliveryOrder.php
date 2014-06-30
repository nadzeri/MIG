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
		$this->load->view('deliveryorder/deliveryorder');
	}
	public function tambahDeliveryOrder()
	{
		$data['NO_DO'] = $this->input->post('NO_DO');
		$data['TGL_SEWA'] = $this->input->post('TGL_SEWA');
		$data['TGL_KIRIM'] = $this->input->post('TGL_KIRIM');
		$data['MATA_UANG'] = $this->input->post('MATA_UANG');
		if($data['NO_DO'] && $data['TGL_SEWA'] && $data['TGL_KIRIM'] && $data['MATA_UANG'])
		{
			$this->deliveryorder_model->do_insert($data);
		}
		$this->detaildeliveryorder();
	}

	public function detaildeliveryorder()
	{
		$row = $this->deliveryorder_model->lastDO();
		foreach ($row as $result) {
			# code...
		$data['NO_DO'] = $result->NO_DO;
		$data['TGL_SEWA'] = $result->TGL_SEWA;
		$data['TGL_KIRIM'] = $result->TGL_KIRIM;
		$data['MATA_UANG'] = $result->MATA_UANG;
	}
		$this->load->view('deliveryorder/detaildeliveryorder',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */