<?php
	class User_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function usernameCheck($user)
		{
			$this->db->where('username',$user);
		    $query = $this->db->get('user');
		    if ($query->num_rows() > 0){
		        return true;
		    }
		    else{
		        return false;
		    }
		}

		public function passwordCheck($username, $password)
		{
			$this -> db -> select('type, username, password');
			$this -> db -> from('user');
			$this -> db -> where('username', $username);
			$this -> db -> where('password', MD5($password));
			$this -> db -> limit(1);

			$query = $this -> db -> get();

			if ($query->num_rows() == 1){
		        return true;
		    }
		    else{
		        return false;
		    }    

		}

		public function typeCheck($username, $password)
		{
			$this -> db -> select('type');
			$this -> db -> from('user');
			$this -> db -> where('username', $username);
			$this -> db -> where('password', MD5($password));
			$this -> db -> limit(1);

			$query = $this -> db -> get();

			if ($query->num_rows() == 1){
				$data = $query->result_array();
				return ($data[0]['type']);
		    }
		    else{
		        return false;
		    }
		}

	}