<?php
class Post_m extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function post_insert($post_data){
		$this->db->insert('post',$post_data);
	}
	
	function  post_update($id,$post_data){
		$this->db->where('id',$id);
		$this->db->update('post',$post_data);
	}
	
	function post_del($id){
		$this->db->where('id',$id);
		$this->db->delete('post');
	}
	
	function post_select($post_title){
		$this->db->where('post_title',$post_title);
		$this->db->select('*');
		$query=$this->db->get('post');
		return $query->result();
	}
	
	function post_selectall(){
		$this->db->select('*');
		$query=$this->db->get('post');
		return $query->result();
	}
	
	function post_seleclimit_byid($end,$start){
		$this->db->select('*');
		$this->db->order_by('id','desc');
		$this->db->limit($end,$start);  //limit($:how many,$:from where);
		$query=$this->db->get('post');
		return $query->result();
	}
	
}


?>
