<?php
	class Cabang_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function do_insert($data)
		{
			return $this->db->insert('cabang', $data);
		}
	}
