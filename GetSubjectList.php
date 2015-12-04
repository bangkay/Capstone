<?php
include("config_db.php");

$result = mysql_query("SELECT * FROM subjects");

while ($row = mysql_fetch_array($result))
{
	$data[] = array('SubjectId' => $row['Sub_ID'],
				    'SubjectName' => $row['Sub_Name'],
				    'DeptId' => $row['Dept_ID']);
}

echo json_encode($data);
?>