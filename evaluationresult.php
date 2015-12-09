<!-- HEADER -->
<?php include("header.php"); ?>
<!-- END -->

<!-- NAVIGATION -->
<?php include("navigation.php"); ?>
<!-- END -->

<!-- PHP SCRIPT -->
<?php
// Include config_db.php file for database connection configuration
include("config_db.php");

// Get teacher id
$teacherId = $_GET['teacherid'];

// Query to retrieve faculty name
$query = mysql_query("SELECT F_Fullname FROM faculty WHERE F_ID = '".$teacherId."' ");

// Loop query result
while ($row = mysql_fetch_array($query))
{
	// Assign
	$fullname = $row['F_Fullname'];
}
?>
<!-- END -->

<!-- CONTENT -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					<?php echo $fullname; ?>
					<input type="hidden" id="teacherid" value="<?php echo $teacherId; ?>" />
				</h1>
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-dashboard"></i> Dashboard / Student Evaluation Results / <?php echo $fullname; ?>
					</li>
				</ol>
			</div>
		</div>
		
		<!-- Options -->
		<div class="row">
			<div class="col-lg-3">
				<select id="drpSubjects" class="form-control">
					<option value="Select">Select Subject</option>
				</select>
			</div>
			<div class="col-lg-3">
				<select id="drpSem" class="form-control">
					<option value="Select">Select Semester</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
			</div>
			<div class="col-lg-3">
				<select id="drpSY" class="form-control">
					<option value="Select">Select School year</option>
					<option value="2015-2016">2015-2016</option>
					<option value="2015-2016">2016-2017</option>
					<option value="2015-2016">2017-2018</option>
				</select>
			</div>
			<div class="col-lg-3">
				<input type="button" class="form-control" value="Show" id="btnShowResult" />
			</div>
		</div>
		
		<!-- Evaluation Result -->
		<div class="row">
			<div class="col-lg-12">
				<div class="result-container clearfix" id="resultContainer">
					<!--
					<div class="form-group">
						<p id="txtTeacherName"></p>
					</div>
					<div class="form-group">
						<p id="txtsubjectName"></p>
					</div>
					-->
					<div class="form-group">
						<p>Student Evaluation Result</p>
					</div>
					<div class="form-group">
						<div class="rating-container clearfix">
							<p id="txtscore" class="pull-left"></p><p id="txtremarks" class="pull-left"></p>
						</div>
					</div>
					<div class="form-group">
						<div class="details-container clearfix">
							<a href="#" id="lnkViewDetils">View Details</a>
						</div>
						<div class="form-group">
							<div id="dlgEvalResult">
								<table id="avgTable">
									<thead>
										<tr></tr>
									</thead>
									<tbody>
										<tr></tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
<!-- END -->

<!-- POP UP DIALOG -->
<div id="popupDepartment">
	<label>Department</label>
	<input type="text" class="form-control" id="txtDept" />
</div>
<!-- END -->

<!-- FOOTER -->
<?php include("footer.php"); ?>
<!-- END -->