<?php
include("config_db.php");

$teacherId = $_GET['teacherId'];

$query = "SELECT subjects.Sub_ID,
				 subjects.Sub_Name
		  FROM
			  faculty
				INNER JOIN faculty_subjects
					ON faculty.F_ID = faculty_subjects.F_ID
				INNER JOIN subjects
					ON faculty_subjects.Sub_ID = subjects.Sub_ID
		  WHERE
			  faculty.F_ID = '".$teacherId."' ";
			  
$dataset = mysql_query($query);
while ($row = mysql_fetch_array($dataset))
{
	$data[] = array('Subject_Id' => $row['Sub_ID'],
					'Subject_Name' => $row['Sub_Name']);
}

echo json_encode($data);
?>