<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model {

	
	
	 public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
               
                
        }

        public function upload_data()
        {

                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('imagname'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('admin/upload_form', $error);
                }
                
                $sdata = $this->upload->data();
                $data['imagname'] = $config['upload-path'].$sdata['file_name'];

               $this->db->insert('img',$data);
               
              

                        // $data = array('upload_data' => $this->upload->data());
                        // $this->load->view('admin/upload_success', $data);
                	
               
        }

	
}
