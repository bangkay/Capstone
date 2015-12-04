<?php
include("config_db.php");

session_start();
?>

<html>
<head>
	<script src="../evaluation-system/js/jquery-1.11.3.js"></script>
	<script src="../evaluation-system/js/evaluation.js"></script>
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
	<br />
	<table width="800" height="561"  border="1" align="center" cellpadding="1" cellspacing="1">
		<thead>
			<tr>
				<th width="8%" class="rounded-company" align="center">ID</th>
				<th width="86%" class="rounded-q1" align="center">Evaluation Factor</th>
				<th width="6%" class="rounded-q4">5</th>
				<th width="6%" class="rounded-q4">4</th>
				<th width="6%" class="rounded-q4">3</th>
				<th width="6%" class="rounded-q4">2</th>
				<th width="6%" class="rounded-q4">1</th>
			</tr>
		</thead>
		<tbody id="items">
			<?php
				$sql_que="select * from question";
				$res_que=mysql_query($sql_que) or die(mysql_error());
				
				$i=1;
				$tab_ind=7;
				while($row_que=mysql_fetch_array($res_que))
				{
					echo '<tr>';
					echo '<td align="center">'.$i.'</td>';
					echo '<td>'.$row_que['Ques_Desc'].'</td>';
					
					echo '<td><input type="radio" name="updateField'.$i.'" value="5" /></td>';
					echo '<td><input type="radio" name="updateField'.$i.'" value="4" /></td>';
					echo '<td><input type="radio" name="updateField'.$i.'" value="3" /></td>';
					echo '<td><input type="radio" name="updateField'.$i.'" value="2" /></td>';
					echo '<td><input type="radio" name="updateField'.$i.'" value="1" /></td>';
						'</td>';
		
					echo '</tr>';
					$i++;
				}
			  ?>
		</tbody>
	</table>
	
	&nbsp <center><input type="button" id="btnSubmit" value="Submit" />
</div>

<?php include("footer.php")?>

