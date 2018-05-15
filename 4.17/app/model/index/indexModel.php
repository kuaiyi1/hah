<?php
class indexModel{
	function __construct(){
		
	}
	function getcats(){
		$catdb=new db("category");
		$data=$catdb->selectAll("*","1 limit 0,8");
		$catdb->close();
		return $data;
	}
	function getgoods(){
		$goodsdb=new db("goods");
		$data=$goodsdb->selectAll("*","grecommend='1' order by gsort limit 0,3");
		$goodsdb->close();
		return $data;
	}
}
