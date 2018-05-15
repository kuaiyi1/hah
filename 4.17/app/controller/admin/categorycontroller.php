<?php
class category extends controller{
	function __construct(){
		parent::__construct();
		$this->category=new categoryModel();
		$this->check();
	}
	function showcategory(){
		$num=$this->category->getnum();
		$pager=new pager($num,3);
		$pager->output();
		$data=$this->category->selectcategory($pager->limit);
		$str=$pager->str;
		$this->smarty->assign("data",$data);
		$this->smarty->assign("str",$str);
		$this->smarty->display("categorylist.html");

	}
	function delcategory(){
		$r=$this->category->delcategory();
		if($r==1){
			$msg="删除成功";

		}else{
			$msg="删除失败";

		}
		$href="index.php?m=admin&c=category&a=showcategory";
		$this->jump1($msg,$href);
	}
	function addcategory(){
		$this->smarty->display("categoryadd.html");
	}
	function checkcategoryadd(){
		$r=$this->category->insertcategory();
		if($r==1){
			$msg="添加成功";
			$href="index.php?m=admin&c=category&a=showcategory";
		}else{
			$msg="添加失败";
			$href="index.php?m=admin&c=category&a=addcotegory";
		}
		$this->jump1($msg,$href);
	}
	function updatecategory(){
		$arr=$this->category->getsomecategory();
		$this->smarty->assign("arr",$arr);
		$this->smarty->display("categoryupdate.html");
	}
	function checkcategoryupdate(){
		$r=$this->category->update();
		$cid=$_POST["cid"];
		  if($r==1){
		  	$msg="修改成功";
		  	$href="index.php?m=admin&c=category&a=showcategory";
		  }else{
		  	$msg="修改失败";
		  	$href="index.php?m=admin&c=category&a=updatecategory&id=$cid";
		  }
		  $this->jump1($msg,$href);
	}
}