<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->model('teacher_model','', TRUE);
                $this->load->library('session');
                
        }


        public function index()
        {
        	 $data = array();
        	 $data['fetch_data'] = $this->teacher_model->fetch_data();
             $this->load->view('admin/add_teacher',$data);
        }


		//file upload function
        public function do_upload()
        {
        	$data = array();

        	$data ['techname'] = $this->input->post('techname',true);
        	$data ['designation'] = $this->input->post('designation',true);

        	$sdata = array();

                $config['upload_path']          = 'uploads/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
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
        }


    	 //delete function for teacher controller the teacher_model is Model delete function is mathode name 
	 	function delete($id)
		 {
				 if ($this->teacher_model->delete($id)) {
						 $this->session->set_flashdata('success', "Course has been deleted successfully");
						 redirect('/upload/');
				 } else {
						 $this->session->set_flashdata('warning', "Something is going wrong!");
						 redirect('/upload/');
				 }
		 }
       
}
?>