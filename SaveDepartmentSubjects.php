<?php
include("config_db.php");

$deptId = $_POST['deptId'];
$subjName = $_POST['subjName'];

mysql_query("INSERT INTO subjects(Sub_Name, Dept_ID) VALUES('".$subjName."', '".$deptId."')");

$data[] = array('status' => 1,
				'message' => "Subject Added.");
				
echo json_encode($data);
?>