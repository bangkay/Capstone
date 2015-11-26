<?php
include("config_db.php");

$facultyId = $_POST['facultyId'];
$subjectId = $_POST['subjectId'];
$score = $_POST['score'];
$remarks = $_POST['remarks'];

$query = "INSERT INTO result(F_ID, S_ID, Res_Score, Res_Remarks) VALUES('".$facultyId."', '".$subjectId."', '".$score."', '".$remarks."')";
mysql_query($query);

$array[] = array('status' => 1,
				'messsage' => "Teacher Evaluation Successful.");
				
echo json_encode($data);
?>		  