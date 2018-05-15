<?php
//巧克力
class chocolate extends indexcontroller{
	function __construct(){
		parent::__construct();
		$this->chocolateModel=new chocolateModel();
	}
	function  init(){
		$this->smarty->assign("cid",$_GET["id"]);
		
	 	$id=$_GET["id"];
		$data=$this->chocolateModel->getcats($id);
		$data=$data["cename"];
		$this->smarty->assign("cid",$_GET["id"]);
		$this->smarty->assign("data","$data");
		$arr=$this->chocolateModel->getAllchocolate();
		$this->smarty->assign("arr",$arr);
		$this->smarty->assign("title","巧克力");
		$this->smarty->display("index/chocolate.html");
	}
	function getgid(){
		$arr=$this->chocolateModel->getAllchocolate();
		echo json_encode($arr);
	}
	function getgprice(){
		$arr=$this->chocolateModel->getAllchocolate("order by gprice");
		echo json_encode($arr);

	}
	function getgsort(){
		$arr=$this->chocolateModel->getAllchocolate("order by gsort");
		echo json_encode($arr);
	}
	function getcontent(){
		$arr=$this->chocolateModel->getcontent();
		
		$imgarr="";
		$imgarr=explode(";",$arr["gpictures"]);
		array_pop($imgarr);
     	$q=array_slice($imgarr, 0,3);
     	$arr["gpictures"]=$q;
     
		
		$this->smarty->assign("arr",$arr);
		$this->smarty->display("index/product.html");
	}
	function getcats($id){
		$cdb=new db("category");
		$ar=$cdb->selectone("cid=$id","cename");
		$cdb->close();
		return $ar;
	}

}