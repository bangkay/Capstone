		
		$('#btnQues').click(funtion(){
			$.POST($"MyForm").attr("action"),
				$("#MyForm :input").serializeArray(),
				function(info){$("#result").php(info)});
			
		})
			$("#MyForm").submit(function(){
				return false;
			})
			
		function clearInput(){
			$("#MyForm:input").each(function(){
				
			})
		}
		