<?php
	class Deliveryorder_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function tambah($data)
		{
			return $this->db->insert('do', $data);
		}
	}
