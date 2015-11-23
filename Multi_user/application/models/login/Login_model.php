<?php

class Login_model extends CI_Model {

    /**
    * Validate the login's data with the database
    * @param string $username
    * @param string $password
    * @return void
    */

    /*Check Login*/
   	function validate($username, $password)
	{
		$this->db->where('status',1);
		$this->db->where('password', $password);
		$this->db->where('username', $username);
		$query = $this->db->get('login');
		return $query->result();	
	}

	/*Get Session values */
		
	function get_id($username, $password)
	{
		
		$this->db->where('password', $password);
		$this->db->where('username', $username);	
		return $this->db->get('login')->result();
				
	}
		
}