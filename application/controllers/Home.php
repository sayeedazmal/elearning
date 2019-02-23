	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller {


	public function index()
		{
			  $data = array();
			 
			  $data['slide'] = $this->load->view('pages/homeslide','', true);
			  $data['main_content'] = $this->load->view('pages/home','',true);
			 
			  $this->load->view('index',$data);
		}

	public function contact(){

		$this->load->view('contact');
	}
	
	}