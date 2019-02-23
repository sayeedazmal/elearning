<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {


public function home()
	{		$this->load->model('Teacher_model');
			 $data = array();
		
	          $data['teacher_data_view'] = $this->Teacher_model->teacher_data();
			  $data['header_content'] = $this->load->view('pages/header', '', true);
			  $data['footer_content'] = $this->load->view('pages/footer', '', true);

			  $this->load->view('teachers',$data);
		  
	}




	

}