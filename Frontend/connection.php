<?php
$con=mysql_connect("localhost","root","comrade");
if(!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("hospital",$con);
?>