<?php
class loginin extends controller{
	function __construct(){
		parent::__construct();
		$this->lm=new logininModel();
		
	}
	function loginin(){
		$this->smarty->assign("title","登录");
		// $this->smarty->display("header.html");
		$this->smarty->display("login.html");
	}
	function code(){
		$code=new code();
		
		$code->output();
	}
	function checklogin(){
		$name=$_POST["name"];
		$pass=$_POST["password"];
		$code=$_POST["code"];
		 
		if(strtoupper($code)!==$this->session->get("code")){

			$msg="验证码错误";
			$href="index.php?m=admin&c=loginin&a=loginin";
		   	$this->jump1($msg,$href);
			exit();
		}
		$arr=$this->lm->getadmin();
		if($arr["username"]==$name){
			
			
			if($arr["password"]==$pass){
				$this->session->set("user",$name);
				$msg="登录成功";
			$href="index.php?m=admin&c=index&a=init";
			
			$this->jump1($msg,$href);
			}else{
				$msg="密码错误";
		$href="index.php?m=admin&c=loginin&a=loginin";
			
			$this->jump1($msg,$href);
			}
		}else{
				$msg="用户名错误";
			$href="index.php?m=admin&c=loginin&a=loginin";
			$this->jump1($msg,$href);
		}
		 

	}
	function logout(){
		$this->session->del("user");
		$j=$this->session->get("user");
		
		if($j){
			$msg="退出失败";
			$href="index.php?m=admin";
		}else{
			$msg="退出成功";
			$href="index.php?m=admin&c=loginin&a=loginin";
		}
		$this->jump1($msg,$href);

	}
	
	function changepass(){

		$arr=$this->lm->getadmin();
		$name=$arr["username"];

		$this->smarty->assign("username",$name);
         $this->smarty->display("pass.html");

	
	}
	function checkpass(){
		$arr=$this->lm->getadmin();
		$pass=$arr["password"];
		$mpass=$_POST["mpass"];
	if($mpass==$pass){
		$newpass=$_POST["newpass"];
		$r=$this->lm->updateadmin($newpass);
		
		if($r){
			$msg="修改密码成功";
		}else{
			$msg="修改密码失败";
		}
	}else{
			$msg="原密码错误";

		}
		$href="index.php?m=admin&c=loginin&a=changepass";
		$this->jump1($msg,$href);
	}
	
		
	
}