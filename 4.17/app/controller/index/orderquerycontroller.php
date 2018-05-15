<?php
class orderquery extends indexcontroller{
	function __consstruct(){
		parent::__consstruct();
		$this->orderqueryModel=new orderqueryModel();
	}
	function  init(){
//		$this->smarty->display("index/dingdanchaxun.html");
	}
}