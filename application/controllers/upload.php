<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	function up(){
		$config['upload_path']="./upload/".$_POST['uname']."/images";//path need to be changed
		$config['allowed_types']='gif|jpg';
		$config['max_siza']='5000000';
		$this->load->library('upload',$config);
	
 
  if ( ! $this->upload->do_upload())
  {
   $error = array('error' => $this->upload->display_errors());
   print_r($error);
   //$this->load->view('upload_form', $error);
  } 
  else
  {
   $data = array('upload_data' => $this->upload->data());
   echo 'success';
   //$this->load->view('upload_success', $data);
  }
	}
}


?>