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
					<option value="Select">Select...</option>
				</select>
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
							<a href="#">View Details</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>