<?php
class categoryModel{
	function __construct(){
		$this->db=new db("category");
	}
	function getnum(){
		$arr=$this->db->selectAll("count(*) as num","1");
		return $arr[0]["num"];
	}
	function selectcategory($limit){
		$arr=$this->db->selectAll("*","1 $limit");
		$this->db->close();
		return $arr;
	}
	function delcategory(){
		$cid=$_GET["id"];
		$r=$this->db->delete("cid=$cid");
		$this->db->close();
		return $r;
	}
	function insertcategory(){
		 $cname=$_POST["cname"];
		  $cename=$_POST["cename"];
		 $cthumb=$_POST["cthumb"];
		 $r=$this->db->insert(["cname"=>$cname,"cename"=>$cename,"cthumb"=>$cthumb]);
		 $this->db->close();
		return $r;

	}
	function getsomecategory(){
		$cid=$_GET["id"];
		$arr=$this->db->selectone("cid=$cid","*");
		$this->db->close();
		return $arr;
	}
	function update(){
		 $cid=$_POST["cid"];
		 $cname=$_POST["cname"];
		 $cename=$_POST["cename"];
		 $cthumb=$_POST["cthumb"];
		 $r=$this->db->update("cname='$cname',cename='$cename',cthumb='$cthumb'","cid=$cid");
		 $this->db->close();
		 return $r; 
	}
	
}