<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Course extends CI_Controller {


		public function home(){
			
			  $data = array();
			  $data['slide'] = $this->load->view('pages/courseslide','',true);
			  $data['main_content'] = $this->load->view('pages/course','',true);
			  $this->load->view('index',$data);
	}

	 public function edit($id){
		$this->load->model('Course_model');
				 if($_POST){
					 //if form posting is done then
					 //hold whole post data into $data array
					 $data=$this->input->post();
					 if($this->Course_model->edit($id,$data)){
						 $this->session->set_flashdata("success","New course has been updated successfully !");
						 redirect('admin/course');
					 }
				 }//if post is finished here
				 $data =[];
				 $data['action'] = "./edit/".$id;
				 $data["row"]=$this->Course_model->get_info_by_id($id);
				 $data["headline"]=$data["title"]="Update Course Info";
				 redirect("admin/editcourse", $data);


	 	
	 }

}