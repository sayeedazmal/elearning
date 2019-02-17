<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Member extends CI_Controller {


		public function __construct(){
			parent:: __construct();
		  $this->load->database();
		  $this->load->Model("user_model");
		  $this->load->library("session");

		 
		  }
		  	 function adminlogin(){

		  $admin = $this->session->userdata("admin");
		  $session = $this->session->userdata("session");
		  if(!empty($admin)){
		  	redirect('admin');
		  }

		  $username = $this->input->post('username');
		  $password = $this->input->post('password');

		  $this->db->where('username',$username);
		  $this->db->where('password',$password);
		   
		  $query = $this->db->get('admin');
		  if($query->num_rows()>0){
		  		$data = $query->row();
		  		if($username==$data->username && $password = $data->password){
		  			session_start();
		  			$session_id = session_id();

		  			$this->session->set_userdata('admin',$data->id);
		  			$this->session->set_userdata('session',$session_id->id);

		  			$up_session = array('session' => $session_id->id);

		  			$this->db->where('id',$data->id);
		  			$this->db->where('username', $data->username);
		  			$this->db->where('password', $data->password);

		  			$this->db->update('admin', $up_session);
		  			redirect('admin');
		  		}else{
		  			$this->load->view('admin/login');
		  		}
		  }else{
		  	$this->load->view('admin/login');
		  }

		 

		 	
		 }
	}


		
		
	