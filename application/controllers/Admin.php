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
			$data = array();
			
			$data['course_data'] = $this->Course_model->course_data();	 	
		 	$data['desboard_content'] = $this->load->view('admin/course',$data,true);
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

		function add_course(){
		$this->load->view('admin/addcourse');
		}

		function add_lesson(){
		$this->load->view('admin/addlesson');
		}


	    function savecourse(){

		    if($_POST){
				//if form posting is done then
				//hold whole post data into $data array
				//$data=$this->input->post();

		        	$data ['coursename'] = $this->input->post('coursename',true);
		        	$data ['courseno'] = $this->input->post('courseno',true);
		        	$data ['coursetitle'] = $this->input->post('coursetitle',true);
						
					$sdata = array();

		            $config['upload_path']          = 'uploads/';
		            $config['allowed_types']        = 'gif|jpg|png|';
		            $config['max_size']             = 100024;
		            // $config['max_width']            = 1024;
              		//$config['max_height']           = 780;

		            $this->load->library('upload', $config);

		            if (!$this->upload->do_upload('courseimg')){
		               $error = array('error' => $this->upload->display_errors());
		               //$this->load->view('admin/add_course', $error);
		            }

		            $sdata = $this->upload->data();
		            $data['courseimg'] = $config['upload_path'].$sdata['file_name'];

					if($this->Course_model->add_course($data)){
						$this->session->set_flashdata("success","New course has been added!");
						redirect('admin/viewcourese');
					}
				}//if post is finished here

					$data=[];
					$data["headline"]=$data["title"]="Add New Course";
					$data["action"]="add";
					
				    redirect('admin/viewcourese');

		}
 		function savelessons(){

		    if($_POST){
					$this->load->model('Lessons');
		        	$data ['lessonname'] = $this->input->post('lessonname',true);
		        	$data ['lessontitle'] = $this->input->post('lessontitle',true);
		        	$data ['link'] = $this->input->post('link',true);
		        	$data ['description'] = $this->input->post('desc',true);


			  
					if($this->Lessons->add_lessons($data)){
						$this->session->set_flashdata("success","New course has been added!");
						redirect('admin/viewlesson');
					}	
					
				}

					$data=[];
					$data["headline"]=$data["title"]="Add New lessions";
					$data["action"]="add";
					
				    redirect('admin/viewcourese');

		}





		function viewcourese(){
			$data = array();
			$data['course_data'] = $this->Course_model->course_data();

		 	$data['desboard_content'] = $this->load->view('admin/course', $data, true);
		 	$this->load->view('admin/desboard', $data);
		}


		function viewlesson($course_id){
			$this->load->model('Lessons');
			$data = array();
			$data['lessons_data'] = $this->Lessons->lessons_data($course_id);
		 	$data['desboard_content'] = $this->load->view('admin/lessons_view',$data,true);
			$this->load->view('admin/desboard',$data);
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

		 function course_delete($id){

		 	if ($this->Course_model->delete($id)) {
						 $this->session->set_flashdata('success', "Course has been deleted successfully");
						 redirect('admin/viewcourese');
				 } else {
						 $this->session->set_flashdata('warning', "Something is going wrong!");
						 redirect('admin/viewcourese');
				 }
		 }

		function video_page(){
			
			$this->load->view('admin/video');
			
		}

		function savevideo(){
			 $this->load->model('Uploadvideo');
			$videoDetails = array();
			$data = array();
			$data['videotitle'] = $this->input->post('videotitle',true);

			if (isset($_FILES['video']['name']) && $_FILES['video']['name'] != '') {
		            unset($config);
		            // $date = date("ymd");
		            $configVideo['upload_path'] = './videos/'; 
		            $configVideo['max_size'] = '100240';
		            $configVideo['allowed_types'] = 'avi|flv|wmv|mp3';
		            $configVideo['overwrite'] = FALSE;
		            $configVideo['remove_spaces'] = TRUE;
		            $video_name = $_FILES['video']['name'];
		            $configVideo['file_name'] = $video_name;

		            $this->load->library('upload', $configVideo);
		            $this->upload->initialize($configVideo);


		            if (!$this->upload->do_upload('video')) {
		                echo $this->upload->display_errors();
		            } 

		            $videoDetails = $this->upload->data();
				    $data['video'] = $configVideo['upload_path'].$videoDetails['file_name'];

					if($this->Uploadvideo->uploadData($data)){
							$this->session->set_flashdata("success","New course has been added!");
							redirect('admin/view_video');
							}
					}//if post is finished here

					$data=[];
					$data["headline"]=$data["title"]="Add New Course";
					$data["action"]="add";
							
							redirect('admin/video_page');              
            
        }
       function view_video(){
       	   $this->load->model('Uploadvideo');
       		$data = array();
			$data['vdata'] = $this->Uploadvideo->video_data();
			redirect('admin/video_page');
       }
}