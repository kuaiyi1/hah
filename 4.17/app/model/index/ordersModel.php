<?php
class ordersModel{
    function __construct(){
        $this->db=new db("orders");

    }
    function selectallorders($limit){
        $arr=$this->db->selectAll("*","1 $limit");
        $this->db->close();
        return $arr;
    }
    function paid($limit){
        $arr=$this->db->selectAll("*","ostate='1' $limit");
        $this->db->close();
        return $arr;
    }
    function unpaid($limit){
        $arr=$this->db->selectAll("*","ostate='0' $limit");
        $this->db->close();
        return $arr;
    }
}