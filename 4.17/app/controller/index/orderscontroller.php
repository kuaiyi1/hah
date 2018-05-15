<?php
class orders extends indexcontroller{
    function __construct(){
        parent::__construct();
        $this->ordersModel=new ordersModel();
    }
    function init(){
        $arr=$this->ordersModel->selectallorders("limit 0,10");
        $this->smarty->assign("arr",$arr);
        $this->smarty->display("index/suoyoudingdan.html");
    }
    function paid(){
        $arr=$this->ordersModel->paid("limit 0,10");
        $this->smarty->assign("arr",$arr);
        $this->smarty->display("index/suoyoudingdan.html");
    }
    function unpaid(){
        $arr=$this->ordersModel->unpaid("limit 0,10");
        $this->smarty->assign("arr",$arr);
        $this->smarty->display("index/suoyoudingdan.html");
    }
}