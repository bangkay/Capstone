<?php
include("config_db.php");

$result = mysql_query("SELECT * FROM faculty");

while ($row = mysql_fetch_array($result))
{
	$data[] = array('Teacher_Name' => $row['F_Fullname'],
					'Teacher_Id' => $row['F_ID']);
}

echo json_encode($data);
?>