<?php
//增加
	require("main.php");
	$table = "players";
	$key = "name,team,number,age";
	$arrParams = ['name','team','number','age'];
	$value = "'$_GET[name]','$_GET[team]','$_GET[number]','$_GET[age]'";
	$db->insert($table,$key,$value);
	$arr = array("code"=>1,"msg"=>"增加成功");
	echo json_encode($arr);
	$db->close();
?>