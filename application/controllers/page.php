<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {
	function useradd(){
		$this->load->model('test_m');
		for($i=1;$i<=40;$i++){
			$name='zere'.$i;
			$arr=array('username'=>$name,'password'=>'188696','realname'=>'zere huang','age'=>$i+10);
			$this->test_m->ci_user_insert($arr);
		}
	}
	
	function pagelist($id){
		$this->load->model('test_m');
		$user=$this->test_m->ci_user_selectall();
		$allnum=count($user);
		$pagenum=8;

		$config['total_rows']=$allnum; //num of all data
		$config['per_page']=$pagenum; //num of each page
		$config['num_link']=2; //num of pages before and after current page
		$config['use_page_numbers']=true;
		$config['base_url']='/test/codei/index.php/page/pagelist';
		
		$this->load->library('pagination');
		$this->pagination->initialize($config);
		echo '<hr>'.$this->pagination->create_links().'<br>';
		
		$id=$id?$id:1;
		$start=($id-1)*$pagenum;
		echo $list=$this->test_m->ci_user_seleclimit($pagenum,$start);
		var_dump($list);	
	}
}

?>