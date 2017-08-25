<?php
session_start();
if(!$_SESSION['id'])
{
	header("Location:index.html");
}
?>
<html>
<head>
<title>Doctor Modify</title>
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
	height: 373px;
	z-index: 1;
	left: 258px;
	top: 283px;
	border: 2px solid #036;
	background: #466368;
	background: #466368;
	background: radial-gradient(#f6f1d3, #648880);
}
#apDiv16 {
	position: absolute;
	width: 597px;
	height: 52px;
	z-index: 7;
	left: 260px;
	top: 229px;
}
#apDiv1 #apDiv15 form table tr td div {
	font-weight: bold;
}
</style>

<script src="doctor_script.js"></script>
<script language="javascript">
function validate()
{
	var phoneno = /^\d{10}$/;  
  	if(!(d.match(phoneno)) )
  	{  
   		 alert("Not a valid Phone Number");  
    	 return false;  
  	}  
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(f.match(mailformat))  
    {  
        document.doctor.email.focus();  
        return true;  
    }  
    else  
    {  
        alert("You have entered an invalid email address!");  
        document.doctor.email.focus();  
        return false;
    }  
	if(document.patient.texts.value=="")
	{
		alert("Address Not Entered");
		document.patient.texts.focus();
		return false;
    }
	return true;
}
</script> 
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
    <form action="doctor_mod2.php" method="post" enctype="multipart/form-data" name="doctor">
      <table width="595" border="0">
        <tr>
          <td width="276" height="43"><div align="right"><strong>Doctor name</strong></div></td>
          <td width="22">&nbsp;</td>
          <td width="283"><label for="dname"></label>
          <input type="text" name="dname" id="dname" required value="<?php 
			include("connection.php");
			$did=$_GET['did'];
			$qry=mysql_query("select * from doctor where doctorID='$did'");
			while($row=mysql_fetch_array($qry))
			{
				print $row['dname'];
			}			
			?>"></td>
        </tr>
        <tr>
          <td height="39"><div align="right"><strong>Email-ID</strong></div></td>
          <td>&nbsp;</td>
          <td><label for="email"></label>
          <input type="text" name="email" id="email" value="<?php $did=$_GET['did'];
		  print $did;
          ?>"></td>
        </tr>
        <tr>
          <td height="37"><div align="right"><strong>Phone Number</strong></div></td>
          <td>&nbsp;</td>
          <td><label for="phone"></label>
          <input type="text" name="phone" id="phone"></td>
        </tr>
        <tr>
          <td height="39"><div align="right">Password</div></td>
          <td>&nbsp;</td>
          <td><label for="pass"></label>
          <input type="password" name="pass" id="pass"></td>
        </tr>
        <tr>
        	<td height="39"><div align="right"><strong>Address</strong></div></td>
            <td>&nbsp;</td>
            <td><label for="add"></label>
              <textarea name="add" id="add" cols="40" rows="4"></textarea>
        </tr>
        <tr>
        <td height="55"><div align="right"><strong>Doctor Image</strong></div></td>
        <td>&nbsp;</td>
        <td><label for="image"></label>
          <input type="file" name="image" id="image"><br><small style="color:#000;">Only .jpg .gif .png</small></td>
        </tr>
        <tr>
          <td height="39" colspan="3"><div align="center">
            <input type="submit" name="button" id="button" value="Update" onClick="return (validate())">
            <input type="reset" name="button" id="button" value="Cancel">
          </div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
      </table>
    </form>
  </div>
  <div id="apDiv16">
    <div align="center"><font color="#CCCCCC"><strong><h2>Doctor's Modification</h2></strong></font></div>
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
