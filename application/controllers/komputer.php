<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Komputer extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			$this->load->model('komputer_model');
		}


	public function index($success = false)
		{
			$data['success'] = $success;
			$this->load->view('komputer/tambahSpesifikasi',$data);
		}

	public function tambahKomputer()
		{
			$data['data'] =  $this->komputer_model->get_spesifikasi();
			$this->load->view('komputer/tambahKomputer2',$data);

		}
	public function tambahSpesifikasi()
		{

			$data['Merk'] = $this->input->post('Merk');
			$data['Type'] = $this->input->post('Type');
			$data['Chipset'] = $this->input->post('Chipset');
			$data['Processor'] = $this->input->post('Processor');
			$data['Memory'] = $this->input->post('Memory');
			$data['Hard_Drive'] = $this->input->post('Hard_Drive');
			$data['Optical_Storage'] = $this->input->post('Optical_Storage');
			$data['Remotable_Media'] = $this->input->post('Remotable_Media');
			$data['Network_Device'] = $this->input->post('Network_Device');
			$data['VGA'] = $this->input->post('VGA');
			$data['Expantion_Slots'] = $this->input->post('Expantion_Slots');
			$data['No_Port_&_Connection'] = $this->input->post('No_Port_and_Connection');
			$data['Keyboard'] = $this->input->post('Keyboard');
			$data['Porting_Device'] = $this->input->post('Porting_Device');
			$data['Operating_System'] = $this->input->post('Operating_System');
			$this->komputer_model->tambahSpesifikasi($data);
			$success = true;
			//$this->index($success);
		}
}