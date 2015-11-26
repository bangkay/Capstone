<?php
include("config_db.php");

$teacher_name = $_POST['teacher_name'];
$dept_name = $_POST['dept_name'];

mysql_query("INSERT INTO faculty(F_Fullname, Dept_Name) VALUES('".$teacher_name."', '".$dept_name."')");

$data[] = array('status' => 1,
				'message' => "Added new faculty member.");
				
echo json_encode($data);
?>