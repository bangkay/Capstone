<?php
// Start session fur current student
session_start();

// Check if isLoggedIn session variable is true
// if true, load evaluation UI
if ($_SESSION['isLoggedIn'] === true) 
{
	// Include config_db.php file for database connection configuration
	include("config_db.php");
?>
<!DOCTYPE html>

<html lang="en">
<head>

<meta charset="UTF-8">


	<script src="../capstone/js/jquery-1.11.3.js"></script>
	<script src="../capstone/js/evaluation.js"></script>
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
		<input type="hidden" id="txtStudId" value="<?php echo $_SESSION['studentId']; // Hide student id ?>" />
	</div>
	
	<div class = "col-lg-12"> 
			<h1><center>Teacher Evaluation Form</center> </h1>
	</div>
	
	<div class="clearfix">
		<div class="pull-left">
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
		</div>
		<div class="pull-right">
			<div class="pull-left">
				<label>Sem Id: <p id="lblSemId"><?php echo $_SESSION['semId']; // Display semester id ?></p></label>
			</div>
			<div class="pull-right">
				<label>School Year: <p id="lblSchYear"><?php echo $_SESSION['sch_year']; // Display school year ?></p></label>
			</div>
		</div>
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
				
				// Query to retrieve question categories
				$category_query = mysql_query("SELECT DISTINCT Ques_Category FROM question");
				
				// Loop query result
				while ($categories = mysql_fetch_array($category_query))
				{
					// Display category header in table
					echo '<tr>';
					echo '<td align="center">'.$i.'</td>';
					echo '<td><p class="category-header">'.$categories['Ques_Category'].'</p> <input type="hidden" value="'.$i.'"></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '</tr>';
					
					// Query to retrieve questions per category
					$question_query = mysql_query("SELECT Ques_Desc FROM question WHERE Ques_Category = '".$categories['Ques_Category']."' ");
					$question_num = 1;
					
					// Loop query result
					while ($questions = mysql_fetch_array($question_query))
					{
						// Display question in table
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
<?php include("footer.php") // Include footer.php file ?>

</html>
<?php 
}
else
{
	// Redirect to index.php if isLoggedIn session variable if false
	header("location: index.php");
}	
?>