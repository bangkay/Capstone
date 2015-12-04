<?php
include("config_db.php");

$facultyId = $_POST['facultyId'];
$subjectId = $_POST['subjectId'];
$score = $_POST['score'];
$remarks = $_POST['remarks'];
$semId = $_POST['semId'];
$schYear = $_POST['schYear'];

$query = "INSERT INTO result_student(F_ID, S_ID, Res_Score, Res_Remarks, Sem_ID, sch_year) VALUES('".$facultyId."', '".$subjectId."', '".$score."', '".$remarks."', '".$semId."', '".$schYear."')";
mysql_query($query);

$lastId = mysql_insert_id();

$array[] = array('status' => 1,
				 'message' => "Teacher Evaluation Successful.",
				 'returnid' => $lastId);
				
echo json_encode($array);
?>		  