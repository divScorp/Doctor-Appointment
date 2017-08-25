
<?php
session_start();
if(!$_SESSION['id'])
{
	header("Location:patient.php");
}

include("connection.php");
$pid=$_SESSION['id'];
$did=$_POST['doctor'];
$appno=$_POST['appno'];
$days=$_POST['days'];
$date=strtotime("$days");
$time=$_POST['time'];
print date("Y-m-d",$date);


?>