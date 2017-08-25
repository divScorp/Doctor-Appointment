<?php
session_start();
if(!$_SESSION['id'])
{
	header("Location:index.html");
}
?>
<html>
<head>
<title>Admin|Profile</title>
<link rel="stylesheet" href="Style/profile_css.css"/>
<style type="text/css">
#apDiv14 {
	position: absolute;
	width: 146px;
	height: 32px;
	z-index: 6;
	left: 949px;
	top: 85px;
	font-family: courier, monospace;
	text-align: center;
	color: white;
	font-size: 20px;
}
#apDiv15 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 7;
	left: 41px;
	top: 409px;
}
#apDiv16 {
	position: absolute;
	width: 672px;
	height: 182px;
	z-index: 1;
	left: 7px;
	top: 227px;
	background: #FFF;
	background: linear-gradient(#FFF,#999);
	border-radius: 100px;
	border: 1px solid #F00;
}
#apDiv17 {
	position: absolute;
	width: 165px;
	height: 176px;
	z-index: 2;
	left: 16px;
	top: 231px;
	background-image: url(aimage/di.jpg);
	border-radius: 100px;
}
#apDiv20 {
	position: absolute;
	width: 165px;
	height: 156px;
	z-index: 9;
	left: 919px;
	top: 449px;
	background-image: url(aimage/adnan.jpg);
	border-radius: 100px;
}
#apDiv21 {
	position: absolute;
	width: 645px;
	height: 165px;
	z-index: 8;
	left: 445px;
	top: 445px;
	background: #FFF;
	background: linear-gradient(#FFF,#999);
	border-radius: 100px;
	border: 1px solid #F00;
}
#apDiv18 {
	position: absolute;
	width: 461px;
	height: 162px;
	z-index: 2;
	left: 187px;
	top: 12px;
}
#apDiv1 #apDiv16 #apDiv18 table tr td div {
	font-size: 20px;
	font-family: "Comic Sans MS", cursive;
}
#apDiv19 {
	position: absolute;
	width: 448px;
	height: 154px;
	z-index: 1;
	left: 18px;
	top: 6px;
}
#apDiv1 #apDiv21 #apDiv19 table tr td div {
	font-family: "Comic Sans MS", cursive;
	font-size: 20px;
}
</style>
<script src="profile_script.js"></script>
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
  <div id="apDiv14"><script>
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
  <div id="apDiv16">
    <div id="apDiv18">
      <table width="470" height="162" border="0">
        <tr>
          <td height="33"><div align="center">Divyanshu Sharma</div></td>
        </tr>
        <tr>
          <td><div align="center">B.sc (Computer Science) - 6th Semester</div></td>
        </tr>
        <tr>
          <td><div align="center">ds909201@gmail.com</div></td>
        </tr>
        <tr>
          <td><div align="center">+91 88 76 241398</div></td>
        </tr>
      </table>
    </div>
  </div>
  <div id="apDiv17"></div>
  <div id="apDiv20"></div>
  <div id="apDiv21">
    <div id="apDiv19">
      <table width="448" height="153" border="0">
        <tr>
          <td><div align="center">Adnan Arif</div></td>
        </tr>
        <tr>
          <td><div align="center">B.sc (Computer Science) - 6th Semester</div></td>
        </tr>
        <tr>
          <td><div align="center">aarif8363@gmail.com</div></td>
        </tr>
        <tr>
          <td><div align="center">+91 87 21 820119</div></td>
        </tr>
      </table>
    </div>
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
