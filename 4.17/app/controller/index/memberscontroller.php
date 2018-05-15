<?php
class members extends indexcontroller{
	function __construct(){
		parent::__construct();

		$this->membersModel=new membersModel();

	}
	function  init(){
		$this->check();
        $username1=$this->session->get("username1");

        $this->smarty->assign("phone",$username1);
		$this->smarty->display("index/wodexinxi.html");
	}
	function getreg(){
		 $this->smarty->display("index/reg1.html");
	}

	function checkphone(){
        $uphone = $_GET["phone"];
        $yanZhengnum =$this->GetRandStr(4);
        //初始化必填
        $options['accountsid']='442c51c4d2a95aededa6f12a23b26fe4';
        $options['token']='887b72f88fc33eacb1b3ad92daa2fd4f';
        $ucpass = new Ucpaas($options);
        $ucpass->getDevinfo('json');
        $to = $uphone;
        $templateId = "191761";
        $param=$yanZhengnum;
        $this->session->set("yzm",$yanZhengnum);
        $appId = "e771411626af47b381a704c419e23b16";
        $ucpass->templateSMS($appId,$to,$templateId,$param);
    }
    function GetRandStr($len)
    {
        $chars = array(
            "0", "1", "2",
            "3", "4", "5", "6", "7", "8", "9"
        );
        $charsLen = count($chars) - 1;
        shuffle($chars);
        $output = "";
        for ($i=0; $i<$len; $i++)
        {
            $output .= $chars[mt_rand(0, $charsLen)];
        }
        return $output;
    }
    function checkregphone(){
        $r=$this->membersModel->checkrepeat();
        
        if(empty($r)){
            echo "true";
        }else{
            echo "false";
        }
    }
    function checksign(){
        $phone=$_POST["phone"];
        $code=$_POST["code"];
        if($code==$this->session->get('yzm')){
            $r=$this->membersModel->insert();

            if($r==1){
                $this->session->set("phone",$phone);
                $this->smarty->assign("notice","添加成功");
                 $this->smarty->display("index/reg3.html");
            }else{
                $this->smarty->assign("notice","添加失败");
                 $this->smarty->display("index/reg1.html");
            }
           // $this->smarty->display("index/reg3.html");
        }else{
            $this->smarty->assign("notice","验证码错误");
           $this->smarty->display("index/reg1.html");
        }
    }
    function checkaddpass(){
            $phone=$this->session->get("phone");
           
            $r=$this->membersModel->update($phone);
            if($r==1){
              
                 $this->smarty->display("index/login.html"); 
            }else{
                $this->smarty->assign("notice","添加失败");
                 $this->smarty->display("index/reg3.html"); 
            }

    }
    function checklogin(){
           $phone=$_POST["phone"];
           $password=md5($_POST["password"]);
           $r=$this->membersModel->selectphone();
            if(!empty($r)){
                $this->session->set("username1",$phone);
                if($r["password"]==$password){
                    $phone=$this->session->get("username1");
                    // var_dump($phone);
                    // exit();
                    $this->smarty->assign("phone",$phone);
                    $this->smarty->display("index/wodexinxi.html");
                }else{
                    $this->smarty->assign("notice","密码错误");
                 $this->smarty->display("index/login.html"); 
                }
                
               
            }else{
                $this->smarty->assign("notice","用户名不存在");
                 $this->smarty->display("index/login.html"); 
            }
    }
    function autologin(){
         $username1=$_GET["username1"];
         $this->session->set("username1",$username1);
         $this->smarty->assign("phone",$username1);
          $this->smarty->display("index/wodexinxi.html");
    }
    function exitlogin(){
        $this->session->del("username1");
        $this->smarty->display("index/login.html");
    }
    function  person(){
	    $username1=$this->session->get("username1");
	    $data=$this->membersModel->selectperson($username1);
        $this->smarty->assign("data",$data);
	    $this->smarty->display("index/person.html");
    }
    function updateperson(){
        $username1=$this->session->get("username1");
        $r=$this->membersModel->updateperson($username1);
        if($r==1){
            $this->init();
        }else{
            $this->person();
        }
    }

}