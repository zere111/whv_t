<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quit extends MY_Controller {

	public function index(){
		$user_login=$this->session->userdata('user_login');
		$this->session->unset_userdata('user_login');
		$page_data=array('title_name'=>'See U~');
		$page_name=array('0'=>'quit_v');
		$this->pagemaker($page_data,$page_name,$user_login);
	}
}

?>