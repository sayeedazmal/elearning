<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {


		public function __construct (){
			  parent:: __construct();
			  $this->load->database();
			  $this->load->Model("user_model");
			  $this->load->model('Course_model','',true);
			  $this->load->library("session");
			  $this->load->model('teacher_model','',true);
			 

				  $admin = $this->session->userdata("admin");
				  $session = $this->session->userdata('session');
				  if(empty($admin)){
				  	redirect('member/adminlogin');
				  }

		}

		function index(){	 	
		 	$data['desboard_content'] = $this->load->view('admin/course','',true);
			$this->load->view('admin/desboard', $data);
		 }
		

		function logout(){
			$this->session->unset_userdata('admin');
			$this->session->unset_userdata('session');
			redirect('admin');
		}

		function addteacher(){

			 $this->load->view('admin/add_techerinfo');
		}

		function viewlesson(){
			$data = array();
		 	$data['desboard_content'] = $this->load->view('admin/lessons_view','',true);
			$this->load->view('admin/desboard',$data);
		}

	    function addcourse(){

	    	 $this->load->view('admin/addcourse_view');
			}

		function viewcourese(){
			$data["viewcourse"] = $this->Course_model->viewcourse();
		 	$data['desboard_content'] = $this->load->view('admin/course','',true);
		 	$this->load->view('admin/desboard', $data);
		}

		function viewteacher(){

			$data = array();
	        $data['teacher_data_view'] = $this->teacher_model->teacher_data();

		  	$data['desboard_content'] = $this->load->view('admin/teacherinfo_view', $data, true);
			$this->load->view('admin/desboard',$data);
	}

    	 //delete function for teacher controller the teacher_model is Model delete function is mathode name 
	 	function delete($id)
		 {
				 if ($this->teacher_model->delete($id)) {
						 $this->session->set_flashdata('success', "Course has been deleted successfully");
						 redirect('admin/viewteacher');
				 } else {
						 $this->session->set_flashdata('warning', "Something is going wrong!");
						 redirect('admin/viewteacher');
				 }
		 }
}
