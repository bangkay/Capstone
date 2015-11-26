<?php

//////////////////////////////////////////////////////////////////*****/////////////////////////////////////////////////////////////////////////////////////
  //                                                             Feedback Pro v1																			 //
  //														Faculty Evaluation System																		 //
  //														Developed By Shrenik Patel																		 //			
  //															 July 27, 2009																				 //
  //																																						 //		
  //  Tis program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by 				 //
  //  the Free Software  Foundation; either version 2 of the License, or (at your option) any later version.												 //
  //																																						 //
  //  This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or      //
  //  FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.																 //
  //																																						 //
  //////////////////////////////////////////////////////////////////*****//////////////////////////////////////////////////////////////////////////////////////


$dbhost="localhost";  #SQL Database Hostname (Most is: localhost)
$dbusername="root";   #SQL Username
$dbpassword="";   #SQL Password
$dbname="feedback"; #SQL Database Name

#for support please email me: m@maaking.com


// Don't touch here anything.
// Connect to Mysql
$connect = mysql_connect($dbhost, $dbusername, $dbpassword);
//Select the correct database.
$db = mysql_select_db($dbname,$connect) or die ("Could not select database");
?> 


