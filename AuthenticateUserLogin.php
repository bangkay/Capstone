<?php
// Include config_db.php file for database connection configuration
include("config_db.php");

// Gets the username and password entered by the user
$username = $_POST['txtUsername'];
$password = $_POST['pwdPassword'];

// Removes the slashes in the input
$username = stripslashes($username);
$password = stripslashes($password);

// Query database base from the entered username and password
$result = mysql_query("SELECT * FROM users WHERE user_name = '".$username."' AND user_password = '".$password."'");

// Counts the rows affected by the query
$count = mysql_num_rows($result);

// Check if count returns more than one result
if ($count == 1)
{
	// Start user session
	session_start();
	
	// Assign data to session
	$_SESSION['isAdminLoggedIn'] = true;
	
	// Redirect to AdminDashboard.php
	header("location: AdminDashboard.php");
}
else
	// Redirect to index if no match is found
	header("location: index.php");
?>