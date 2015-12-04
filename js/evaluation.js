$(document).ready(function () {
	var studId = 0;
	var teacherId = 0;
	
	studId = parseInt($('#txtStudId').val());
	getCurrentRecordForInstructors(studId);
	
	$('#drpTeacher').change(function () {
		$('#drpSubj').empty();
		
		teacherId = parseInt($('#drpTeacher').val());
		
		getCurrentRecordForSubjects(studId, teacherId);
	});
	
	$('#btnSubmit').click(function () {
		// Get Overall Evaluation Score
		var runningTotal = 0;
		var remarks = "";
		var question_count = 0;
		var lastEntryId = 0;
		var rows = $('#items').find('tr');
		
		var count = 1;
		var subItemCount = 0;
		var perCategoryRunningTotal = 0;
		var category = "";
		var perCategoryAverage = 0;
		var catRunningTotal = 0;
		
		var facultyId = 0;
		var subjectId = $('#drpSubj').val();
		var score = 0;
		
		var semId = 0;
		var schYear = "";
		
		$.each(rows, function (index, value) {
			var $tds = $(this).find('td');
			
			var r5 = $tds.eq(2);
			var r4 = $tds.eq(3);
			var r3 = $tds.eq(4);
			var r2 = $tds.eq(5);
			var r1 = $tds.eq(6);
			
			var rb5 = $(r5).find('input[type=radio]');
			var rb5Checked = $(rb5).is(':checked');
			if (rb5Checked) {
				runningTotal += parseInt(rb5.val());
			}
			else {
				runningTotal += 0;
			}
			
			var rb4 = $(r4).find('input[type=radio]');
			var rb4Checked = $(rb4).is(':checked');
			if (rb4Checked) {
				runningTotal += parseInt(rb4.val());
			}
			else {
				runningTotal += 0;
			}
			
			var rb3 = $(r3).find('input[type=radio]');
			var rb3Checked = $(rb3).is(':checked');
			if (rb3Checked) {
				runningTotal += parseInt(rb3.val());
			}
			else {
				runningTotal += 0;
			}
			
			var rb2 = $(r2).find('input[type=radio]');
			var rb2Checked = $(rb2).is(':checked');
			if (rb2Checked) {
				runningTotal += parseInt(rb2.val());
			}
			else {
				runningTotal += 0;
			}
			
			var rb1 = $(r1).find('input[type=radio]');
			var rb1Checked = $(rb1).is(':checked');
			if (rb1Checked) {
				runningTotal += parseInt(rb1.val());
			}
			else {
				runningTotal += 0;
			}
			
			question_count++;
		});
		
		if (runningTotal >= 40 && runningTotal <= 50)
			remarks = "Excellent";
		else if (runningTotal >= 30 && runningTotal <= 39)
			remarks = "Very Satisfactory";
		else if (runningTotal >= 20 && runningTotal <= 29)
			remarks = "Very Good";
		else if (runningTotal >= 10 && runningTotal <= 19)
			remarks = "Good";
		else if (runningTotal >= 1 && runningTotal <= 9)
			remarks = "Need Improvement"
		else
			remarks = "";
		
		facultyId = teacherId;
		subjectId = $('#drpSubj').val();
		score = runningTotal;
		semId = $('#lblSemId').text();
		schYear = $('#lblSchYear').text();
		
		$.ajax({
			type: "POST",
			url: "SaveEvaluation.php",
			data: { facultyId: facultyId, subjectId: subjectId, score: score, remarks: remarks, semId: semId, schYear: schYear },
			dataType: "json",
			success: function (result) {
				if (result[0].status == 1) {
					alert(result[0].message);
					lastEntryId = result[0].returnid;
					
					// Get score per category
					var catHeaders = $('#items').find('tr td p.category-header');
					
					$.each(catHeaders, function (index, value) {
						var catSubItems = $('#items').find('tr.category_questions' + count);
						subItemCount = 0;
						perCategoryRunningTotal = 0;
						
						$.each(catSubItems, function (index, value) {
							var $tds = $(this).find('td');
							
							var r5 = $tds.eq(2);
							var r4 = $tds.eq(3);
							var r3 = $tds.eq(4);
							var r2 = $tds.eq(5);
							var r1 = $tds.eq(6);
								
							var rb5 = $(r5).find('input[type=radio]');
							var rb5Checked = $(rb5).is(':checked');
							if (rb5Checked) {
								catRunningTotal += parseInt(rb5.val());
								perCategoryRunningTotal += parseInt(rb5.val());
							}
							else {
								catRunningTotal += 0;
								perCategoryRunningTotal += 0;
							}
							
							var rb4 = $(r4).find('input[type=radio]');
							var rb4Checked = $(rb4).is(':checked');
							if (rb4Checked) {
								catRunningTotal += parseInt(rb4.val());
								perCategoryRunningTotal += parseInt(rb4.val());
							}
							else {
								catRunningTotal += 0;
								perCategoryRunningTotal += 0;
							}
							
							var rb3 = $(r3).find('input[type=radio]');
							var rb3Checked = $(rb3).is(':checked');
							if (rb3Checked) {
								catRunningTotal += parseInt(rb3.val());
								perCategoryRunningTotal += parseInt(rb3.val());
							}
							else {
								catRunningTotal += 0;
								perCategoryRunningTotal += 0;
							}
							
							var rb2 = $(r2).find('input[type=radio]');
							var rb2Checked = $(rb2).is(':checked');
							if (rb2Checked) {
								catRunningTotal += parseInt(rb2.val());
								perCategoryRunningTotal += parseInt(rb2.val());
							}
							else {
								catRunningTotal += 0;
								perCategoryRunningTotal += 0;
							}
							
							var rb1 = $(r1).find('input[type=radio]');
							var rb1Checked = $(rb1).is(':checked');
							if (rb1Checked) {
								catRunningTotal += parseInt(rb1.val());
								perCategoryRunningTotal += parseInt(rb1.val());
							}
							else {
								catRunningTotal += 0;
								perCategoryRunningTotal += 0;
							}
								
							subItemCount++;
						});
							
						perCategoryAverage = perCategoryRunningTotal / subItemCount;
						
						category = $(value).text();
						
						savePerCategoryAverage(lastEntryId, category, perCategoryAverage, semId, schYear);
						
						count++;
					});
				}
			},
			error: function (error) {
				console.log(error);
			}
		});
	});	
});

function getCurrentRecordForInstructors(student_id) {
	$.ajax({
		type: "GET",
		url: "GetStudentCurrentRecordForInstructors.php",
		data: { student_id: student_id },
		dataType: "json",
		success: function (result) {
			$.each(result, function (index, value) {
				$('<option value=' + value.Faculty_Id + '>' + value.Faculty_Name + '</option>').appendTo('#drpTeacher');
			});
		},
		error: function (error) {
			console.log(error);
		}
	});
}

function getCurrentRecordForSubjects(student_id, teacher_id) {
	$.ajax({
		type: "GET",
		url: "GetStudentCurrentRecordForSubjects.php",
		data: { student_id: student_id, teacher_id: teacher_id },
		dataType: "json",
		success: function (result) {
			$.each(result, function (index, value) {
				$('<option value=' + value.Subject_Id + '>' + value.Subject_Name + '</option>').appendTo('#drpSubj');
			});
		},
		error: function (error) {
			console.log(error);
		}
	});
}

function savePerCategoryAverage(lastEntryId, category, perCategoryAverage, semesterId, schoolYear) {
	$.ajax({
		type: "POST",
		url: "SavePerCategoryAverage.php",
		data: { 
			stud_res_id: lastEntryId,
			stud_res_cat: category,
			stud_res_cat_ave: perCategoryAverage,
			semesterId: semesterId,
			schoolYear: schoolYear
		},
		dataType: "json",
		success: function (result) {
			if (result[0].status == 1) {
				window.location.href = "UserLogout.php";
			}
		},
		error: function (error) {
			console.log(error);
		}
	});
}