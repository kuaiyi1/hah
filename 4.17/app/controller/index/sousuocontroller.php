<?php
class sousuo extends indexcontroller{
	function __construct(){
		parent::__construct();
		$this->sousuoModel=new sousuoModel();
	}
	function init(){
		
		
		$this->smarty->display("index/sousuo.html");
	}
}
