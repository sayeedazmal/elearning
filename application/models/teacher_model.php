 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_model extends CI_Model {

	
	
	function fetch_data(){

        $query = $this->db->get('teacher');//get data
		return $query ; 
	}
	

	
    function delete($id)
    {
        return $this->db->delete('teacher', ['tech_id' => $id]); //delete projects by id

    }
}





