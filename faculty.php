<?php
// Session start
session_start();

// Check if session variable isAdminLoggedIn is equal to true
if ($_SESSION['isAdminLoggedIn'] === true)
{
	// Include header.php and navigation.php files
	include("header.php");
	include("navigation.php");
?>
	<!-- CONTENT -->
	<div id="page-wrapper">
		<div class="container-fluid">
		
			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Faculty</h1>
					<ol class="breadcrumb">
						<li class="active">
							<i class="fa fa-dashboard"></i> Dashboard / Faculty
						</li>
					</ol>
				</div>
			</div>
			
			<!-- Options -->
			<div class="row">
				<div class="col-lg-12">
					<ul class="option-list">
						<li><input type="button" value="Add Faculty" class="btn btn-primary" id="btnAddFaculty" /></li>
						<li><input type="button" value="Add Faculty Subjects" class="btn btn-primary" id="btnAddFacultySubjects" /></li>
					</ul>
				</div>
			</div>
			
			<!-- Questions -->
			<div class="row">
				<div class="col-lg-12">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped">
							<thead>
								<tr>
									<th>Fullname</th>
									<th>Department</th>
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
										<td><?php echo $row['Dept_Name']; ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END -->

	<!-- POP UP DIALOGS -->
	<div id="popupFaculty">
		<label>Department</label>
		<select id="selDept" class="form-control">
			<option>Select...</option>
		</select>
		
		<br />
		<label>Teacher Name</label>
		<input type="text" class="form-control" id="txtTeacherName" />
	</div>
	
	<div id="popupAddFacultySubj">
		<label>School Year</label>
		<select id="drpSY" class="form-control">
			<option>Select School Year</option>
			<option value="2015-2016">2015-2016</option>
			<option value="2016-2017">2016-2017</option>
			<option value="2017-2018">2017-2018</option>
			<option value="2018-2019">2018-2019</option>
			<option value="2019-2020">2019-2020</option>
		</select>
		
		<br />
	
		<label>Semester Id</label>
		<select id="drpSemester" class="form-control">
			<option>Select Semester</option>
			<option value="1">1</option>
			<option value="2">2</option>
		</select>
		
		<br />
		
		<label>Instructor</label>
		<select id="drpInstructor" class="form-control">
			<option>Select Instructor</option>
		</select>
		
		<br />
		
		<label>Subject</label>
		<select id="drpSubject" class="form-control">
			<option>Select Subject</option>
		</select>
	</div>
	<!-- END -->
<?php
	// Iclude footer.php file
	include("footer.php");
}
else
{
	// Redirect to index.php id session variable isAdminLoggedIn is false
	header("location: index.php");
}?>