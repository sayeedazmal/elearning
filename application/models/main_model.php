<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	
	
	function fetch_data(){

		$query = $this->db->get("student");
		return $query ; 
	}

	
}
