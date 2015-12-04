<?php
include("config_db.php");

$result = mysql_query("SELECT * FROM department");

while ($row = mysql_fetch_array($result))
{
	$data[] = array('Department_Id' => $row['Dept_ID'],
				    'Department_Name' => $row['Dept_Name']);
}

echo json_encode($data);
?>