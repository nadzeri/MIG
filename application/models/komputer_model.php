<?php
	class komputer_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}



		public function tambah($data,$Jumlah)
		{

			for ($a=1;$a<$Jumlah;$a++)
			{$this->db->insert('komputer',$data);}
			
		}


	}
