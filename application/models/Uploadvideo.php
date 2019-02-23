 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadvideo extends CI_Model {

			
	public function uploadData($data)
		{
		    
		    $this->db->insert('video', $data);
		}
	public function video_data()
		{
		   $query = $this->db->get('video');
		   return $query;
		}
}
