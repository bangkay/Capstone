<?php
include("config_db.php");

$question = $_POST['Ques_Desc'];
$category = $_POST['Ques_Category'];
	
		if (mysql_query("INSERT INTO question VALUES('$question','category')"))
			echo "Successfully Added a Question";
		else
			echo "Failed to add question";

?>		  