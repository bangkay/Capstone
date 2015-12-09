<?php
// Include config_db.php file for database connection configuration
include("config_db.php");

// Get student id of logged in student
$studId = $_POST['txtStudId'];

// Query to get student current record
$result = mysql_query("SELECT * FROM current_record WHERE S_ID = '".$studId."'");

// Query result count
$count = mysql_num_rows($result);

// If count is greater than 1 loop query to get student details
if ($count > 0)
{
	while ($rows = mysql_fetch_array($result))
	{
		$semId = $rows['Sem_ID'];
		$sch_year = $rows['sch_year'];
	}
	
	// Start session
	session_start();
	
	// Set session variables for current session
	$_SESSION['studentId'] = $studId;
	$_SESSION['semId'] = $semId;
	$_SESSION['sch_year'] = $sch_year;
	$_SESSION['isLoggedIn'] = true;
	
	// Rediret to table.php
	header("location: table.php");
}
?>