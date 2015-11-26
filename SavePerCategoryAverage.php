<?php
include("config_db.php");

$a = $_POST['A'];
$b = $_POST['B'];
$c = $_POST['C'];
$d = $_POST['D'];
$e = $_POST['E'];

$query = "INSERT INTO result_student(A, B, C, D, E) VALUES('".$a."', '".$b."', '".$c."', '".$d."', '".$e."')";
mysql_query($query);

$lastId = mysql_insert_id();

$array[] = array('status' => 1,
				 'messsage' => "Average per category save.");
				
echo json_encode($array);
?>