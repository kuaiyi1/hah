<?php
class userModel{
	function __construct(){
		$this->db=new db("user");
	}
	function  getuser($limit){
		$arr=$this->db->selectAll("*","1 {$limit}");
		$this->db->close();
		return $arr;
	}
	function  getusernum(){
		 $arr=$this->db->selectAll("count(*) as num", "1");

		 return $arr[0]["num"];
	}
	function deluser($id){
		$r=$this->db->delete("uid=$id");
		$this->db->close();
		return $r;

	}
	function insert(){
		$username=$_POST["username"];
		$password=md5($_POST["password"]);
		$picture=$_POST["picture"];
		$phone=$_POST["phone"];
		$sex=$_POST["sex"];
		
		$r=$this->db->insert(["username"=>$username,"password"=>$password,"picture"=>$picture,"phone"=>$phone,"sex"=>$sex]);
		$this->db->close();
		return $r;
	}
	function getoneuser($id){
		 $arr=$this->db->selectone("uid=$id");
		 return $arr;
	}
	function update(){
		$id=$_POST["id"];
		$username=$_POST["username"];
		$password=$_POST["password"];
		$picture=$_POST["picture"];
		$phone=$_POST["phone"];
		$sex=$_POST["sex"];
		
		$r=$this->db->update("username='$username',password='$password',picture='$picture',phone='$phone',sex='$sex'","uid=$id");
		
		$this->db->close();
		return $r;
	}
}