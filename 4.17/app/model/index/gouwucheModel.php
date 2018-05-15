<?php
class gouwucheModel{
    function __construct()
    {
        $this->db=new db("orders");
    }
    function selectuserid($phone){
        $this->db->table="user";
        $uid=$this->db->selectone("phone=$phone","uid");

        return $uid;
    }
    function selectgouwuche(){

        $this->db->table="orders,goods,user";
        $arr=$this->db->selectAll("*","orders.gid=goods.gid  && orders.uid=user.uid && orders.ostate='0' ");




        return $arr;

    }


    function deletegouwuche($gid){
        $r=$this->db->delete("gid=$gid ");



        return $r;

    }
    function insertgouwuche($uid){
        $this->db->table="orders";
        $gid=$_GET["gid"];
        $gprice=$_GET["gprice"];
        $num=$_GET["num"];
        $r=$this->db->insert(["gid"=>$gid,"gnumber"=>$num,"gprice"=>$gprice,"uid"=>$uid]);

        return $r;
    }

}