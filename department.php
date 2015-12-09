<?php
// Start session
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
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Departments</h1>
					<ol class="breadcrumb">
						<li class="active">
							<i class="fa fa-dashboard"></i> Dashboard / Departments
						</li>
					</ol>
				</div>
			</div>
			
			<!-- Options -->
			<div class="row">
				<div class="col-lg-12">
					<ul class="option-list">
						<li><input type="button" value="Add Department" class="btn btn-primary" id="btnAddDepartment" /></li>
						<li><input type="button" value="Add Subjects" class="btn btn-primary" id="btnAddDeptSubjects" /></li>
					</ul>
				</div>
			</div>
			
			<!-- Departments -->
			<div class="row">
				<div class="col-lg-12">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Department Name</th>
								</tr>
							</thead>
							<tbody>
								<?php
									// Include config_db.php file for database connection configuration
									include("config_db.php");
									
									// Query for retrieving departments
									$query = mysql_query("SELECT * FROM department");
									
									// Retrieve and display department from query
									while($row = mysql_fetch_array($query))
									{
								?>
									<tr>
										<td><?php echo $row['Dept_ID']; ?></td>
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
	<div id="popupDepartment">
		<label>Department</label>
		<input type="text" class="form-control" id="txtDept" />
	</div>
	
	<div id="popupDeptSubjects">
		<label>Department</label>
		<select id="drpDept" class="form-control">
			<option>Select Department</option>
		</select>
		
		<br />
		
		<label>Subject</label>
		<input type="text" id="txtSubj" class="form-control" />
	</div>
	<!-- END -->
<?php
	// Include footer.php file
	include("footer.php");
}
else
{
	// Redirect to index.php id session variable isAdminLoggedIn is false
	header("location: index.php");
}?>