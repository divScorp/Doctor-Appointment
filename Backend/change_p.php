<?php
session_start();
if(!$_SESSION['id'])
{
	header("Location:index.html");
}
?>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" href="Admin_style.css"/>
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
	width: 424px;
	height: 211px;
	z-index: 6;
	left: 333px;
	top: 302px;
	font-weight:bold;	
}
#form1 tr input[type="password"] {
width: 215px;
padding: 5px 8px;
font-size: 18px;
color: #666;
border: none;
background-image: -webkit-gradient(linear, »
0% 0%, 0% 12%, from(#999), to(#fff));
background-image: -moz-linear-gradient(0% 12% »
90deg, #fff, #999);
background-color: #fff;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
}
#form1 input[type="submit"] {
	background: #006699;
	background:-moz-linear-gradient(top,#006699 0%,#4AA400 100%);
	background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#006699),color-stop(100%,#4AA400));
	background:-webkit-linear-gradient(top,#5CCD00 0%,#4AA400 100%);
	background:-o-linear-gradient(top,#006699 0%,#4AA400 100%);
	background:-ms-linear-gradient(top,#006699 0%,#4AA400 100%);
	background:linear-gradient(top,#006699 0%,#4AA400 100%);
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:16px;
	font-weight:bold;
	border-radius:7px;
	-moz-border-radius:7px;
	-webkit-border-radius:7px;
	border:1px solid #459A00;
}
#form1 input[type="password"]:focus{
-webkit-box-shadow: 0 0 12px rgba(51, 204, 255, 1.0);
-moz-box-shadow: 0 0 12px rgba(51, 204, 255, 1.0);
box-shadow: 0 0 12px rgba(51, 204, 255, 1.0);
}
#form1 input[type="password"]:focus {
-moz-animation-name: pulse;
-moz-animation-duration: 1.5s;
-moz-animation-iteration-count: infinite;
-moz-animation-timing-function: ease-in-out;
}

#apDiv16 {
	position: absolute;
	width: 378px;
	height: 115px;
	z-index: 6;
	left: 527px;
	top: 327px;
}
</style>
<script src="Admin_script.js"></script>
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
        <td width="161"onMouseOver="show3()" onMouseOut="hide3()"><div style="text-align:justify;"><a href="profile.php">Profile</a></div></td>
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
    <div align="center"><a href="Logout.php"><font color="#00FF99">Sign out</font></a></div>
  </div>
  <div id="apDiv14">
    <script>
 	var meridiem = "AM";
	if (hours > 12) {
    	hours = hours - 12;
    	meridiem = "PM";
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
  <div id="apDiv16">
  <?php
  $con=mysql_connect("localhost","root","comrade");
  mysql_select_db("hospital",$con);
  $a=$_POST['o_pass'];
  $b=$_POST['new_pass'];
  $c=$_POST['conf_pass'];
  $uid=$_SESSION['id'];
  $qry=mysql_query("select * from admin where Username='$uid'");
  $flag=0;
while($row=mysql_fetch_array($qry))
{
	if($uid==$row['Username'] && $a==$row['Password'])
	{
		$flag=1;
		break;
	}
}
if($flag==1)
{
	$qry1=mysql_query("update admin set Password='$b' where Username='$uid'");
	print "<b>Password changed successfully</b>";
}
else
{
	print "<b>Old password is incorrect</b>";
}
?>
  </div>
</body>
</html>
