<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hw extends CI_Controller {

	function sayhw($name){
		
		echo $name.'<br>hello CI!';
	}
	
	function show(){
	$name="zere";
	
	@$count=file_get_contents('./num.txt');
	$count=$count?$count:0;
	$count++;
	
	$arr_array=array('a'=>'A','b'=>'B');
	$data_array=array('v_name'=>$name,'v_count'=>$count,'v_arr'=>$arr_array);	
	
	$count_visitor=fopen('./num.txt','w');
	fwrite($count_visitor,$count);
	fclose($count_visitor);
	
	$this->load->view('test_view',$data_array);
	$this->load->view('test_viewfoot');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */