<?php
class goodsModel{
	function __construct(){
		$this->db=new db("goods");
	}
	function getnum(){
		$arr=$this->db->selectAll("count(*) as num","1");
		return $arr[0]["num"];
	}
	function selectshowgoods($limit){
		$arr=$this->db->selectAll("*","1 $limit");
		$this->db->close();
		return $arr;
	}
	function   delgoods(){
		$gid=$_GET["id"];
		$r=$this->db->delete("gid=$gid");
		$this->db->close();
		return $r;
	}
	function selectname($filds="*",$where=1){
		$this->db=new db("category");
		$arr=$this->db->selectAll($filds,$where);
		$this->db->close();
		return $arr;
		
	}
	function insertgoods(){
		$gname=$_POST["gname"];

		

		$gthumb=$_POST["gthumb"];

		$gpictures=$_POST["gpictures"];

		$goprice=$_POST["goprice"];
		$gdiscount=$_POST["gdiscount"];
		$gprice=$_POST["gprice"];
		$gdescription=$_POST["gdescription"];

		$cid=$_POST["cid"];

		$grecommend=$_POST["grecommend"];
		$gsort=$_POST["gsort"];
		$gsells=$_POST["gsells"];
		$this->db=new db("goods");
		$r=$this->db->insert(["gname"=>$gname,"gthumb"=>$gthumb,"gpictures"=>$gpictures,"goprice"=>$goprice,"gdiscount"=>$gdiscount,"gprice"=>$gprice,"gdescription"=>$gdescription,"cid"=>$cid,"grecommend"=>$grecommend,"gsort"=>$gsort,"gsells"=>$gsells]);
		$this->db->close();
		return $r;
		
	}
	function getonegoods(){
		$this->db=new db("goods");
		$gid=$_GET["id"];

		$arr=$this->db->selectone("gid=$gid","*");
		$this->db->close();
		return $arr;
	}
	function updategoods(){
		$gname=$_POST["gname"];
		$gid=$_POST["id"];
		$gthumb=$_POST["gthumb"];
		$gpictures=$_POST["gpictures"];
		$goprice=$_POST["goprice"];
		$gdiscount=$_POST["gdiscount"];
		$gprice=$_POST["gprice"];
		$gdescription=$_POST["gdescription"];
		$cid=$_POST["cid"];
		$grecommend=$_POST["grecommend"];
		$gsort=$_POST["gsort"];
		$gsells=$_POST["gsells"];
		$r=$this->db->update("gname='$gname',gthumb='$gthumb',gpictures='$gpictures',goprice='$goprice',gdiscount='$gdiscount',gprice='$gprice',gdescription='$gdescription',cid='$cid',grecommend='$grecommend',gsort='$gsort',gsells='$gsells'","gid=$gid");	

		return $r;
	}
}