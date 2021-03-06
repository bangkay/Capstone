<!-- HEADER -->
<?php include("header.php"); ?>
<!-- END -->

<!-- NAVIGATION -->
<?php include("navigation.php"); ?>
<!-- END -->

<!-- CONTENT -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Teacher Evaluation Results</h1>
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-dashboard"></i> Dashboard / Teacher's Evaluation Results
					</li>
				</ol>
			</div>
		</div>
		
		<!-- Options -->
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>Fullname</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							<?php
								// Include config_db.php file for database connection configuration
								include("config_db.php");
								
								// Query for retrieving faculty
								$query = mysql_query("SELECT * FROM faculty");
								
								// Retrieve and display faculty from query
								while($row = mysql_fetch_array($query))
								{
							?>
								<tr>
									<td><?php echo $row['F_Fullname']; ?></td>
									<td><a href="evaluationresult.php?teacherid=<?php echo $row['F_ID'] ?>">View Result</a></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
		<!-- Evaluation Result -->
		<div class="row">
			<div class="col-lg-12">
				<div class="result-container clearfix" id="resultContainer">
					<div class="form-group">
						<p id="txtTeacherName"></p>
					</div>
					<div class="form-group">
						<p>Student Evaluation Result</p>
					</div>
					<div class="form-group">
						<p id="txtsubjectName"></p>
					</div>
					<div class="form-group">
						<div class="rating-container clearfix">
							<p id="txtscore" class="pull-left"></p><p id="txtremarks" class="pull-left"></p>
						</div>
					</div>
					<div class="form-group">
						<div class="details-container clearfix">
							<a href="#">View Details</a>
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