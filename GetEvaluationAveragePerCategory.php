<?php
include("config_db.php");

$facultyid = $_GET['facultyid'];
$subjectid = $_GET['subjectid'];
$semesterid = $_GET['semesterid'];
$schyear = $_GET['schyear'];

$query = "SELECT result_student_per_category.stud_res_cat,
				 AVG(result_student_per_category.stud_res_cat_ave) AS CategoryAve
		  FROM
				result_student
					INNER JOIN result_student_per_category
						ON result_student.Res_ID = result_student_per_category.stud_res_id
		  WHERE
				result_student.F_ID = '".$facultyid."' AND
				result_student.S_ID = '".$subjectid."' AND
				result_student.Sem_ID = '".$semesterid."' AND
				result_student.sch_year = '".$schyear."'
          GROUP BY
          		result_student_per_category.stud_res_cat";

$result = mysql_query($query);

while ($row = mysql_fetch_array($result))
{
	$data[] = array('Category' => $row['stud_res_cat'],
					'Average' => $row['CategoryAve']);
}

echo json_encode($data);
?>