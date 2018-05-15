<?php
class openflower extends indexcontroller{
	function __construct(){
		parent::__construct();
		$this->openflowerModel=new openflowerModel();
	}
	function  init(){
		$this->smarty->assign("cid",$_GET["id"]);
		 $id=$_GET["id"];
		$data=$this->openflowerModel->getcats($id);
		$data=$data["cename"];
		$this->smarty->assign("cid",$_GET["id"]);
		$this->smarty->assign("data","$data");
		$arr=$this->openflowerModel->getAllopenflower();
		$this->smarty->assign("arr",$arr);
		$this->smarty->assign("title","开业花篮");
		$this->smarty->display("index/openflower.html");
	}
	function getgid(){
		$arr=$this->openflowerModel->getAllopenflower();
		echo json_encode($arr);
	}
	function getgprice(){
		$arr=$this->openflowerModel->getAllopenflower("order by gprice");
		echo json_encode($arr);

	}
	function getgsort(){
		$arr=$this->openflowerModel->getAllopenflower("order by gsort");
		echo json_encode($arr);
	}
	function getcontent(){
		$arr=$this->openflowerModel->getcontent();
		
		$imgarr="";
		$imgarr=explode(";",$arr["gpictures"]);
		array_pop($imgarr);
     	$q=array_slice($imgarr, 0,3);
     	$arr["gpictures"]=$q;
     
		
		$this->smarty->assign("arr",$arr);
		$this->smarty->display("index/product.html");
	}
}