<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller {


		 public function login(){

		 	$this->load->view('login');
		 }
		 public function registration(){

		 	$data = array();
		 	$data['header_content'] = $this->load->view('pages/header','',true);
		 	$data['footer_content'] = $this->load->view('pages/footer','',true);
		 	

		 	
		 	$this->load->view('register',$data);

		 }
		
	}