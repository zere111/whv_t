<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MY_Controller {

		public function index(){
		$user_login=$this->session->userdata('user_login');
		$page_data=array('title_name'=>'用户注册','user_login'=>$user_login);
		$page_name=array('0'=>'register_v');
		$this->pagemaker($page_data,$page_name,$user_login);
		}
		public function adduser(){
			$this->load->model('login_m');
			$this->load->helper('url');
			$arr=array('user_login'=>$_POST['uname'],'user_pass'=>md5($_POST['upass']),'user_nicename'=>$_POST['unina'],'user_email'=>$_POST['uemail']);
			$user=$this->login_m->user_select($_POST['uname']);
			
			if($user){
				echo "Error, Username Exist";
			}else{
				$path="./upload/".$_POST['uname']."/images";
				mkdir($path,0777,ture);
				$this->login_m->user_insert($arr);
				$page_data=array('title_name'=>'Welcome!','user_login'=>$user_login);
				$page_name=array('0'=>'user_add_succ_v');
				$this->pagemaker($page_data,$page_name,$user_login);
			}
		}
}


?>