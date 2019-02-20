 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {

	
	function viewcourse(){

        $query = $this->db->get('course');//get data
		return $query ; 
	}
	
	public function addrecord(){
			$data = array();

        	$data ['coursename'] = $this->input->post('coursename',true);
        	$data ['courseno'] = $this->input->post('courseno',true);
        	$data ['coursetitle'] = $this->input->post('coursetitle',true);
        	$data ['courseimg'] = $this->input->post('courseimg',true);

        	return $this->db->insert('course', $data);
           


	}

	
}
