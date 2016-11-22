<?php
//删除
	require("main.php");
	$table = "players";

	$name = "name"."=".$_GET["name"];
	$team = "team"."=".$_GET["team"];
	$number = "number"."=".$_GET["number"];
	$age = "age"."=".$_GET["age"];
	$db->delete($table,$condition);
	$arr = array("code"=>1,"msg"=>"删除成功");
	echo json_encode($arr);
	$db->close();
?>