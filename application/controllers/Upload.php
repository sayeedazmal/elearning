<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                
        }

        public function index()
        {
        	

                $this->load->view('admin/add_teacher', array('error' => ' ' ));
        }

        public function do_upload()
        {
        	$data = array();

        	$data ['techname'] = $this->input->post('techname',true);
        	$data ['designation'] = $this->input->post('designation',true);

        	$sdata = array();

                $config['upload_path']          = 'uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('picture'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('admin/add_teacher', $error);
                }
                
                $sdata = $this->upload->data();
                $data['picture'] = $config['upload_path'].$sdata['file_name'];

                $this->db->insert('teacher',$data);

                redirect('upload');

                        // $data = array('upload_data' => $this->upload->data());
                        // $this->load->view('admin/upload_success', $data);
                	
               
        }
}
?>