<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {


		public function __construct (){
		  parent:: __construct();
		  $this->load->database();
		  $this->load->Model("user_model");
		  $this->load->model('Course_model','',true);
		  $this->load->library("session");

		  $admin = $this->session->userdata("admin");
		  $session = $this->session->userdata('session');
		  if(empty($admin)){
		  	redirect('member/adminlogin');
		  }

		}

		 public function index(){
		 	  $data = array();
		 	  $data["viewcourse"] = $this->Course_model->viewcourse();
		 	  $data['desboard_content'] = $this->load->view('admin/course','',true);
		 
			  $this->load->view('admin/desboard', $data);
		 }
		function logout(){

			$this->session->unset_userdata('admin');
			$this->session->unset_userdata('session');
			redirect('admin');
		}

	
		// function course(){
		// 	$data = array();
		// 	$data['viewcourse'] = $this->load->view('admin/course','','true');
		// 	$this->load->view('admin/desboard',$data);

		// }
		function viewlesson(){

			$this->load->view('admin/lessons');
		}

		public function addcourse(){
			
			  $this->load->view('admin/addcourse_view');
			  $this->load->Course_model->addrecord();
		}

	
		
	}