$(document).ready(function () {
	$('#popupDepartment').hide();
	
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
				
				window.location.href = "http://localhost/evaluation-system/department.php";
			}
		},
		error: function (error) {
			console.log(error);
		}
	});
}