<?php
class orders extends controller{
	function __construct(){
		parent::__construct();
		$this->ordersModel=new ordersModel();
		$this->check();
	}
	function showorders(){
		$num=$this->ordersModel->getnum();

		$pager=new pager($num,3);
		$pager->output();
		$data=$this->ordersModel->selectshoworders($pager->limit);
		
		$str=$pager->str;
		$this->smarty->assign("str",$str);
		$this->smarty->assign("data",$data);
		$this->smarty->display("orderslist.html");
	}
	function addorders(){
		$arr=$this->ordersModel->getgname();

		$arr1=$this->ordersModel->getusername();
		
		
		$this->smarty->assign("arr1",$arr1);
		$this->smarty->assign("arr",$arr);
		
		
		
		
		
		$this->smarty->display("ordersadd.html");
	}
	function checkordersadd(){
		$r=$this->ordersModel->insert();
		if($r==1){
			$msg="添加成功";
			$href="index.php?m=admin&c=orders&a=showorders";
		}else{
			$msg="添加失败";
			$href="index.php?m=admin&c=orders&a=addorders";
		}
		$this->jump1($msg,$href);
	}
	function delorders(){
		$id=$_GET["id"];
		$r=$this->ordersModel->delorders($id);
		if($r==1){
			$msg="删除成功";
		}else{
			$msg="删除失败";

		}
		$href="index.php?m=admin&c=orders&a=showorders";
		$this->jump1($msg,$href);
	}
	function getaddress(){
		 $uid=$_POST["id"];
		
		$arr2=$this->ordersModel->getaddress($uid);
		echo json_encode($arr2);
	}
	function getprice(){
		$id=$_POST["id"];
		
		$arr=$this->ordersModel->getgprice($id);
		echo json_encode($arr);
	}
	function updateorders(){
		$id=$_GET["id"];
		$arr=$this->ordersModel->getgname();

		$arr2=$this->ordersModel->getusername();
		$arr1=$this->ordersModel->getoneorders($id);
         $arr3=$this->ordersModel->getoneaddress($arr1["aid"]);


		$this->smarty->assign("arr",$arr);
		$this->smarty->assign("arr2",$arr2);
        $this->smarty->assign("arr3",$arr3);
		$this->smarty->assign("arr1",$arr1);
		$this->smarty->display("ordersupdate.html");
	}
	function checkordersupdate(){
		$r=$arr=$this->ordersModel->update();
		$id=$_POST["id"];
		if($r==1){
			$msg="修改成功";
			$href="index.php?m=admin&c=orders&a=showorders";

		}else{
			$msg="修改失败";
			$href="index.php?m=admin&c=orders&a=updateorders&id=$id";
		}
		$this->jump1($msg,$href);
	}
}