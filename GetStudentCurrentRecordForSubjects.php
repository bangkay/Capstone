<?php
include("config_db.php");

$student_id = $_GET['student_id'];
$teacher_id = $_GET['teacher_id'];

$query = "SELECT DISTINCT Sub_ID FROM current_record WHERE S_ID = '".$student_id."' AND F_ID = '".$teacher_id."' ";

$result = mysql_query($query);

while ($row = mysql_fetch_array($result))
{
	$dataset = mysql_query("SELECT Sub_ID, Sub_Name FROM subjects WHERE Sub_ID = '".$row['Sub_ID']."'");
	
	while ($rows = mysql_fetch_array($dataset))
	{
		$data[] = array('Subject_Id' => $rows['Sub_ID'],
						'Subject_Name' => $rows['Sub_Name']);
	}
}

echo json_encode($data);
?>