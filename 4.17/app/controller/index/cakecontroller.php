<?php
//蛋糕
class cake extends indexcontroller{
	function __construct(){
		parent::__construct();
		$this->cakeModel=new cakeModel();
	}
	function init(){
		$this->smarty->assign("cid",$_GET["id"]);
		// $data=$this->indexModel->getcats();
	 $id=$_GET["id"];
		$data=$this->cakeModel->getcats($id);
		$data=$data["cename"];
		$this->smarty->assign("cid",$_GET["id"]);
		$this->smarty->assign("data","$data");
		$arr=$this->cakeModel->getAllcake();
		$this->smarty->assign("arr",$arr);
		$this->smarty->assign("title","蛋糕");
		$this->smarty->display("index/cake.html");
	}
	function getgid(){
		$arr=$this->cakeModel->getAllcake();
		echo json_encode($arr);
	}
	function getgprice(){
		$arr=$this->cakeModel->getAllcake("order by gprice");
		echo json_encode($arr);

	}
	function getgsort(){
		$arr=$this->cakeModel->getAllcake("order by gsort");
		echo json_encode($arr);
	}
	function getcontent(){
		$arr=$this->cakeModel->getcontent();
		
		$imgarr="";
		$imgarr=explode(";",$arr["gpictures"]);
		array_pop($imgarr);
     	$q=array_slice($imgarr, 0,3);
     	$arr["gpictures"]=$q;
     
		
		$this->smarty->assign("arr",$arr);
		$this->smarty->display("index/product.html");
	}
}
