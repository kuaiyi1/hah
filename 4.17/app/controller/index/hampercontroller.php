<?php
//礼篮
class hamper extends indexcontroller{
	function __construct(){
		parent::__construct();
		$this->hamperModel=new hamperModel();
	}
	function  init(){
		$arr=$this->hamperModel->getAllhamper();
		$this->smarty->assign("cid",$_GET["id"]);
		
		$id=$_GET["id"];
		$data=$this->hamperModel->getcats($id);
		$data=$data["cename"];
		$this->smarty->assign("cid",$_GET["id"]);
		$this->smarty->assign("data","$data");
		$this->smarty->assign("arr",$arr);
		$this->smarty->assign("title","礼篮");
		$this->smarty->display("index/hamper.html");
	}
	function getgid(){
		$arr=$this->hamperModel->getAllhamper();
		echo json_encode($arr);
	}
	function getgprice(){
		$arr=$this->hamperModel->getAllhamper("order by gprice");
		echo json_encode($arr);

	}
	function getgsort(){
		$arr=$this->hamperModel->getAllhamper("order by gsort");
		echo json_encode($arr);
	}
	function getcontent(){
		$arr=$this->hamperModel->getcontent();
		
		$imgarr="";
		$imgarr=explode(";",$arr["gpictures"]);
		array_pop($imgarr);
     	$q=array_slice($imgarr, 0,3);
     	$arr["gpictures"]=$q;
     
		
		$this->smarty->assign("arr",$arr);
		$this->smarty->display("index/product.html");
	}
}