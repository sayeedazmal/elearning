<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {


public function home()
	{
		$data = array();
			 
		$data['header_content'] = $this->load->view('pages/header','',true);
		$data['footer_content'] = $this->load->view('pages/footer','',true);

		  $this->load->view('teachers',$data);
	}

}