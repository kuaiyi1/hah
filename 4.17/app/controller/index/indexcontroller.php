<?php
class index extends indexcontroller{
	function __construct(){
		parent::__construct();
		$this->indexModel=new indexModel();
	}
	function init(){
		
		$data=$this->indexModel->getcats();
		
		$data1=$this->indexModel->getgoods();
		$this->smarty->assign("data1",$data1);
		$this->smarty->assign("data",$data);
		  $name=$this->session->get("username1");

		  $this->smarty->assign("name",$name);
		$this->smarty->display("index/index.html") ;
	}
}