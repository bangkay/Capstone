<?php
include("config_db.php");

$categories = mysql_query("SELECT * FROM categories");

while ($rows = mysql_fetch_array($categories))
{
	$data[] = array('Category_ID' => $rows['cat_id'],
					'Category_Name' => $rows['cat_desc']);
}

echo json_encode($data);
?>