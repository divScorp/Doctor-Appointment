<?php
session_start();
if(!$_SESSION['id'])
{
	header("Location:index.html");
}
?>
<html>
<head>
<title>Admin|Doctor</title>
<link rel="stylesheet" href="Style/doctor_css.css"/>
<style type="text/css">
#apDiv14 {
	position: absolute;
	width: 148px;
	height: 32px;
	z-index: 6;
	left: 947px;
	top: 85px;
	font-family: courier, monospace;
	text-align: center;
	color: white;
	font-size: 20px;
}
#apDiv15 {
	position: absolute;
	width: 598px;
	height: 70px;
	z-index: 1;
	left: 258px;
	top: 283px;
	border: 2px solid #036;
}
#apDiv16 {
	position: absolute;
	width: 597px;
	height: 52px;
	z-index: 7;
	left: 260px;
	top: 229px;
}
#apDiv17 {
	position: absolute;
	width: 595px;
	height: 235px;
	z-index: 7;
	left: 258px;
	top: 355px;
	border:2px solid #036;
    background: #466368;
  background: #466368;
  background: radial-gradient(#f6f1d3, #648880);
}
</style>

<script src="doctor_script.js"></script>
 
</head>
<body vlink="#ffffff" onLoad="startTime()">
<div id="apDiv1">
  <div id="apDiv2">
    <div id="apDiv3">
      <div align="left">Hospital Management System</div>
    </div>
    <div id="apDiv4"></div>
  </div>
  <div id="apDiv5">
    <table width="1095" height="59" border="0">
      <tr>
        <td width="177"><div id="ap5" style="text-align:justify;"><a href="Admin.php">Home</a></div></td>
        <td width="168" onMouseOver="show_course()" onMouseOut="hide_course()"><div align="left"><a href="#">Add</a></div></td> 	
        <td width="173"onmouseover="show()" onMouseOut="hide()"><div align="left"><a href="#">Modify</a></div></td>
        <td width="186"onMouseOver="show1()" onMouseOut="hide1()"><div align="left"><a href="#">Upload</a></div></td>
        <td width="204"onMouseOver="show2()" onMouseOut="hide2()"><div align="left"><a href="#">View</a></div></td>
        <td width="161"onMouseOver="show3()" onMouseOut="hide3()"><div style="text-align:justify;"><a href="#">Profile</a></div></td>
      </tr>
    </table>
  </div>
  <div id="apDiv8" onMouseOver="show_course()" onMouseOut="hide_course()">
    <table width="159" height="70" border="0">
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="left"><a href="doctor.php">Doctor</a></div></td>
      </tr>
      <tr>
        <td><div align="left"><a href="patient.php">Patient</a></div></td>
      </tr>
    </table>
  </div>
  <div id="apDiv9" onMouseOver="show()" onMouseOut="hide()">
  <table width="170" height="70" border="0">
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="left"><a href="doctor_mod.php">Doctor</a></div></td>
      </tr>
      <tr>
        <td><div align="left"><a href="patient_mod.php">Patient</a></div></td>
      </tr>
    </table>
  </div>
  <div id="apDiv10" onMouseOver="show1()" onMouseOut="hide1()">
    <table width="165" height="34" border="0">
      <tr>
        <td><div align="left"><a href="report.php">Patient Report</a></div></td>
      </tr>
    </table>
  </div>
  <div id="apDiv11" onMouseOver="show2()" onMouseOut="hide2()">
    <table width="181" border="0">
      <tr>
        <td height="32"><div align="left"><a href="doctor_view.php">Doctor</a></div></td>
      </tr>
      <tr>
        <td height="32"><div align="left"><a href="patient_view.php">Patient</a></div></td>
      </tr>
      <tr>
        <td height="32"><div align="left"><a href="appointment.php">Appointment</a></div></td>
      </tr>
      <tr>
        <td height="32"><div align="left"><a href="history.php">Patient History</a></div></td>
      </tr>
    </table>
  </div>
  <div id="apDiv12">
    <div align="center"><a href="Logout.php">Sign out</a></div>
  </div>
  <div id="apDiv14">
 <script>
 	var meridiem = "PM";
	if (hours > 12) {
    	hours = hours - 12;
    	meridiem = "AM";
	}
	if (hours === 0) {
    	hours = 12;    
	}
	
    function startTime() {
    	var today=new Date();
    	var h=today.getHours();
    	var m=today.getMinutes();
    	var s=today.getSeconds();
   	 	m = checkTime(m);
    	s = checkTime(s);
    	document.getElementById('apDiv14').innerHTML = h+":"+m+":"+s+" "+meridiem;
    	var t = setTimeout(function(){startTime()},500);
	}

function checkTime(i) {
    if (i<10) {i = "0" + i}; 
    return i;
}
</script>

  </div>
  <div id="apDiv15">
  <?php
  	include("connection.php");
  	$did=$_POST['email'];
  	move_uploaded_file($_FILES['image']['tmp_name'],"../Frontend/imge/{$_FILES['image']['name']}");
	$imagef="{$_FILES['image']['name']}";
  	$qry="INSERT INTO doctor(doctorID,dname,password,phoneno,address,gender,specilist,dimage) VALUES('$_POST[email]','$_POST[dname]','$_POST[pass]','$_POST[phone]','$_POST[add]','$_POST[gender]','$_POST[spec]','$imagef')";
  	$result=mysql_query($qry);
  	if($result)
  	{
    	print "<strong><h2 align='center'>Please Select date and time</h2></strong>";
  	}
  	else
  	{
    	print mysql_error();
  	}
  ?>
  </div>
  <div id="apDiv17">
    <form name="form1" method="post" action="insert_doct.php">
      <table width="593" height="34" border="0">
        <tr>
          <td width="254"><div align="right"><strong>Select Consultaion days</strong></div></td>
          <td width="27">&nbsp;</td>
          <td width="298">
          	<input name="check[]" type="checkbox" id="checkbox" value="monday">
          	Monday <br>
            <input name="check[]" type="checkbox" id="checkbox2" value="tuesday">
            Tuesday<br>
            <input name="check[]" type="checkbox" id="checkbox3" value="wednesday">
            Wednesday
            <br>
            <input name="check[]" type="checkbox" id="checkbox4" value="thursday">
            Thursday<br>
            <input name="check[]" type="checkbox" id="checkbox5" value="friday">
            Friday<br>
            <input name="check[]" type="checkbox" id="checkbox6" value="saturday">
            Saturday<br>
            <input name="check[]" type="checkbox" id="checkbox7" value="sun">
            Sunday
          </td>
        </tr>
        <tr>
          <td><div align="right"><strong>Cosultation Time (hh:mm)</strong></div></td>
          <td>&nbsp;</td>
          <td>From
            <label for="to"></label>
            <input type="hidden" name="h1" value="<?php print $_POST['email']; ?>"> 
          <input name="to" type="text" id="to" size="7"> 
          </td>
        </tr>
        <tr>
          <td colspan="3"><div align="center">
            <input type="submit" name="Submit" id="button" value="Add doctor">
            <input type="reset" name="reset" id="reset" value="Cancel">
          </div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form>
  </div>
</div>
<div id="apDiv13" onMouseOver="show3()" onMouseOut="hide3()">
  <table width="156" height="71" border="0">
    <tr>
      <td width="131" height="31"><div align="left"><a href="profile.php">View Profile</a></div></td>
    </tr>
    <tr>
      <td width="131" height="34">
      <div align="left"><a href="Ch_pass.php">Change Password</a></div></td>
    </tr>
  </table>
</div>
</body>
</html>
