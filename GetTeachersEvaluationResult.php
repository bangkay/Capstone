<?php
include("config_db.php");

$teacherId = $_GET['teacherId'];
$subjectId = $_GET['subjectId'];

$query = "SELECT AVG(Res_Score),
				 Res_Remarks
		  FROM result_student
		  WHERE 
			F_ID = '".$teacherId."' AND S_ID = '".$subjectId."' ";

$result = mysql_query($query);

while ($rows = mysql_fetch_array($result))
{
	$data[] = array('Eval_Score' => $rows['AVG(Res_Score)'],
					'Remarks' => $rows['Res_Remarks']);
}

echo json_encode($data);
?>