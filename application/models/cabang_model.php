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
<<<<<<< HEAD
=======
		public function do_select()
		{
			$query = $this->db->get('cabang');
			return $query->result();
		}
>>>>>>> origin/master
	}
