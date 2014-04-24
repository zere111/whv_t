<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {
	public function index(){
		
			$user_login=$this->session->userdata('user_login');
			$page_data=array('title_name'=>'请登录','user_login'=>$user_login);
			$page_name=array('0'=>'login_v');
			$this->pagemaker($page_data,$page_name,$user_login);
		}
	
	function check_login(){
		$this->load->model('login_m');
		$user=$this->login_m->user_select($_POST['uname']);
		if($user){
			if($user[0]->user_pass==md5($_POST['upass'])){
				$this->load->library('session');
				$user_data=array('user_login'=>$user[0]->user_login,'user_id'=>$user[0]->id);
				$this->session->set_userdata($user_data);
				$page_data=array('user_login'=>$this->session->userdata('user_login'));				
				
				$user_login=$this->session->userdata('user_login');
				$page_data=array('title_name'=>'欢迎登陆','user_login'=>$user_login);
				$page_name=array('0'=>'login_succ_v');
				$this->pagemaker($page_data,$page_name,$user_login);
				
				
			}else{//↓↓↓↓↓not finished
				$this->load->view('main_menu_v');
				echo '<br>wrong password';
				$this->load->view('footer_v');
			}
		
			}else{
				$this->load->view('main_menu_v');
				echo '<br>no user';
				$this->load->view('footer_v');
		}
	}
	
}

?>