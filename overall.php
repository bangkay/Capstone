<html>

<!-- HEADER -->
<?php include("header.php"); ?>
<!-- END -->

<!-- NAVIGATION -->
<?php include("navigation.php"); ?>
<!-- END -->

<?php


?>
	<div>
		<input type="hidden" id="teacherId" value="<?php echo $_SESSION['teacherId']; // Hide student id ?>" />
	</div>
	
	
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







</html>