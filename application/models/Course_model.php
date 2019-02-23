 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {

	
	function course_data(){
        $query = $this->db->get('course');//get data
		return $query ; 
	}
	
	public function add_course($data){
			
        	return $this->db->insert('course', $data);
           
	}
	
	function delete($id){
		 return $this->db->delete('course', ['course_id' => $id]);
	}

	function get_info_by_id($id)
    {
        $this->db->select('*');//select *
        $this->db->from('course');// from projects
        $this->db->where('course_id', $id);//where id=$id;
        return $this->db->get()->row();//return the row
    }

    function edit($id, $data){
    	return $this->db->update('course', $data, ['course_id' => $id]);
    }
	
}
