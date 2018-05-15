<?php
class personal extends indexcontroller{
    function __construct()
    {
         parent::__construct();
         $this->smarty->assign("t","4");
    }
    function init(){
        $this->check();
        $this->smarty->display("index/personal.html");
    }
    function sign(){
        $this->smarty->display("index/sign.html");
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
    function checksign(){
        $phone=$_POST["phone"];
        $code=$_POST["code"];
        if($code==$this->session->get('yzm')){
           echo "验证码正确";
        }else{
           $this->smarty->display("index/sign.html");
        }
    }
}