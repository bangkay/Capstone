<?php
session_start();

if ($_SESSION['isAdminLoggedIn'] === true)
{
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
									include("config_db.php");
									
									$query = mysql_query("SELECT * FROM faculty");
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

	<div id="popupFaculty">
		<label>Department</label>
		<select id="selDept" class="form-control">
			<option>Select...</option>
		</select>
		
		<br />
		<label>Teacher Name</label>
		<input type="text" class="form-control" id="txtTeacherName" />
	</div>
<?php
	include("footer.php");
}
else
{
	header("location: index.php");
}?>