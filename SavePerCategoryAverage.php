<?php
include("config_db.php");

$stud_res_id = $_POST['stud_res_id'];
$stud_res_cat = $_POST['stud_res_cat'];
$stud_res_cat_ave = $_POST['stud_res_cat_ave'];

$query = "INSERT INTO result_student_per_category(stud_res_id, stud_res_cat, stud_res_cat_ave) VALUES('".$stud_res_id."', '".$stud_res_cat."', '".$stud_res_cat_ave."')";
mysql_query($query);

$lastId = mysql_insert_id();

$array[] = array('status' => 1,
				 'message' => "Average per category save.");
				
echo json_encode($array);
?>