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
		public function tahap1($data)
		{
			$query = $this->db->get_where('spesifikasi',  array('No_Komputer' => $data['No_Komputer'] ));
			return $query->result();
		}
	}
