<?php
include("config_db.php");

$instructorId = $_POST['instructorId'];
$subjectId = $_POST['subjectId'];
$semesterId = $_POST['semesterid'];
$schyear = $_POST['schyear'];

mysql_query("INSERT INTO faculty_subjects(F_ID, Sub_ID, Sem_ID, sch_year) VALUES('".$instructorId."', '".$subjectId."', '".$semesterId."', '".$schyear."') ");

$data[] = array('status' => 1,
				'message' => "Added faculty load.");
				
echo json_encode($data);
?>