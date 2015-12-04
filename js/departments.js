$(document).ready(function () {
	$('#popupDepartment').hide();
	$('#popupDeptSubjects').hide();
	
	$('#btnAddDepartment').click(function () {
		$('#popupDepartment').dialog({
			autoOpen: true,
			resizable: false,
			width: 400,
			height: 200,
			title: "Add Department",
			buttons: [
				{
					text: "Add",
					click: function() {
						var dept_name = $('#txtDept').val();
						
						if (dept_name == null || dept_name == "") {
							alert();
						}
						else {
							addDepartment(dept_name);						
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
	
	$('#btnAddDeptSubjects').click(function () {
		getDepartmentList();
		
		$('#popupDeptSubjects').dialog({
			autoOpen: true,
			resizable: false,
			width: 400,
			height: 270,
			title: "Add Department Subjects",
			buttons: [
				{
					text: "Add",
					click: function() {
						var deptId = $('#drpDept').val();
						var subj = $('#txtSubj').val();
						
						addDepartmentSubjects(deptId, subj);
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

function addDepartment(dept_name) {
	var status = 0;
	var message = "";
	
	$.ajax({
		type: "POST",
		url: "AddDepartment.php",
		data: { department: dept_name },
		dataType: "json",
		success: function (result) {
			if (result[0].status == 1) {
				alert(result[0].message);
				
				window.location.href = "http://localhost/capstone/department.php";
			}
		},
		error: function (error) {
			console.log(error);
		}
	});
}

function getDepartmentList() {
	$('select#drpDept option').remove();
	
	$.ajax({
		type: "GET",
		url: "GetDepartments.php",
		dataType: "json",
		success: function (result) {
			$('<option value="Select">Select Department</option>').appendTo('select#drpDept');
			
			$.each(result, function (index, value) {
				$('<option value='+ value.Department_Id +'>' + value.Department_Name + '</option>').appendTo('select#drpDept');
			});
		},
		error: function (error) {
			console.log(error);
		}
	});
}

function addDepartmentSubjects(dept_id, subj_name) {
	$.ajax({
		type: "POST",
		url: "SaveDepartmentSubjects.php",
		data: { deptId: dept_id, subjName: subj_name },
		dataType: "json",
		success: function (result) {
			if (result[0].status == 1) {
				alert(result[0].message);
				
				window.location.href = "http://localhost/capstone/department.php";
			}
		},
		error: function (error) {
			console.log(error);
		}
	});
}