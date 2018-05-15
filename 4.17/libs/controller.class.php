<?php
class controller{
	function __construct(){
		$this->smarty=new Smarty();
		$this->smarty->setCompileDir(COMPILE_PATH); 
		$this->smarty->setTemplateDir(VIEWER_PATH);
		$this->session=new session();
	}
	function jump1($msg,$href){
		$this->smarty->assign("msg",$msg);
		$this->smarty->assign("href",$href);
		$this->smarty->display("message.html");
	}
	function check(){
		$j=$this->session->get("user");
		 
		if(!$j){
			$msg="尚未登录,请登录";
			$href="index.php?m=admin&c=loginin&a=loginin";
			$this->jump1($msg,$href);
			exit();
		}
	}
}