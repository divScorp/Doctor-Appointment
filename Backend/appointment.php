<?php
session_start();
if(!$_SESSION['id'])
{
	header("Location:index.html");
}
?>
<html>
<head>
<title>Appointment Lists</title>
<link rel="stylesheet" href="Style/Admin_style.css"/>
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
	width: 801px;
	height: 107px;
	background: #3FF;
	background: radial-gradient(#3FF 20%, #399);
	z-index: 1;
	left: 148px;
	top: 304px;
	font-family: "Comic Sans MS", cursive;
	font-size: 36px;
	border-bottom-left-radius: 50px;
	border-bottom-right-radius: 50px;
	border-top-left-radius: 50px;
	border-top-right-radius: 50px;
	box-shadow: 4px 4px 4px 2px #306;
}
#apDiv16 {
	position: absolute;
	width: 141px;
	height: 97px;
	z-index: 3;
	left: 7px;
	background-image: url(aimage/admin_icon.jpg);
	top: 5px;
	border-bottom-left-radius:50px;
	border-top-left-radius:50px;
}

#apDiv17 {
	position: absolute;
	width: 620px;
	height: 70px;
	z-index: 4;
	left: 166px;
	top: 21px;
}
#apDiv18 {
	position: absolute;
	width: 809px;
	height: 393px;
	z-index: 2;
	left: 140px;
	top: 287px;
	background: #466368;
	background: radial-gradient(#f6f1d3, #648880);
	border: 3px solid maroon;
}
#apDiv18 tr td{
    border: 1px solid maroon;
	font-weight:bold;
    background: #466368;
	background: radial-gradient(#f6f1d3 40%, #648880);
	border-radius:5px;
}
#apDiv18 tr th{
    border: 2px solid maroon;
	font-weight:bold;
    background: #466368;
	background: radial-gradient(#f6f1d3 40%, #648880);
	border-radius:5px;
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
  <div id="apDiv18">
    <table width="806" height="39" border="0" cellpadding="1" cellspacing="1">
      <tr>
		<th width="153">Patient Name</th>
        <th width="152">Doctor Name</th>
        <th width="178">Appointment No.</th>
        <th width="63">Date</th>
        <th width="66">Time</th>
      </tr>
      <tr>
      <?php
	   include("connection.php");
	   $qry1=mysql_query("select patient.pname from patient,appointment where patient.patientID=appointment.patientID");
	   $qry2=mysql_query("select doctor.dname from doctor,appointment where doctor.doctorID=appointment.doctorID");
	   $qry3=mysql_query("select * from appointment");
	   while(($patient=mysql_fetch_array($qry1)) && ($doctor=mysql_fetch_array($qry2)) && ($result=mysql_fetch_array($qry3)))
	   {
			print "<tr height='39'>";
			print "<td>".$patient['pname']."</td>";
			print "<td>".$doctor['dname']."</td>";		
			print "<td>".$result['app_no']."</td>";
			print "<td>".$result['date']."</td>";
			print "<td>".$result['time']."</td>";
			print "</tr>";	
			
	   }
	  ?>
      </tr>
    </table>
  </div>
</div>
<div id="apDiv13" onMouseOver="show3()" onMouseOut
="hide3()">
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
