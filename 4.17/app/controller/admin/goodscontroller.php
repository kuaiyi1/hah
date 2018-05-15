<?php
class goods extends controller{
	function __construct(){
		parent::__construct();
		$this->goodsModel=new goodsModel();
		
		$this->check();
	}
	function showgoods(){
		 $num=$this->goodsModel->getnum();
		 $pager=new pager($num,3);
		 $pager->output();
		  $data=$this->goodsModel->selectshowgoods($pager->limit);
		
		 foreach($data as $k=>$v){
	 		$pics=$v['gpictures'];

     		 $arr=explode(";",$pics);
     	 	array_pop($arr);
     	 	$q=array_slice($arr, 0,3);
     	 	$data[$k]["gpictures"]=$q;
      			
      
      			
      	}



      		
			

     
		  $str=$pager->str;
		  
		  $this->smarty->assign("data",$data);
		  $this->smarty->assign("str",$str);
		  $this->smarty->display("goodslist.html");
	}
	function delgoods(){
		
		$r=$this->goodsModel->delgoods();
		if($r==1){
			$msg="删除成功";

		}else{
			$msg="删除失败";

		}
		$href="index.php?m=admin&c=goods&a=showgoods";
		$this->jump1($msg,$href);
	}
	function addgoods(){
		$arr=$this->goodsModel->selectname();
		$this->smarty->assign("arr",$arr);
		$this->smarty->display("goodsadd.html");
	}
	function checkgoodsadd(){
		$r=$this->goodsModel->insertgoods();
		if($r==1){
			$msg="添加成功";
			$href="index.php?m=admin&c=goods&a=showgoods";
		}else{
			$msg="添加失败";
			$href="index.php?m=admin&c=goods&a=addgoods";
		}

		$this->jump1($msg,$href);
	}
	function updategoods(){
		$arr1=$this->goodsModel->selectname();

		$this->smarty->assign("arr1",$arr1);
		$arr=$this->goodsModel->getonegoods();
		        $imgs="";
 

 			$pics=$arr['gpictures'];
      		$r=explode(";",$pics);
      		array_pop($r);
      
      		foreach ($r as $src){
         	 $imgs.="<img src='{$src}'>";
     		}
	 		
      	$this->smarty->assign("imgs",$imgs);
		$this->smarty->assign("arr",$arr);
		$this->smarty->display("goodsupdate.html");
	}
	function checkgoodsupdate(){
		$r=$this->goodsModel->updategoods();
		$gid=$_POST["id"];
		  if($r==1){
		  	$msg="修改成功";
		  	$href="index.php?m=admin&c=goods&a=showgoods";
		  }else{
		  	$msg="修改失败";
		  	$href="index.php?m=admin&c=goods&a=updategoods&id=$gid";
		  }
		  $this->jump1($msg,$href);
	}
}