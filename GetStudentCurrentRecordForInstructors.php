<?php
include("config_db.php");

$student_id = $_GET['student_id'];

$query = "SELECT DISTINCT F_ID FROM current_record WHERE S_ID = '".$student_id."' ";

$result = mysql_query($query);

while ($row = mysql_fetch_array($result))
{
	$dataset = mysql_query("SELECT F_ID, F_Fullname FROM faculty WHERE F_ID = '".$row['F_ID']."' ");
	
	while ($rows = mysql_fetch_array($dataset))
	{
		$data[] = array('Faculty_Id' => $rows['F_ID'],
						'Faculty_Name' => $rows['F_Fullname']);
	}
}

echo json_encode($data);
?>