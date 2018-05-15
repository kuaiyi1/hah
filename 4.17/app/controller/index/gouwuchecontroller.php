<?php
class gouwuche extends indexcontroller{
	function __construct(){
		parent::__construct();
		 $this->gouwucheModel=new  gouwucheModel();
	}
	function init(){

        $num=0;
        $gprice=0;


        $arr=$this->gouwucheModel->selectgouwuche();

        foreach($arr as $v){
                $num+=$v["gnumber"];
                $gprice+=($v["gnumber"]*$v["gprice"]);


            }

            $this->smarty->assign("num",$num);
            $this->smarty->assign("gprice",$gprice);
            $this->smarty->assign("arr",$arr);


		$this->smarty->display("index/gouwuche.html");
	}
	function deletegouwuche(){
	    $gid=$_GET["gid"];

        $r=$this->gouwucheModel->deletegouwuche($gid);

        if($r=="1"){

            $arr=$this->gouwucheModel->selectgouwuche1();

           echo json_encode($arr);

        }else{
            $arr=$this->gouwucheModel->selectgouwuche1();

            echo json_encode($arr);
        }
    }
    function insertgouwuche(){
           $gid=$_GET["gid"];
           $gprice=$_GET["gprice"];
           $num=$_GET["num"];
           $phone=$this->session->get("username1");

           $uid=$this->gouwucheModel->selectuserid($phone);
           $r=$this->gouwucheModel->insertgouwuche($uid['uid']);

           if($r==1){

               $this->init();
           }else{

              $this->init();
           }
    }
    function insertgouwuche1(){
        $gid=$_GET["gid"];
        $gprice=$_GET["gprice"];
        $num=$_GET["num"];
        $phone=$this->session->get("username1");

        $uid=$this->gouwucheModel->selectuserid($phone);
        $r=$this->gouwucheModel->insertgouwuche($uid['uid']);

        if($r=="1"){

           echo  json_encode("1");
        }else{
           echo json_encode("0");
        }
    }

}