<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Lesson extends CI_Controller {


		public function home(){
		$data = array();
			 
			  $data['header_content'] = $this->load->view('pages/header','',true);
			  // $data['course_content'] = $this->load->view('pages/course','',true);
			  $data['footer_content'] = $this->load->view('pages/footer','',true);

			  $this->load->view('lessons',$data);
	}
	
	function addlesson(){
		$this->load->view('admin/addlesson');
	}
}