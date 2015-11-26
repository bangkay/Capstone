<?php
include("config_db.php");

$studId = $_POST['txtStudId'];

$result = mysql_query("SELECT * FROM current_record WHERE S_ID = '".$studId."'");

$count = mysql_num_rows($result);

if ($count > 0)
{
	session_start();
	
	$_SESSION['studentId'] = $studId;
	header("location: table.php");
}
?>