<?php
//鲜花
class flower extends indexcontroller{
	function __construct(){
		parent::__construct();
		$this->flowerModel=new flowerModel();
		
	}
	function init(){
		
		// $data=$this->indexModel->getcats();
		$arr=$this->flowerModel->getAllflower();
		$id=$_GET["id"];
		$data=$this->flowerModel->getcats($id);
		$data=$data["cename"];
		
		$this->smarty->assign("data","$data");
		$this->smarty->assign("cid",$_GET["id"]);
		$this->smarty->assign("arr",$arr);
		$this->smarty->assign("title","鲜花");
		$this->smarty->display("index/xianhua.html");
	}
	function getgid(){
		$arr=$this->flowerModel->getAllflower();
		echo json_encode($arr);
	}
	function getgprice(){
		$arr=$this->flowerModel->getAllflower("order by gprice");
		echo json_encode($arr);

	}
	function getgsort(){
		$arr=$this->flowerModel->getAllflower("order by gsort");
		echo json_encode($arr);
	}
	function getcontent(){
		$arr=$this->flowerModel->getcontent();
		
		$imgarr="";
		$imgarr=explode(";",$arr["gpictures"]);
		array_pop($imgarr);
     	$q=array_slice($imgarr, 0,3);
     	$arr["gpictures"]=$q;
     
		
		$this->smarty->assign("arr",$arr);
		$this->smarty->display("index/product.html");
	}
}