<?php
include("config_db.php");

$instructor_id = $_GET['instructor_id'];

$query = "SELECT * 
		  FROM faculty
		  WHERE F_ID = '".$instructor_id."' ";

$result = mysql_query($query);

while ($rows = mysql_fetch_array($result))
{
	$data[] = array('Teacher_ID' => $rows['F_ID'],
					'Fname' => $rows['F_Fname'],
					'Mname' => $rows['F_Mname'],
					'Lname' => $rows['F_Lname']);
}

echo json_encode($data);
?>