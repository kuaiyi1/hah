<?php
class rooter{
	function jump(){
		$this->m=isset($_GET["m"])?$_GET["m"]:"index";
		$this->c=isset($_GET["c"])?$_GET["c"]:"index";
		$this->a=isset($_GET["a"])?$_GET["a"]:"init";
		$filename=CONTROLLER_PATH.$this->m.DS.$this->c."controller.php";
		$modelpath=MODEL_PATH.$this->m.DS.$this->c."Model.php";
		
		if(is_file($modelpath)){
			include $modelpath;
		}
		if(is_file($filename)){
			include $filename;
			if(class_exists($this->c)){
				$classname=$this->c;
				$class=new $classname();
				if(method_exists($classname,$this->a )){
					$m=$this->a;
					 $obj=$class->$m();
				}else{
					echo "方法不存在";
					include ROOT."404.html";
				}
			}else{
				echo "类名不曾存在";
				include ROOT."404.html";
			}

		}else{
			echo "文件路径错误";
			include "404.html";
		}
	}
}