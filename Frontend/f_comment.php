<html>
<head>
<title>Feedback</title>
<style>
body{
	background-color:#232526;
	font-family: Arial, Helvetica, sans-serif;
	margin: 0 auto;
	padding:0px;
}

#apDiv1 {
	position: absolute;
	width: 1070px;
	height: 1197px;
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
	height: 53px;
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
	text-decoration:none;
	color:#ffffff;
	font-weight:bold;
	font-family:"Comic Sans MS", cursive;
	font-size:21px;
}
#apDiv14 {
	position: absolute;
	width: 1069px;
	height: 133px;
	z-index: 7;
	left: 0px;
	top: 1063px;
	background-color: #FFFFFF;
}

#apDiv3 {
	position: absolute;
	width: 655px;
	height: 67px;
	z-index: 8;
	left: 218px;
	top: 306px;
	font-size: 36px;
	border: 3px solid #033;
	background: #569C94;
	background: radial-gradient( #569C94 30%, #0F374A);
	border-radius: 7px;
	box-shadow: 6px 6px 20px rgba(0, 0, 0, 1);
	border-radius: 50px;
}
</style>
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
        <td width="145"><div align="center" id="ap6"><a href="index.html">Home</a></div></td>
        <td width="234"><div align="center"><a href="patient.php">Patient & Visitor's</a></div></td>
          <td width="183"><div align="center"><a href="doctor.php">Doctors</a></div></td>
        <td width="188"><div align="center"><a href="feedback.php">Feedback</a></div></td>
        <td width="178"><div align="center"><a href="contact.html">Contact us</a></div></td>
      </tr>
    </table>
  </div>
  <div id="apDiv14">
    <div id="copyright">
  <div class="wrapper">
    <p align="center" style="color:#000;">Copyright &copy; 2015 - All Rights Reserved - <a href="#" style="color:#000;">AD Hospital</a></p>
    <p align="center" style="color:#000;">Powered By AD Hospital</p>
     <p align="center" style="color:#000;">Developed by - Divyanshu Sharma &amp; Adnan Arif - B.Sc (6th Semester)</p>
    <br class="clear" />
  </div>
</div>
</div>
  <div id="apDiv3" align="center">
  <?php
  include("connection.php");
  $name=$_POST['name'];
  $email=$_POST['email'];
  $com=$_POST['comment'];
  $qry="insert into feedback values('$name','$email','$com')";
  $result=mysql_query($qry);
  if($result)
  {
	  print "<div align='center'><strong style='color:#000;'>Thanks for your feedback</strong></div>";
  }
  else
  {
	print mysql_error();  
  }
  ?>
  </div>
</div>
</body>
</html>
