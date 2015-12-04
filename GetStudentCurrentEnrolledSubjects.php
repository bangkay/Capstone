<?php
include("config_db.php");

$subjectId = $_GET['subject_id'];

$query = "SELECT *
		  FROM subjects
		  WHERE Sub_ID = '".$subjectId."'";

$result = mysql_query($query);

while ($rows = mysql_fetch_array($result))
{
	$data[] = array('Subject_ID' => $rows['Sub_ID'], 'Subject_Name' => $rows['Sub_Name']);
}

echo json_encode($data);
?>