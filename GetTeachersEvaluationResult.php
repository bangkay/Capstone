<?php
include("config_db.php");

$teacherId = $_GET['teacherId'];

$query = "SELECT *
		  FROM
				result_student
					INNER JOIN faculty
						ON result_student.F_ID = faculty.F_ID
					INNER JOIN subjects
						ON result_student.S_ID = subjects.Sub_ID
		  WHERE
				result_student.F_ID = '".$teacherId."' ";

$result = mysql_query($query);

while ($rows = mysql_fetch_array($result))
{
	$data[] = array('Faculty_Name' => $rows['F_Fullname'],
					'Eval_Score' => $rows['Res_Score'],
					'Remarks' => $rows['Res_Remarks'],
					'Subject_Name' => $rows['Sub_Name']);
}

echo json_encode($data);
?>