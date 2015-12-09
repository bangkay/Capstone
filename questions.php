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
					<h1 class="page-header">Questions</h1>
					<ol class="breadcrumb">
						<li class="active">
							<i class="fa fa-dashboard"></i> Dashboard / Questions
						</li>
					</ol>
				</div>
			</div>
			
			<!-- Options -->
			<div class="row">
				<div class="col-lg-12">
					<ul class="option-list">
						<li><input type="button" value="Add Category" class="btn btn-primary" id="btnAddCategory" /></li>
						<li><input type="button" value="Add Question" class="btn btn-primary" id="btnAddQuestion" /></li>
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
									<th>ID</th>
									<th>Evaluation Factor</th>
									<th>Category</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody>
								<?php
									// Include config_db.php file for database connection configuration
									include("config_db.php");
									
									// Query for questions
									$query = mysql_query("SELECT * FROM question");
									
									// Retrieve and display questions from query
									while($row = mysql_fetch_array($query))
									{
								?>
									<tr>
										<td><?php echo $row['Ques_ID']; ?></td>
										<td><?php echo $row['Ques_Desc']; ?></td>
										<td><?php echo $row['Ques_Category']; ?></td>
										<td><a href="#">Edit</a>&nbsp;|&nbsp;<a href="#">Delete</a></td>
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
	<div id="popupCategory">
		<label>Category</label>
		<input type="text" class="form-control" id="txtCat" />
	</div>

	<div id="popupQuestion">
		<label>Category</label>
		<select id="selCategory" class="form-control">
			<option>Select...</option>
		</select>	
		</br>
		<label> User </label>
	<select id="selUser" class="form-control">
			<option>Select...</option>
			<option>Student</option>
			<option>Peer</option>
			<option>Dean</option>
		</select>	
		</br>
		<label>Question</label>
		<textarea class="form-control" id="txtQuestion" rows="3" cols="20"></textarea>
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