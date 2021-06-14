<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Onlinemodel extends CI_Model {


	public function CheckUser($username)
	{
		$result=$this->db->query("SELECT * from users WHERE username='$username'");
		// $str = $this->db->last_query();
		// echo $str;
		
		if ($result->num_rows()>0) 
		{
			return $result;
		}
		else
		{
			return false;
		}
	}



}
?>