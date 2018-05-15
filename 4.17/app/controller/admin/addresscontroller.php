<?php
class address extends controller{
	function __construct(){
		parent::__construct();
		$this->check();
		$this->addressModel=new addressModel();
	}	
	function showaddress(){
		 $num=$this->addressModel->getnum();

		 $pager=new pager($num,"3");
		 $pager->output();

		 $data=$this->addressModel->selectaddress($pager->limit);

		 $str=$pager->str;
		 $this->smarty->assign("data",$data);
		 $this->smarty->assign("str",$str);
		 $this->smarty->display("addresslist.html");
	}
	function deladdress(){
		$r=$this->addressModel->deladdress();
		if($r==1){
			$msg="删除成功";

		}else{
			$msg="删除失败";

		}
		$href="index.php?m=admin&c=address&a=showaddress";
		$this->jump1($msg,$href);
	}
	function addadress(){
		$this->smarty->display("addressadd.html");
	}
	function checkaddressadd(){
		$r=$this->addressModel->insertaddress();
		if($r==1){
			$msg="添加成功";
			$href="index.php?m=admin&c=address&a=showaddress";
		}else{
			$msg="添加失败";
			$href="index.php?m=admin&c=address&a=addadress";
		}
		$this->jump1($msg,$href);
	}
	function updateaddress(){
		$data=$this->addressModel->getsomeaddress();
		// var_dump($data);
		$area=$data["area"];
		$area=explode("-",$area );
		// var_dump($area);
		$this->smarty->assign("area",$area);
		$this->smarty->assign("data",$data);
		$this->smarty->display("addressupdate.html");
		
	}
	function checkupdateaddress(){
		  $r=$this->addressModel->update();
		  $aid=$_POST["id"];
		  if($r==1){
		  	$msg="修改成功";
		  	$href="index.php?m=admin&c=address&a=showaddress";
		  }else{
		  	$msg="修改失败";
		  	$href="index.php?m=admin&c=address&a=updateaddress&id=$aid";
		  }
		  $this->jump1($msg,$href);
	}

}