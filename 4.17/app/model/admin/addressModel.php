<?php
class addressModel{
	function __construct(){
		 $this->db=new db("address");
	}
	function getnum(){
		$arr=$this->db->selectAll("count(*) as num","1");
		return $arr[0]["num"];
	}
	function selectaddress($limit){
		 $arr=$this->db->selectAll("*","1 {$limit}");
		 
		 $this->db->close();
		 return $arr;
	}
	function deladdress(){
		$id=$_GET["id"];
		$r=$this->db->delete("aid=$id");
		$this->db->close();
		return $r;
	}
	function insertaddress(){
		$uid=$_POST["uid"];

		$province=$_POST["province"];
		$city=$_POST["city"];
		$area=$_POST["area"];
		$area=$province."-".$city."-".$area;

		$location=$_POST["location"];
		$phone=$_POST["phone"];
		$name=$_POST["name"];
		$postcode=$_POST["postcode"];
		$r=$this->db->insert(["uid"=>$uid,"area"=>$area,"location"=>$location,"phone"=>$phone,"name"=>$name,"postcode"=>$postcode]);
		$this->db->close();
		return $r;
	}
	function getsomeaddress(){
		$id=$_GET["id"];
		$arr=$this->db->selectone("aid=$id");
		$this->db->close();
		return $arr;
	}
	function update(){
		$aid=$_POST["id"];
		$uid=$_POST["uid"];
		$province=$_POST["province"];
		$city=$_POST["city"];
		$area=$_POST["area"];
		$area=$province."-".$city."-".$area;
		$location=$_POST["location"];
		$phone=$_POST["phone"];
		$name=$_POST["name"];
		$postcode=$_POST["postcode"];
		$r=$this->db->update("uid='$uid',area='$area',location='$location',phone='$phone',name='$name',postcode='$postcode'","aid=$aid");
		$this->db->close();
		return $r;

	}
}