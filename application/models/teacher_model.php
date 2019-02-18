 $this->db->select('*'); //select *
        $this->db->from('student');// from projects
        //$this->db->order_by("code", "asc");//ORDER BY code ASC
        $query = $this->db->get();//get data