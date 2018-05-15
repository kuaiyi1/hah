<?php
class logininModel{
	function __construct(){
		$this->db=new db("admin");
	}
	function getadmin(){
		$arr=$this->db->selectone("1");
		return $arr;
		
	}
	function updateadmin($newpass){
		$r=$this->db->update("password='$newpass'","1");
		return $r;
	}
	
}