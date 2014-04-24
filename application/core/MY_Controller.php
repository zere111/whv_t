<?php
	class MY_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('session');
			
		}
		
		//to create nomoal webpage 
		public function pagemaker($page_data=array(),$page_name=array(),$user_login){
			$this->load->helper('url');
			if($user_login){
				$this->load->view('main_menu_login_v',$page_data);
				foreach ($page_name as $value){
					$this->load->view($value);
				}
			}else{
				$this->load->view('main_menu_v',$page_data);
				foreach ($page_name as $value){
					$this->load->view($value);
				}
			}
			$this->load->view('footer_v');
			}

		//to create exp page with the first 15 post list	
		public function postmaker($page_data=array(),$user_login){
			$this->load->helper('url');
			$this->load->model('post_m');
			$this->load->model('login_m');
			
			if($user_login){
				$this->load->view('main_menu_login_v',$page_data);
				$this->load->view('exp_v');
				$this->get_postdata(0);
			}else{
				$this->load->view('main_menu_v',$page_data);
				$this->load->view('exp_v');
				$this->get_postdata(0);
				}
			$this->load->view('footer_v');
		}
		//to get the first 15 post information and load them to the exp page
		public function get_postdata($start){			
			$post_data=$this->post_m->post_seleclimit_byid(15,$start);			
			foreach( $post_data as $value){
				$user_data=$this->login_m->user_select_id($value->post_author);
				$user_nicename=$user_data[0]->user_nicename;
				$each_post=array('nice_name'=>$user_nicename,'data'=>$value);
				$this->load->view('listpost_v',$each_post);
			}
		}
}	
	
?>