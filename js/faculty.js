$(document).ready(function () {
	$('#popupFaculty').hide();
	$('#popupAddFacultySubj').hide();
	
	$('#btnAddFaculty').click(function () {
		getDepartments();
		
		$('#popupFaculty').dialog({
			autoOpen: true,
			resizable: false,
			width: 400,
			height: 270,
			title: "Add Faculty",
			buttons: [
				{
					text: "Add",
					click: function() {
						var dept_name = $('#selDept option:selected').text();
						var teacher_name = $('#txtTeacherName').val();
						
						if (teacher_name == null || teacher_name == "") {
							alert();
						}
						else {
							addFaculty(teacher_name, dept_name);						
						}
					}
				},
				{
					text: "Cancel",
					click: function() {
						$(this).dialog( "close" );
					}
				}
			]
		});
	});
	
	$('#btnAddFacultySubjects').click(function () {
		getInstructorsList();
		getSubjectsList();
		
		$('#popupAddFacultySubj').dialog({
			autoOpen: true,
			resizable: false,
			width: 400,
			height: 440,
			title: "Add Faculty Subjects",
			buttons: [
				{
					text: "Add",
					click: function() {
						var instructorId = $('#drpInstructor').val();
						var subjectId = $('#drpSubject').val();
						var semesterid = $('#drpSemester').val();
						var schyear = $('#drpSY').val();
						
						addFacultySubject(instructorId, subjectId, semesterid, schyear);
					}
				},
				{
					text: "Cancel",
					click: function() {
						$(this).dialog( "close" );
					}
				}
			]
		});
	});
});

function getDepartments() {
	$('#selDept option').remove();
	
	$.ajax({
		type: "GET",
		url: "GetDepartments.php",
		dataType: "json",
		success: function (result) {
			$('<option value="Select">Select...</option>').appendTo('#selDept');
			$.each(result, function (index, value) {
				$('<option value='+ value.Department_Name +'>' + value.Department_Name + '</option>').appendTo('#selDept');
			});
		},
		error: function (error) {
			console.log(error);
		}
	});
}

function addFaculty(teacher_name, dept_name) {
	var status = 0;
	var message = "";
	
	$.ajax({
		type: "POST",
		url: "AddFaculty.php",
		data: { teacher_name: teacher_name, dept_name: dept_name },
		dataType: "json",
		success: function (result) {
			if (result[0].status == 1) {
				alert(result[0].message);
				
				window.location.href = "http://localhost/capstone/faculty.php";
			}
		},
		error: function (error) {
			console.log(error);
		}
	});
}

function getInstructorsList() {
	$('#drpInstructor option').remove();
	
	$.ajax({
		type: "GET",
		url: "GetListOfInstructors.php",
		dataType: "json",
		success: function (result) {
			$('<option value="Select">Select Instructor</option>').appendTo('#drpInstructor');
			
			$.each(result, function (index, value) {
				$('<option value=' + value.Teacher_Id + '>' + value.Teacher_Name + '</option>').appendTo('#drpInstructor');
			});
		},
		error: function (error) {
			console.log(error);
		}
	});
}

function getSubjectsList() {
	$('#drpSubject option').remove();
	
	$.ajax({
		type: "GET",
		url: "GetSubjectList.php",
		dataType: "json",
		success: function (result) {
			$('<option value="Select">Select Subject</option>').appendTo('#drpSubject');
			
			$.each(result, function (index, value) {
				$('<option value=' + value.SubjectId + '>' + value.SubjectName + '</option>').appendTo('#drpSubject');
			});
		},
		error: function (error) {
			console.log(error);
		}
	});
}

function addFacultySubject(instructorId, subjectId, semesterid, schyear) {
	$.ajax({
		type: "POST",
		url: "AddFacultySubjects.php",
		data: { instructorId: instructorId, subjectId: subjectId, semesterid: semesterid, schyear: schyear },
		dataType: "json",
		success: function (result) {
			if (result[0].status == 1) {
				alert(result[0].message);
				
				window.location.href = "http://localhost/capstone/faculty.php";
			}
		},
		error: function (error) {
			console.log(error);
		}
	});
}