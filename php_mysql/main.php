<?php
	header("Content-Type:text/json;   charset=UTF-8"); 
	class Mysql {
		private $host,	//服务器地址
				$root,	//用户名
				$password,	//密码
				$database;	//数据库
		function __construct($host,$root,$password,$database){
			$this->host = $host;
			$this->root = $root;
			$this->password = $password;
			$this->database = $database;
			$this->connect();
		}
		//连接数据库
		function connect(){
			$this->conn = new mysqli($this->host,$this->root,$this->password,$this->database);
			if($this->conn){
				// echo $this->database.' connect ok!';
			}else{
				die('Could not connect:'.$this->conn->connect_error());
			}
		}
		//断开连接
		function close(){
			mysqli_close($this->conn);
			// echo "close Datebase";
		}
		//查询
		function select($condition,$table,$value){
			$sql = "SELECT $condition FROM $table WHERE $value";
			return $this->conn->query($sql);
		}
		//查询全部
		function selectAll($table){
			$sql = "SELECT * FROM $table";
			return $this->conn->query($sql);
		}
		//删除
		function delete($table,$condition){
			$sql = "DELETE FROM $table WHERE $condition";
			return $this->conn->query($sql);
		}
		//修改
		function update($table,$old,$new){
			$sql = "UPDATE $table SET $new WHERE $old";
			return $this->conn->query($sql);
		}
		//增加
		function insert($table,$key,$value){
			$sql = "INSERT INTO $table($key) VALUES ($value)";
			return $this->conn->query($sql);
		}
		//从结果集中取得一行作为数字数组
		function row($result){
			return  $this->conn->fetch_row($result);
		}
	}
	$db = new Mysql('127.0.0.1:3306','root','root','basketballteam');
?>