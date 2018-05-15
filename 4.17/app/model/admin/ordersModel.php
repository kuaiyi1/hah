<?php
class ordersModel{
	function __construct(){
		$this->db=new db("orders");
		
	}
	function getnum(){
		$arr=$this->db->selectAll("count(*) as num","1");

		return  $arr[0]["num"];
	}
	function selectshoworders($limit){
		$this->db->table="orders,goods,user,address";
		$arr=$this->db->selectAll("*","orders.gid=goods.gid && orders.uid=user.uid && orders.uid=address.uid  && address.aid=orders.aid $limit");
		
		$this->db->close();

		return $arr;
	}
	function getgname(){
		$this->db->table="goods";
		$arr=$this->db->selectAll();

		return $arr;
	}
	function getgprice($id){
		$this->db->table="goods";
		$arr=$this->db->selectAll("*","gid=$id");

		return $arr;
	}
	function getusername(){
		$this->db->table="user";
		$arr=$this->db->selectAll();
		return $arr;
	}
	function getaddress($id){
		// $uid=$_SESSION["uid"];
		// $a=$_COOKIE["uid"];
		// var_dump($a);
		$this->db->table="address";
		$arr2=$this->db->selectAll("*","uid=$id");
		return $arr2;
	}
	function insert(){
		   $gid=$_POST["gid"];
		    $gnumber=$_POST["gnumber"];
		    $gprice=$_POST["gprice"];
		     $uid=$_POST["uid"];
		      $aid=$_POST["aid"];
		        $ostate=$_POST["ostate"];
		         $osort=$_POST["osort"];
		         $this->db->table="orders";
		         $arr=$this->db->insert(["gid"=>$gid,"gnumber"=>$gnumber,"gprice"=>$gprice,"uid"=>$uid,"aid"=>$gid,"aid"=>$aid,"ostate"=>$ostate,"osort"=>$osort]);
		         $this->db->close();
		         return $arr;
		      
	}
	function delorders($id){
		$r=$this->db->delete("oid=$id");
		return $r;
	}
	function getoneorders($id){
		$this->db->table="orders";
		$arr=$this->db->selectone("oid=$id","*");

		return $arr;
	}
	function update(){
		$id=$_POST["id"];
		$gid=$_POST["gid"];
		    $gnumber=$_POST["gnumber"];
		    $gprice=$_POST["gprice"];
		     $uid=$_POST["uid"];
		      $aid=$_POST["aid"];
		        $ostate=$_POST["ostate"];
		         $osort=$_POST["osort"];
		         $this->db->table="orders";
		$r=$this->db->update("gid='$gid',gnumber='$gnumber',gprice=$gprice,uid='$uid',aid='$aid',ostate='$ostate',osort='$osort'","oid=$id");
		return $r;
	}
	function  getoneaddress($aid){
        $this->db->table="address";
        $arr=$this->db->selectone("aid=$aid","*");
        $this->db->close();
        return $arr;
    }
}
