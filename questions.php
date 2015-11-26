<!-- HEADER -->
<?php include("header.php"); ?>
<!-- END -->

<!-- NAVIGATION -->
<?php include("navigation.php"); ?>
<!-- END -->

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
								include("config_db.php");
								
								$query = mysql_query("SELECT * FROM question");
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

<div id="popupCategory">
	<label>Category</label>
	<input type="text" class="form-control" id="txtCat" />
</div>

<div id="popupQuestion">
	<label>Category</label>
	<select id="selCategory" class="form-control">
		<option>Select...</option>
	</select>
	
	<br /> 
	<label>Question</label>
	<textarea class="form-control" id="txtQuestion" rows="3" cols="20"></textarea>
</div>

<!-- FOOTER -->
<?php include("footer.php"); ?>
<!-- END -->