<?php
include("config_db.php");

$username = $_POST['txtUsername'];
$password = $_POST['pwdPassword'];

$username = stripslashes($username);
$password = stripslashes($password);

$result = mysql_query("SELECT * FROM users WHERE user_name = '".$username."' AND user_password = '".$password."'");

$count = mysql_num_rows($result);

if ($count == 1)
	header("location: AdminDashboard.php");
else
	header("location: index.php");
?>