<?php
include("config_db.php");

$studId = $_POST['txtStudId'];

$result = mysql_query("SELECT * FROM current_record WHERE S_ID = '".$studId."'");

$count = mysql_num_rows($result);

if ($count > 0)
{
	while ($rows = mysql_fetch_array($result))
	{
		$semId = $rows['Sem_ID'];
		$sch_year = $rows['sch_year'];
	}
	
	session_start();
	
	$_SESSION['studentId'] = $studId;
	$_SESSION['semId'] = $semId;
	$_SESSION['sch_year'] = $sch_year;
	$_SESSION['isLoggedIn'] = true;
	
	header("location: table.php");
}
?>