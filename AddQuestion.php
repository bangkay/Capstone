<?php
include("config_db.php");

$cat_name = $_POST['category'];
$question = $_POST['question'];

mysql_query("INSERT INTO question(Ques_Desc, Ques_Category) VALUES('".$question. "','" .$cat_name."')");

$array[] = array('status' => 1,
				 'message' => "New Question added.");
				 
echo json_encode($array);
?>