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
		$data['NO_DO'] = $this->input->get('NO_DO');
		$data['TGL_SEWA'] = $this->input->get('TGL_SEWA');
		$data['TGL_KIRIM'] = $this->input->get('TGL_KIRIM');
		$data['MATA_UANG'] = $this->input->get('MATA_UANG');
		$data['cabang'] = $this->input->get('cabang');
		if(!$data['NO_DO'] || !$data['TGL_SEWA'] || !$data['TGL_KIRIM'] || !$data['MATA_UANG'])
			$this->index();
		else
			$this->load->view('deliveryorder/detaildeliveryorder',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */