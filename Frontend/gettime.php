<?php
	$days=$_GET['q'];
	include("connection.php");
 	print "<select name='time'>";
 	$qry="select * from docdays group by time";
	$result=mysql_query($qry);
	if($result)
	 {
 		while($row=mysql_fetch_array($result))
 		{
			print "<option value='".$row['time']."'>";
	 		print $row['time'];
			print "</option>";
 		}
 	}
 	else
 	{
	    print "<option value=''>";
	 	print "Select time";
		print "</option>";
 	}

	print "</select>";

 ?>