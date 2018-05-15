<?php
class indexcontroller{
	function __construct(){
		$this->smarty=new Smarty();
		$this->smarty->setCompileDir(COMPILE_PATH); 
		$this->smarty->setTemplateDir(VIEWER_PATH);
		$this->session=new session();
	}
	function check(){
		if(!$this->session->get("username1")){
			
			$this->smarty->display("index/login.html");
			exit();
		}
	}
}
