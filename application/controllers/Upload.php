<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('session');
                
        }


     
		//file upload function
        public function do_upload()
        {
        	$data = array();

        	$data ['techname'] = $this->input->post('techname',true);
        	$data ['designation'] = $this->input->post('designation',true);

        	$sdata = array();

                $config['upload_path']          = 'uploads/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx|ppt|pptx';
                $config['max_size']             = 100024;
                // $config['max_width']            = 100024;
                // $config['max_height']           = 7680;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('picture'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('admin/add_teacher', $error);
                }
                
                $sdata = $this->upload->data();
                $data['picture'] = $config['upload_path'].$sdata['file_name'];

                $this->db->insert('teacher',$data);

                redirect('admin/viewteacher');
        }


       
}
?>