<!DOCTYPE html>

<?php
include("config_db.php");

session_start();
?>

<html lang="en">
<head>

<meta charset="UTF-8">


	<script src="../evaluation-system/js/jquery-1.11.3.js"></script>
	<script src="../evaluation-system/js/evaluation.js"></script>
	<link rel="stylesheet" href="css/customcss.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>

<div style="width: 800px; margin: 0 auto;">
	<div>
		<input type="hidden" id="txtStudId" value="<?php echo $_SESSION['studentId']; ?>" />
	</div>
	<div>
		<label>Teacher</label>
		<select id="drpTeacher">
			<option>Select..</option>
		</select>
	</div>
	<div>
		<label>Subject</label>
		<select id="drpSubj">
			<option>Select..</option>
		</select>
	</div>
	
	
<div class="bs-example">
    <table class="table">
        <thead>
            <tr>
                <th colspan="2" class="header">Evaluation Factor</th>
                <th>5</th>
                <th>4</th>
				<th>3</th>
				<th>2</th>
				<th>1</th>
            </tr>
        </thead>
        <tbody id="items">
            <?php
				$i=1;
				$updateField = 1;
				
				$category_query = mysql_query("SELECT DISTINCT Ques_Category FROM question");
				while ($categories = mysql_fetch_array($category_query))
				{
					echo '<tr>';
					echo '<td align="center">'.$i.'</td>';
					echo '<td><p class="category-header">'.$categories['Ques_Category'].'</p> <input type="hidden" value="'.$i.'"></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '</tr>';
					
					$question_query = mysql_query("SELECT Ques_Desc FROM question WHERE Ques_Category = '".$categories['Ques_Category']."' ");
					$question_num = 1;
					while ($questions = mysql_fetch_array($question_query))
					{
						echo '<tr class="category_questions'.$i.'">';
						echo '<td>'.$question_num.'</td>';
						echo '<td>'.$questions['Ques_Desc'].'</td>';
						echo '<td><input type="radio" name="updateField'.$updateField.'" value="5" /></td>';
						echo '<td><input type="radio" name="updateField'.$updateField.'" value="4" /></td>';
						echo '<td><input type="radio" name="updateField'.$updateField.'" value="3" /></td>';
						echo '<td><input type="radio" name="updateField'.$updateField.'" value="2" /></td>';
						echo '<td><input type="radio" name="updateField'.$updateField.'" value="1" /></td>';
						echo '</tr>';
						
						$question_num++;
						$updateField++;
					}
					$i++;
				}
			  ?>
        </tbody>
    </table>
		
	&nbsp <center><input type="button" id="btnSubmit" value="Submit" />

</div>
</body>
<?php include("footer.php")?>

</html>                                		