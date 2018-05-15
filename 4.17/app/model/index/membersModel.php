<?php
class membersModel{
	function checkrepeat(){
		$phone=$_GET["phone"];
		$db=new db("user");
		$r=$db->selectone("phone=$phone");
		$db->close();
		return $r;  
	}
	function insert(){
		$phone=$_POST["phone"];
		$db=new db("user");
		$r=$db->insert(["phone"=>$phone]);
		$db->close();
		return $r;
	}
	function  update($phone){
		$password=md5($_POST["password"]);
		$db=new db("user");
		$r=$db->update("password='$password'","phone='$phone'");
		$db->close();
		return $r;
	}
	function selectphone($where="*"){
		$phone=$_POST["phone"];
		$db=new db("user");
		$r=$db->selectone("phone='$phone'","$where");
		$db->close();
		return $r;
	}
	function selectperson($username1){
        $db=new db("user");
        $r=$db->selectone("phone='$username1'","*");
        $db->close();
        return $r;
    }
    function updateperson($username1){
	    $picture=$_POST["picture"];
	    $username=$_POST["username"];
	    $sex=$_POST["sex"];
	    $phone=$_POST["phone"];
        $db=new db("user");
        $r=$db->update("picture='$picture',username='$username',sex='$sex'","phone='$phone'");
        $db->close();
        return $r;
    }
}