<?php
include("config_db.php");

$dept_name = $_POST['department'];

mysql_query("INSERT INTO department(Dept_Name) VALUES('".$dept_name."')");

$data[] = array('status' => 1,
				'message' => "New Department added.");
				
echo json_encode($data);
?>