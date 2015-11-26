<?php
include("config_db.php");

$cat_name = $_POST['category'];

mysql_query("INSERT INTO categories(cat_desc) VALUES('".$cat_name."')");

$array[] = array('status' => 1,
				 'message' => "New category added.");
				 
echo json_encode($array);
?>