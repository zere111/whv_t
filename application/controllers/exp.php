<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exp extends MY_Controller {

	public function index(){
		$user_login=$this->session->userdata('user_login');		
		$page_data=array('title_name'=>'WHVer互助型留言板','user_login'=>$user_login);
		
		$this->postmaker($page_data,$user_login);
	}
	//add new post to the database	
	public function post_add(){
		$this->load->model('post_m');
		$post_data=array('post_author'=>$this->session->userdata('user_id'),'post_content'=>$_POST['pcontent'],'post_title'=>$_POST['ptitle']);	
		$this->post_m->post_insert($post_data);
		$this->index();
	}
	//change the list of the post on the right(15)
	public function changelist(){
		$this->load->model('login_m');
		$this->load->model('post_m');
		$start=$_POST['listpoint'];
		if($start>=0){
			$this->get_postdata($start);
		}else{
			echo 'failed to get value';
		}
	}
	
}


?>