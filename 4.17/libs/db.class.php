<?php
header("Contenttype:'text/html',charset='utf8'");
class db{
	public $host="localhost";
	public $user="root";
	public $password="";
	public $dbname="app";
	public $port=3306;
	function  __construct($table){
		$this->table=$table;
		$this->con=new mysqli($this->host,$this->user,$this->password,$this->dbname,$this->port);
		$this->con->query("set names utf8");
		if($this->con->connect_error){
			echo "数据库连接错误".$this->con->connect_error;
			exit();
		}
	}
	function selectAll($files="*",$where="1"){
		$sql="SELECT ".$files." FROM ".$this->table." WHERE  ".$where;

		$r=$this->con->query($sql);
		$arr=$r->fetch_all(MYSQLI_ASSOC);

		return $arr;

	}
	function selectone($where,$files="*"){
		$sql="SELECT ".$files." FROM ".$this->table." WHERE  ".$where;



		$r=$this->con->query($sql);
		$arr=$r->fetch_array(MYSQLI_ASSOC);

		return $arr;

	}
	function insert($arr=[]){
        $keys="";
        $values="";
        foreach ($arr as $v => $j) {
        	$keys.="`$v`,";
        	$values.="'$j',";
        }
        $keys=substr($keys, 0,strrpos($keys, ","));
        $values=substr($values, 0,strrpos($values, ","));
        $sql="INSERT INTO ".$this->table."($keys)VALUES( $values)";

        $this->con->query($sql);
        if($this->con->affected_rows==1){
        	return  1;
        }else{
        	return 0;
        }
	}
	function update($files,$where){
		$sql="UPDATE ".$this->table." SET $files WHERE $where";

		$this->con->query($sql);
		if($this->con->affected_rows==1){
			return 1;
		}else{
			return 0;
		}

	}
	function delete($where){
		$sql="DELETE FROM ".$this->table. " WHERE $where";

		$this->con->query($sql);
		if($this->con->affected_rows==1){
			return 1;
		}else{
			return 0;
		}

	}
	function close(){
		$this->con->close();
	}
}
//属性 方法
//属性 host uesr password dbname port
//方法 增加 删除 修改 查询 单查询 总查询 关闭 
// $db=new db("goods");
// var_dump($db->selectAll("gname"));
// var_dump($db->selectone("gid=27"));
// $r=$db->insert(["gname"=>"王五","gename"=>"wangwu"]);
// var_dump($r);
// var_dump($db->update(("gname='李四',gename='lisi'"),("gid=31")));
// var_dump($db->delete("gid=30"));
// $db->close();