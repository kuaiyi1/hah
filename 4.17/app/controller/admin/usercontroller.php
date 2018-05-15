<?php
class user extends controller{
	function __construct(){
		parent::__construct();
		$this->userModel=new userModel();
		$this->check();
	}
	function showuser(){
		$num=$this->userModel->getusernum();
		$page=new pager($num,3);
		$page->output();

		$data=$this->userModel->getuser($page->limit);

		$str=$page->str;
		$this->smarty->assign("str",$str);
		$this->smarty->assign("data",$data);
		$this->smarty->display("userlist.html");
	}
	function deluser(){
		$id=$_GET["id"];
		$r=$this->userModel->deluser($id);
		if($r==1){
			$msg="删除成功";
		}else{
			$msg="删除失败";

		}
		$href="index.php?m=admin&c=user&a=showuser";
		$this->jump1($msg,$href);

	}
	function adduser(){
		$this->smarty->display("useradd.html");
	}
	function upload(){
		 $upload=new upload();
		 $path=$upload->upload("file"); 	
	}
	function checkuseradd(){
		$r=$this->userModel->insert();
		
		if($r==1){
			$msg="添加成功";
			$href="index.php?m=admin&c=user&a=showuser";
		}else{
			$msg="添加失败";
			$href="index.php?m=admin&c=user&a=adduser";
		}
		$this->jump1($msg,$href);
	}
	function updateuser(){
		$id=$_GET["id"];
		$arr=$this->userModel->getoneuser($id);
		
		$this->smarty->assign("arr",$arr);
		$this->smarty->display("userupdate.html");
		// $r=$ths->userModel->update();
	}
	function checkupdateuser(){
		$r=$this->userModel->update();
		$id=$_POST["id"];
		if($r==1){
			$msg="修改成功";
			$href="index.php?m=admin&c=user&a=showuser";

		}else{
			$msg="修改失败";
			$href="index.php?m=admin&c=user&a=updateuser&id=$id";
		}
		$this->jump1($msg,$href);
	}
	


}