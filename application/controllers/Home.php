	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller {


	public function index()
		{
			  $data = array();
			 
			  $data['header_content'] = $this->load->view('pages/header','',true);
			  $data['course_content'] = $this->load->view('pages/course','',true);
			  $data['register_content'] = $this->load->view('pages/register','',true);
			  $data['service_content'] = $this->load->view('pages/service','',true);
			  $data['testmonial_content'] = $this->load->view('pages/testmonial','',true);
			  $data['event_content'] = $this->load->view('pages/events','',true);
			  $data['footer_content'] = $this->load->view('pages/footer','',true);

			  $this->load->view('index',$data);
		}

	public function contact(){

		$this->load->view('contact');
	}
	
	}