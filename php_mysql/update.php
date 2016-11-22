<?php
//修改
	require("main.php");
	$table = "players";
	$old = "team='Lakers' AND name='Jesse'";
	$new = "team='Lakers' , number=9";
	$result = $db->update($table,$old,$new);
	$arr = array("code"=>1,"msg"=>"修改成功");
	echo json_encode($arr);
	$db->close();
?>