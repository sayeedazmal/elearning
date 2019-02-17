<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	 function __construct()
    {
        // Call the Controller constructor
        parent::__construct();
         $this->load->Model("student");
         $this->load->Model("student");
         $this->load->Model("main_model");

    }


	public function index()
	{
		
		// $data = array();
		// 
		// $data['fetch_data'] = $this->main_model->fetch_data();

		// $this->load->view("main_view",$data);

		 $data['fetch_data'] = $this->main_model->fetch_data();
		 $this->load->view("main_view",$data);

	}

	public function student_infopage(){
		$this->load->view('add_student_view');
	}
	
	public function save_student(){
		 //echo "yes";
		
		 $data = array(

		 		"name" =>$this->input->post("name"),
		 		"address" =>$this->input->post("address"),
		 		"email" =>$this->input->post("email")
		 );
		 $this->student->add($data);
		 	$this->load->view("add_student_view");
		}
	
	
}