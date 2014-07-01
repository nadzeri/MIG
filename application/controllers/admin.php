<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->model('deliveryorder_model');
		$this->load->model('cabang_model');
	}

	public function home(){
		$this->load->view('header/adminHeader');
		$this->load->view('admin/Home');
		$this->load->view('footer/adminFooter');
	}

	public function deliveryorder(){
		$row = $this->cabang_model->do_select();
		$data['cabang'] = $row;
		$this->load->view('header/adminHeader');
		$this->load->view('admin/deliveryorder/deliveryOrder',$data);
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

	public function detaildeliveryorder()
	{
		$row = $this->deliveryorder_model->lastDO();
		$row1 = $this->cabang_model->do_select();
		foreach ($row as $result) 
		{
			$data['NO_DO'] = $result->NO_DO;
			$data['TGL_SEWA'] = $result->TGL_SEWA;
			$data['TGL_KIRIM'] = $result->TGL_KIRIM;
			$data['MATA_UANG'] = $result->MATA_UANG;
		}
		$data['cabang'] = $row1;
		$this->load->view('deliveryorder/detaildeliveryorder',$data);
	}

	public function purchaseorder()
	{
		$this->load->view('admin/purchaseorder/PO');
	}

	public function POspesifikasi()
	{
		$data =  $this->komputer_model->get_spesifikasi($_POST['id']);
		foreach ($data as $row) {
			echo $row['Merk'];
		}
	}

}
