<?php
session_start();
if(!$_SESSION['id'])
{
	header("Location:index.html");
}
?>
<html>
<head>
<title>Patient|Report</title>
<link rel="stylesheet" href="Style/report_style.css"/>
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
	width: 427px;
	height: 281px;
	z-index: 1;
	left: 301px;
	top: 273px;
	background: #f6f1d3;
	background: radial-gradient(#f6f1d3, #648880, #293f50);
	border: 2px solid #033;
	font-weight: bold;
}
#apDiv16 {
	position: absolute;
	width: 445px;
	height: 53px;
	z-index: 8;
	left: 303px;
	top: 219px;
	font-size: 24px;
}
#apDiv1 #apDiv15 form table {
	font-weight: bold;
}
#apDiv1 #apDiv16 div {
	font-weight: bold;
}
</style>

<script src="report_script.js"></script>
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
  <div id="apDiv15">
    <form action="report_upload.php" method="post" enctype="multipart/form-data" name="form1">
      <table width="447" border="0">
        <tr>
          <td width="180" height="34"><div align="right">Patient ID</div></td>
          <td width="8">&nbsp;</td>
          <td width="226"><label for="email"></label>
            <label for="email"></label>
            <select name="email" size="1" id="email">
            <option value="None">Select PatientID</option>
            <?php 
			include("connection.php");
			$qry="select * from patient";
			$result=mysql_query($qry);
			if($result)
			{
				while($row=mysql_fetch_row($result))
				{
					print "<option value='".$row[0]."'>".$row[2]."</option>";
				}
			}
			else
			{
				print mysql_error();
			}
			?>
          </select></td>
        </tr>
        <!-- <tr>
          <td height="34"><div align="right">Report No.</div></td>
          <td>&nbsp;</td>
          <td><label for="report"></label>
          <input type="text" name="report" id="report"></td>
        </tr> -->
        <tr>
          <td height="34"><div align="right">Date <small>(YYYY-MM-DD)</small></div></td>
          <td>&nbsp;</td>
          <td><label for="date"></label>
          <input type="text" name="date" id="date" value="<?php print date("Y/m/d");?>" onFocus="blur()"></td>
        </tr>
        <tr>
          <td height="34"><div align="right">Time <small>(HH:MM:MM)</small></div></td>
          <td>&nbsp;</td>
          <td><label for="time"></label>
          <input type="text" name="time" id="time" value="<?php date_default_timezone_set('Asia/Calcutta'); print date("H:i:s");?>" onFocus="blur()"></td>
        </tr>
        <tr>
          <td height="34"><div align="right">Report File</div></td>
          <td>&nbsp;</td>
          <td><label for="reportfile"></label>
          <input type="file" name="reportfile" id="reportfile"></td>
        </tr>
        <tr>
          <td height="34" colspan="3"><div align="center">
            <input type="submit" name="button" id="button" value="Upload">
            <input type="reset" name="button2" id="button2" value="Cancel">
          </div></td>
          <td width="10">&nbsp;</td>
          <td width="10">&nbsp;</td>
        </tr>
      </table>
    </form>
  </div>
  <div id="apDiv16">
    <div align="center">Upload Report</div>
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
