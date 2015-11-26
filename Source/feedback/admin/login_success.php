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
  
include('session_chk.php');?>
<html>
<title>Admin Home</title>
<link rel="stylesheet" type="text/css" href="../includes/style.css" />
<body>
<table width="64%" align="center" border="0" cellpadding="0" cellspacing="1" >
<?php include('admin_panel_heading.php'); ?>
<tr>
<td width="22%">
<? include('left_side.php');?></td>

<td width="78%" valign="top">
<p><br/>
Feedback system:</p>
<p>Structure of the institute  </p>
<p>Batch -> Branch -> Faculty -> Subject  </p>
<p>So You can Add/Edit/Delete to Batch, Branch, Semester, Division, Faculty & Subject</p>
<p>Example:</p>
<p><ul>
		<li>Batch: August '08  </li>
<li>Branch: Network and Telecommunication  </li>
<li>Faculty: <ul><li>Rajesh Mishra </li><li>Mohan Das</li></ul>  </li>
<li>Subject: <ul><li>Routing Protocol taught by Rajesh Mishra in Semester (I) & Division (Class B)</li>
                <li>Computer Networks taught by Mohan Das in Semester (I) & Division (Class B)</li>
			</ul></li>
</ul>
<p>Set parameter: Batch -> Brach -> Semester -> Division</p>
<p>To get the result(graph/excel) click on &quot;<strong>Feedback</strong>&quot; link.  </p>
<p>Feedback Ques: You can change  by editing it.  </p>
<p>Students will rate the Subject's faculty within the range of 0 - 9</p>
<p>Graph will be generated according to the number of student and their rating. on "<b>Feedback</b>" </p>
<p>You can take backup of your dabatabase.</p></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td valign="top">&nbsp;</td>
</tr>
</table>

</body>
</html>