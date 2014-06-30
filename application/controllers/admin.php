<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller{

	public function home(){
		$this->load->view('header/adminHeader');
		$this->load->view('admin/Home');
		$this->load->view('footer/adminFooter');
	}

	public function deliveryorder(){
		$this->load->view('header/adminHeader');
		$this->load->view('admin/deliveryorder/deliveryOrder');
		$this->load->view('footer/adminFooter');
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

}
