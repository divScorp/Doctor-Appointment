<?php
	$days=$_GET['q'];
	include("connection.php");
 	print "<select name='days'  onChange='time1(this.value)'>";
 	$qry="select * from docdays group by days";
	$result=mysql_query($qry);
	if($result)
	 {
 		while($row=mysql_fetch_array($result))
 		{
			print "<option value='".$row['days']."'>";
	 		print $row['days'];
			print "</option>";
 		}
 	}
 	else
 	{
	    print "<option value=''>";
	 	
		print "</option>";
 	}

	print "</select>";

 ?>