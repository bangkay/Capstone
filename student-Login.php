
<html lang="en">

<head>

 <link href="css/studentLogin.css" rel="stylesheet">
 <link href="js/studentLogin.js" rel="stylesheet">
</head>

<div class="container">
	<div class="login-container">
       <div id="output"></div>
		 <div class="avatar"></div>  
		   <div class="form-box">
                <form  method="POST" action="AuthenticateStudentLogin.php">
                    <input name="txtStudId" type="text" id="txtStudId" placeholder="STUDENT ID" require autofocus /> 
                    <button class="btn btn-info btn-block login" type="submit">Login</button>
                </form>
            </div>
        </div>    
</div>


</html>