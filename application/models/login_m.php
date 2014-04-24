<?php
class Login_m extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function user_insert($arr){
		$this->db->insert('user',$arr);
	}
	
	function  user_update($id,$arr){
		$this->db->where('id',$id);
		$this->db->update('user',$arr);
	}
	/*
	function user_del($id){
		$this->db->where('id',$id);
		$this->db->delete('user');
	}
	*/
	function user_select($username){
		$this->db->where('user_login',$username);
		$this->db->select('*');
		$query=$this->db->get('user');
		return $query->result();
	}
	
	function user_select_id($userid){
		$this->db->where('id',$userid);
		$this->db->select('*');
		$query=$this->db->get('user');
		return $query->result();
	}
	
	function user_selectall(){
		$this->db->select('*');
		$query=$this->db->get('user');
		return $query->result();
	}
	
	function user_seleclimit($end,$start){
		$this->db->select('*');
		$this->db->limit($end,$start);  //limit($:how many,$:from where);
		$query=$this->db->get('user');
		return $query->result();
	}
	
}


?>