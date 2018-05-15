<?php
class flowerModel{
	function __construct(){
		$this->db=new db("goods");
	}
	function getAllflower($order="order by gid "){
		$cid=$_GET["id"];
		$arr=$this->db->selectAll("*","cid=$cid  $order  limit 0,10");
		$this->db->close();
		return $arr;

	}
	function getcats($id){
		$cdb=new db("category");
		$ar=$cdb->selectone("cid=$id","cename");
		$cdb->close();
		return $ar;
	}
	function getcontent(){
		$gid=$_GET["id"];
		$arr=$this->db->selectone("gid=$gid","*");
		
		$this->db->close();
		return $arr;
	}
}