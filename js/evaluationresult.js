$(document).ready(function () {
	$('#resultContainer').hide();
	getListOfInstructors();
	
	$('#drpTeacher').change(function () {
		var teacher_id = parseInt($('#drpTeacher').val());
		
		getTeacherEvaluationResult(teacher_id);
	});
});

function getListOfInstructors() {
	$.ajax({
		type: "GET",
		url: "GetListOfInstructors.php",
		dataType: "json",
		success: function (result) {
			$.each(result, function (index, value) {
				$('<option value=' + value.Teacher_Id + '>' + value.Teacher_Name + '</option>').appendTo('#drpTeacher');
			});
		},
		error: function (error) {
			console.log(error);
		}
	});
}

function getTeacherEvaluationResult(teacher_id) {
	$('#resultContainer').show();
	
	$.ajax({
		type: "GET",
		url: "GetTeachersEvaluationResult.php",
		data: { teacherId: teacher_id },
		dataType: "json",
		success: function (result) {
			$.each(result, function (index, value) {
				$('#txtTeacherName').text(value.Faculty_Name);
				$('#txtsubjectName').text(value.Subject_Name);
				$('#txtscore').text(value.Eval_Score);
				$('#txtremarks').text(value.Remarks);
				
			});
		},
		error: function (error) {
			console.log(error);
		}
	});
}