<?php
class cartoon extends indexcontroller{
	function __construct(){
		parent::__construct();
		$this->cartoonModel=new cartoonModel();
	}
	function  init(){
		$this->smarty->assign("cid",$_GET["id"]);
		
	 	$id=$_GET["id"];
		$data=$this->cartoonModel->getcats($id);
		$data=$data["cename"];
		$this->smarty->assign("cid",$_GET["id"]);
		$this->smarty->assign("data","$data");
		$arr=$this->cartoonModel->getAllcartoon();
		$this->smarty->assign("arr",$arr);
		$this->smarty->assign("title","卡通花束");
		$this->smarty->display("index/cartoon.html");
	}
	function getgid(){
		$arr=$this->cartoonModel->getAllcartoon();
		echo json_encode($arr);
	}
	function getgprice(){
		$arr=$this->cartoonModel->getAllcartoon("order by gprice");
		echo json_encode($arr);

	}
	function getgsort(){
		$arr=$this->cartoonModel->getAllcartoon("order by gsort");
		echo json_encode($arr);
	}
	function getcontent(){
		$arr=$this->cartoonModel->getcontent();
		
		$imgarr="";
		$imgarr=explode(";",$arr["gpictures"]);
		array_pop($imgarr);
     	$q=array_slice($imgarr, 0,3);
     	$arr["gpictures"]=$q;
     
		
		$this->smarty->assign("arr",$arr);
		$this->smarty->display("index/product.html");
	}
}