$(document).ready(function () {
	$('#resultContainer').hide();
	
	var teacherid = $('#teacherid').val();
	
	getInstructorSubjects(teacherid);
	
	$('#drpSubjects').change(function () {
		var subject_id = parseInt($('#drpSubjects').val());
		
		getSubjectEvaluationResult(teacherid, subject_id);
	});
});

function getInstructorSubjects(teacherId) {
	$.ajax({
		type: "GET",
		url: "GetInstructorSubjects.php",
		data: { teacherId: teacherId },
		dataType: "json",
		success: function (result) {
			$.each(result, function (index, value) {
				$('<option value="' + value.Subject_Id + '">' + value.Subject_Name + '</option>').appendTo('#drpSubjects');
			});
		},
		error: function (error) {
			console.log(error);
		}
	});
}

function getSubjectEvaluationResult(teacher_id, subject_id) {
	$('#resultContainer').show();
	
	$.ajax({
		type: "GET",
		url: "GetTeachersEvaluationResult.php",
		data: { teacherId: teacher_id, subjectId: subject_id },
		dataType: "json",
		success: function (result) {
			$.each(result, function (index, value) {
				$('#txtscore').text(value.Eval_Score);
				$('#txtremarks').text(value.Remarks);
				
			});
		},
		error: function (error) {
			console.log(error);
		}
	});
}