<?php
	class komputer_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function tambahSpesifikasi($data)
		{
			$this->db->insert('spesifikasi',$data);
		}

		public function get_spesifikasi()
		{
			$query = $this->db->get('spesifikasi');
			return $query->result();
		}
	}
