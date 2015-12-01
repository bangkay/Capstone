<?php
include("config_db.php");

$facultyId = $_POST['facultyId'];
$subjectId = $_POST['subjectId'];
$score = $_POST['score'];
$remarks = $_POST['remarks'];

$query = "INSERT INTO result_student(F_ID, S_ID, Res_Score, Res_Remarks) VALUES('".$facultyId."', '".$subjectId."', '".$score."', '".$remarks."')";
mysql_query($query);

$lastId = mysql_insert_id();

$array[] = array('status' => 1,
				 'message' => "Teacher Evaluation Successful.",
				 'returnid' => $lastId);
				
echo json_encode($array);
?>		  