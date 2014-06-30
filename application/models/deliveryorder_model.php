<?php
	class Deliveryorder_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function do_insert($data)
		{
			return $this->db->insert('do', $data);
		}
		public function lastDO()
		{
			$query = $this->db->query("SELECT * FROM do ORDER BY id_do DESC LIMIT 1");
			return $query->result();
		}
	}
