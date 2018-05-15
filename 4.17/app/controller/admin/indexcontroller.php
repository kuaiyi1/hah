<?php
class index extends controller{
	function __construct(){
		parent::__construct();
		$this->check();
	}
	function init(){
		

		$this->smarty->assign("title","后台管理系统");
		$this->smarty->display("admin.html") ;
	}
}