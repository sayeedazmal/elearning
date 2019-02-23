 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lessons extends CI_Model {

	
	
	public function add_lessons($data){
			
        	return $this->db->insert('lessons', $data);
          
	}

	 function lessons_data($id)
    {

        $this->db->select('lessons.*'); //select *

        $this->db->from('lessons'); //from projects
        
        if ($id>0) {
            $where = "( lessons.course_id=$id)";
            $this->db->where($where); 
        }
 
        $query = $this->db->get();// get all data
        $query->result();
        return $query->result();// return rows as object
    }
	
	// function delete($id){
	// 	 return $this->db->delete('course', ['course_id' => $id]);
	// }

	// function get_info_by_id($id)
 //    {
 //        $this->db->select('*');//select *
 //        $this->db->from('course');// from projects
 //        $this->db->where('course_id', $id);//where id=$id;
 //        return $this->db->get()->row();//return the row
 //    }

 //    function edit($id, $data){
 //    	return $this->db->update('course', $data, ['course_id' => $id]);
 //    }
	
}
