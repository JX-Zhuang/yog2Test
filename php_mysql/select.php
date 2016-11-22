<?php
	require("main.php");
	$condition = "*";
	$table = "players";
	$value = "name"."="."'".$_REQUEST["name"]."'";
	$result = $db->select($condition,$table,$value);
	if ($result->num_rows > 0) {
    // 输出每行数据
    	$arr = array("code"=>1,"data"=>[],"msg"=>"获取信息成功");
    	while($row = $result->fetch_assoc()) {
    		$a = array("name"=>$row["name"],"team"=>$row["team"],"number"=>$row["number"],"age"=>$row["age"]);
            array_push($arr["data"],$a);
    	}
    	echo json_encode($arr);
	} else {
    	echo "0 个结果";
	}
	$db->close();
?>