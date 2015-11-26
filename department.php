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
								include("config_db.php");
								
								$query = mysql_query("SELECT * FROM department");
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

<div id="popupDepartment">
	<label>Department</label>
	<input type="text" class="form-control" id="txtDept" />
</div>

<!-- FOOTER -->
<?php include("footer.php"); ?>
<!-- END -->