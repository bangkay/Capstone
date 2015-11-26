$(document).ready(function () {
	$('#popupCategory').hide();
	$('#popupQuestion').hide();
	
	$('#btnAddCategory').click(function () {
		$('#popupCategory').dialog({
			autoOpen: true,
			resizable: false,
			width: 400,
			height: 200,
			title: "Add Category",
			buttons: [
				{
					text: "Add",
					click: function() {
						var cat_name = $('#txtCat').val();
						
						if (cat_name == null || cat_name == "") {
							alert();
						}
						else {
							addCategory(cat_name);						
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
	
	$('#btnAddQuestion').click(function () {
		getCategories();
		
		$('#popupQuestion').dialog({
			autoOpen: true,
			resizable: false,
			width: 400,
			height: 320,
			title: "Add Question",
			buttons: [
				{
					text: "Add",
					click: function() {
						var ques_cat = $('#selCategory option:selected').text();
						var ques_question = $('#txtQuestion').val();
						
						if (ques_question == null || ques_question == "") {
							alert("Must provide question.");
						}
						else {
							addQuestion(ques_cat, ques_question);
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
});

function addCategory(category) {
	var status = 0;
	var message = "";
	
	$.ajax({
		type: "POST",
		url: "AddCategory.php",
		data: { category: category },
		dataType: "json",
		success: function (result) {
			if (result[0].status == 1) {
				alert(result[0].message);
				
				window.location.href = "http://localhost/evaluation-system/questions.php";
			}
		},
		error: function (error) {
			console.log(error);
		}
	});
}

function addQuestion(category, question) {
	var status = 0;
	var message = "";
	
	$.ajax({
		type: "POST",
		url: "AddQuestion.php",
		data: { category: category, question: question },
		dataType: "json",
		success: function (result) {
			if (result[0].status == 1) {
				alert(result[0].message);
				
				window.location.href = "http://localhost/evaluation-system/questions.php";
			}
		},
		error: function (error) {
			console.log(error);
		}
	});
}

function getCategories() {
	$('#selCategory').empty();
	$('#selCategory').append('<option value="Select">' + 'Select...' + '</option>');
	
	$.ajax({
		type: "GET",
		url: "GetCategories.php",
		dataType: "json",
		success: function (result) {
			$.each(result, function (index, value) {
				$('<option value=' + value.Category_Name + '>' + value.Category_Name + '</option>').appendTo('#selCategory');
			});
		},
		error: function (error) {
			console.log(error);
		}
	});
}