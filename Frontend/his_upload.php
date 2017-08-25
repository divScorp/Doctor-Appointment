<?php
session_start();
if(!$_SESSION['id'])
{
	header("Location:doctor.php");
}
?>
<html>
<head>
<title>Hospital Management System</title>
<style>
body{
	background-color:#232526;
	font-family: Arial, Helvetica, sans-serif;
	margin: 0 auto;
	padding:0px;
}
.select-style {
    border: 1px solid #ccc;
    width: 185px;
    border-radius: 3px;
    overflow: hidden;
    background: #fafafa no-repeat 90% 50%;
}

.select-style select {
    padding: 5px 8px;
    width: 100%;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}

.select-style select:focus {
    outline: none;
}

#apDiv3 {
	position: absolute;
	width: 78px;
	height: 93px;
	z-index: 1;
	left: 86px;
	top: 21px;
}
#apDiv1 {
	position: absolute;
	width: 1070px;
	height: 1264px;
	z-index: 1;
	left: 142px;
	top: 9px;
	color: #CCC;
	background: #648880;
	background: linear-gradient(to top, #f6f1d3 20%, #648880 50%, #293f50 75%);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	border: 1px solid #36b0b6;
}
#apDiv6 div.ap6 {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  border: 1px solid #36b0b6;
}
#apDiv2 {
	position: absolute;
	width: 1071px;
	height: 119px;
	z-index: 1;
	left: 0px;
	top: -1px;
	color: #D6D6D6;
	background-color: #CCCCCC;
	background-image: url(img/18691897.jpg);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	border: 1px solid #36b0b6;
	;
}
#apDiv4 {
	position: absolute;
	width: 151px;
	height: 120px;
	z-index: 2;
	/*border-top-left-radius:20px;*/
	border-top-right-radius:70px;
	border-bottom-right-radius:70px;
	border-top-left-radius:70px;
	border-bottom-left-radius:70px;
	background-image: url(img/logo_hospital_01_by_davicinpuntocom-d31hfy2.jpg);
}
#apDiv5 {
	position: absolute;
	width: 785px;
	height: 74px;
	z-index: 1;
	left: 157px;
	top: 27px;
	font-size: 45px;
	font-family: "Comic Sans MS", cursive;
	color: #ffffff;
	font-weight: bold;
	text-shadow: 8px -7px 8px #06F;
}
#apDiv6 {
	position: absolute;
	width: 1071px;
	height: 51px;
	z-index: 3;
	top: 118px;
	background-image: url(img/18691897.jpg);
	font-weight: bold;
	color: #FFF;
	left: 0px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	border: 1px solid #36b0b6;
}
#apDiv6 div:hover a {
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	-o-border-radius: 5px;
	/* [disabled]border-radius: 5px; */
	display: block;
	border: 1px solid #133e40;
	-moz-box-shadow: inset 0 5px 10px #133e40;
	-webkit-box-shadow: inset 0 5px 10px #133e40;
	box-shadow: inset 0 5px 10px #133e40;
}
#apDiv6 div:hover {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  border: 1px solid #36b0b6;
}
a:link
{
	text-decoration: none;
	color: #FFFFFF;
	font-family: "Comic Sans MS", cursive;
	font-size: 20px;
}
#apDiv1  div {
	color: #CFC;
}
#apDiv1 div {
	color: #0CF;
	font-family: "Comic Sans MS", cursive;
}

#apDiv1 div p {
	font-family: 'Comic Sans MS', cursive;
	font-size: 24px;
}
#apDiv7 {
	position: absolute;
	width: 700px;
	height: 300px;
	z-index: 4;
	left: 335px;
	top: 189px;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	background-image: url(img/patients-visitors.jpg);
}
#apDiv9 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
}

#apDiv10 {
	position: absolute;
	width: 998px;
	height: 573px;
	z-index: 6;
	left: 32px;
	top: 512px;
}
#apDiv1 #apDiv10 div {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 36px;
	color: #000;
	font-weight: bold;
	text-align: justify;
}
#apDiv14 {
	position: absolute;
	width: 1069px;
	height: 133px;
	z-index: 7;
	left: 0px;
	top: 1131px;
	background-color: #FFFFFF;
}
#apDiv8 {
	position: absolute;
	width: 191px;
	height: 235px;
	z-index: 2;
	left: 2px;
	top: 16px;
	background-color: transparent;
}
#apDiv8 tr td{
	height:39px;
	font-size:16px;
	background-color:#036;
	border:1px solid #0CF;
	box-shadow: 0 0 12px rgba(51, 204, 255, 0.5);
}
#apDiv16 tr td a:link{
	font-size:18px;	
}
#apDiv11 tr td a:link{
	font-size:18px;	
}
#apDiv8 tr td a:link{
	font-size:18px;	
}
a:hover
{
	color: #000000;
	font-size: 18px;
}
#apDiv11 {
	position: absolute;
	width: 203px;
	height: 80px;
	z-index: 3;
	left: 192px;
	top: 111px;
	background-color: transparent;
	visibility:hidden;
}
#apDiv11 tr td{
	height:39px;
	font-size:16px;
	background-color:#036;
	border:1px solid #0CF;
	box-shadow: 0 0 12px rgba(51, 204, 255, 0.5);
}

#apDiv16 tr td{
	height:39px;
	font-size:16px;
	background-color:#036;
	border:1px solid #0CF;
	box-shadow: 0 0 12px rgba(51, 204, 255, 0.5);
}
#apDiv12 {
	position: absolute;
	width: 1019px;
	height: 891px;
	z-index: 10;
	left: 26px;
	top: 203px;
}
#apDiv13 {
	position: absolute;
	width: 321px;
	height: 51px;
	z-index: 4;
	left: 404px;
	top: 28px;
}
#apDiv15 {
	position: absolute;
	width: 225px;
	height: 225px;
	z-index: 5;
	left: 793px;
	top: 14px;
}
#apDiv16 {
	position: absolute;
	width: 172px;
	height: 104px;
	z-index: 11;
	left: 217px;
	top: 270px;
	background-color: transparent;
	visibility:hidden;
}
a:hover{
	color:#CFF;
}
#apDiv17 {
	position: absolute;
	width: 485px;
	height: 305px;
	z-index: 11;
	left: 276px;
	top: 453px;
	border: 3px solid #033;
	background: #569C94;
	background: radial-gradient( #569C94 30%, #0F374A);
	border-radius: 20px;
	box-shadow: 6px 6px 20px rgba(0, 0, 0, 1);
}
#apDiv1 #apDiv17 form table tr th div {
	color: #000;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 20px;
}
#apDiv1 #apDiv17 form table {
	font-family: Tahoma, Geneva, sans-serif;
}
#apDiv1 #apDiv17 form table tr td div {
	font-family: Tahoma, Geneva, sans-serif;
	color: #000;
	font-weight: bold;
	font-size: 16px;
}
#apDiv17 tr input[type="text"] {
width: 165px;
padding: 2px 5px;
font-size:16px;
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
#apDiv17 tr input[type="text"]:focus{
	-webkit-box-shadow: 0 0 12px rgba(51, 204, 255, 1.2);
	-moz-box-shadow: 0 0 12px rgba(51, 204, 255, 1.2);
	box-shadow: 0 0 12px rgba(51, 204, 255, 1.2);
}
#apDiv17 tr input[type="text"]:focus {
	-moz-animation-name: pulse;
	-moz-animation-duration: 1.5s;
	-moz-animation-iteration-count: infinite;
	-moz-animation-timing-function: ease-in-out;
}
#apDiv17 tr textarea:focus{
	-webkit-box-shadow: 0 0 12px rgba(51, 204, 255, 1.2);
	-moz-box-shadow: 0 0 12px rgba(51, 204, 255, 1.2);
	box-shadow: 0 0 12px rgba(51, 204, 255, 1.2);
}
#apDiv17 tr textarea:focus {
	-moz-animation-name: pulse;
	-moz-animation-duration: 1.5s;
	-moz-animation-iteration-count: infinite;
	-moz-animation-timing-function: ease-in-out;
}
#apDiv17 textarea{
	width: 185px;
	padding: 3px 6px;
	font-size:16px;
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
</style>
<script type="text/javascript">

function show()
{
	document.getElementById("apDiv11").style.visibility="visible";
}
function hide()
{
	document.getElementById("apDiv11").style.visibility="hidden";
}
function show1()
{
	document.getElementById("apDiv16").style.visibility="visible";
}
function hide1()
{
	document.getElementById("apDiv16").style.visibility="hidden";
}
</script>
</head>
<body vlink="#FFFFFF">
<div id="apDiv1">
  <div id="apDiv2">
    <div id="apDiv5">
      <div align="left">Hospital Management System</div>
    </div>
</div>
  <div id="apDiv4"></div>
<div id="apDiv6">
    <table width="1071" height="54" border="0">
      <tr>
        <td width="186"><div align="center" id="ap6"><a href="index.html">Home</a></div></td>
        <td width="260"><div align="center"><a href="patient.php">Patient & Visitor's</a></div></td>
          <td width="203"><div align="center"><a href="doctor.php">Doctors</a></div></td>
        <td width="233"><div align="center"><a href="feedback.php">Feedback</a></div></td>
        <td width="167"><div align="center"><a href="contact.html">Contact us</a></div></td>
      </tr>
    </table>
  </div>
<div id="apDiv14">
<div id="copyright">
  <div class="wrapper">
    <p align="center" style="color:#000; font-size:18px;">Copyright &copy; 2015 - All Rights Reserved - <a href="#" style="color:#000; font-size:18px;">AD Hospital</a></p>
    <p align="center" style="color:#000; font-size:18px;">Powered By AD Hospital</p>
     <p align="center" style="color:#000; font-size:18px;">Developed by Divyanshu Sharma &amp; Adnan Arif - B.Sc (6th Semester)</p>
    <br class="clear" />
  </div>
</div>
</div>
<div id="apDiv12"><hr>
  <div id="apDiv15">
  	<?php
		include("connection.php");
		$uid=$_SESSION['id'];
		$qry=mysql_query("select dimage from doctor where doctorID='$uid'");
		while($row=mysql_fetch_array($qry))
		{
			$img=$row['dimage'];
		}
		print "<img src='imge/";
		print $img;
		print "' height='225px' width='225px'>";
	?>
  </div>
  <div id="apDiv13">Hello,&nbsp;
  <?php
 	include("connection.php");
	$uid=$_SESSION['id'];
	$qry=mysql_query("select dname from doctor where doctorID='$uid'");
	while($row=mysql_fetch_array($qry))
	{
		print "<font style='font-size:22px;'><strong>".$row['dname']."</strong></font>";
	}
     
  ?><hr>
  </div>
<div id="apDiv8">
  <table width="191" height="235" border="0">
    <tr>
      <td width="195"><div align="center"><a href="doctor_profile.php">Profile</a></div></td>
    </tr>
    <tr>
      <td onMouseOver="show1()" onMouseOut="hide1()"><div align="center"><a href="#">Patient History</a></div></td>
    </tr>
    <tr>
      <td  onmouseover="show()" onMouseOut="hide()"><div align="center"><a href="#">Appointment</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="p_report.php">Upload Report</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="d_logout.php">Logout</a></div></td>
    </tr>
  </table>
</div>
<div id="apDiv11" onMouseOver="show()" onMouseOut="hide()">
  <table width="203" height="80" border="0">
    <tr>
      <td><div align="center"><a href="d_view_app.php">View Appointment</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="d_cancel_app.php">Cancel Appointment</a></div></td>
    </tr>
  </table>
  </div>
</div>
<div id="apDiv16" onMouseOver="show1()" onMouseOut="hide1()">
  <table width="169" height="89" border="0">
    <tr>
      <td><div align="center"><a href="his_view.php">View</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="his_update.php">Update</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="his_upload.php">Upload</a></div></td>
    </tr>
  </table>
</div>
<div id="apDiv17">
  <form name="form1" method="post" action="his_upload1.php">
    <table width="479" border="0">
      <tr>
        <td height="44" colspan="3"><div align="center" style="font-size:24px;">Patient History</div><hr></td>
      </tr>
      <tr>
        <td width="215" height="39"><div align="right">Patient Name</div></td>
        <td width="13">&nbsp;</td>
        <td width="237"><label for="patient"></label>
          <div class="select-style"><select name="patient" size="1" id="patient">
          <option value="">Select Patient Name</option>
          <?php 
			include("connection.php");
			$did=$_SESSION['id'];
			$qry="select patient.patientID,pname from patient,appointment where patient.patientID=appointment.patientID and appointment.doctorID='$did' group by pname";
			$result=mysql_query($qry);
			if($result)
			{
				while($row=mysql_fetch_row($result))
				{
					print "<option value='".$row[0]."'>".$row[1]."</option>";
				}
			}
			else
			{
				print mysql_error();
			}
			?>
          </select></div></td>
      </tr>
      <tr>
        <td height="40"><div align="right">Date-</div></td>
        <td>&nbsp;</td>
        <td><label for="textfield"></label>
          <input type="text" name="date" id="date" value="<?php print date("Y/m/d");?>" onFocus="blur()"></td>
      </tr>
      <tr>
        <td height="36"><div align="right">Time-</div></td>
        <td>&nbsp;</td>
        <td><label for="textfield2"></label>
          <input type="text" name="time" id="time" value="<?php date_default_timezone_set('Asia/Calcutta'); print date("H:i:s");?>" onFocus="blur()"></td>
      </tr>
      <tr>
        <td><div align="right">Description</div></td>
        <td>&nbsp;</td>
        <td><label for="description"></label>
          <textarea name="description" cols="25" rows="3" id="description" placeholder="Enter patient diagnostic detail" required></textarea></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <input type="submit" name="Submit" id="button" value="Upload">
          <input type="reset" name="button2" id="button2" value="Reset">
        </div></td>
        
      </tr>
    </table>
  </form>
</div>
</div>
</body>
</html>
