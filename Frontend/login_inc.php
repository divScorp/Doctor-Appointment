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
#apDiv8 {
	position: absolute;
	width: 286px;
	height: 220px;
	z-index: 5;
	left: 23px;
	top: 203px;
	background: #069;
	background: radial-gradient(#069 40%,#039);
	border-bottom-left-radius: 15px;
	border-bottom-right-radius: 15px;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
	float: right;
	border: 2px solid #033;
	box-shadow: 4px 4px 10px rgba(0, 0, 0, 1);
}
#apDiv9 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
}
#apDiv8 table tr td div {
	font-size: 18px;
	font-family: "Comic Sans MS", cursive;
	font-weight: bold;
	color: #000;
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
#apDiv8 tr input[type="text"] {
width: 160px;
padding: 2px 5px;
font-size:15px;
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
#apDiv8 tr input[type="password"] {
width: 160px;
padding: 2px 5px;
font-size:15px;
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
#apDiv8 tr input[type="text"]:focus{
	-webkit-box-shadow: 0 0 12px rgba(51, 204, 255, 1.2);
	-moz-box-shadow: 0 0 12px rgba(51, 204, 255, 1.2);
	box-shadow: 0 0 12px rgba(51, 204, 255, 1.2);
}
#apDiv8 tr input[type="text"]:focus {
	-moz-animation-name: pulse;
	-moz-animation-duration: 1.5s;
	-moz-animation-iteration-count: infinite;
	-moz-animation-timing-function: ease-in-out;
}
#apDiv8 tr input[type="password"]:focus{
	-webkit-box-shadow: 0 0 12px rgba(51, 204, 255, 1.2);
	-moz-box-shadow: 0 0 12px rgba(51, 204, 255, 1.2);
	box-shadow: 0 0 12px rgba(51, 204, 255, 1.2);
}
#apDiv8 tr input[type="password"]:focus {
	-moz-animation-name: pulse;
	-moz-animation-duration: 1.5s;
	-moz-animation-iteration-count: infinite;
	-moz-animation-timing-function: ease-in-out;
}
</style>
<script type="text/javascript">
function validate() {
	var a=document.form1.email.value;
	var b=document.form1.pass.value;
	if (a=="") {
		alert("Email-id not entered");
		return false;
	}
	if (b=="") {
		alert("Password not entered");
		return false;
	}
	return true;
}
</script>
<head></head>
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
<div id="apDiv7"></div>
<div id="apDiv8">
  <table width="284" height="36" border="0">
    <tr>
      <td width="278"><div align="center">Patient Login</div><hr></td>
    </tr>
    <tr>
      <td><div class="AccordionPanelContent">
        <form name="form1" method="post" action="p_logincheck.php">
          <table width="270" border="0">
            <tr>
              <td width="102" height="40"><div align="right">Email-ID</div></td>
              <td width="15">&nbsp;</td>
              <td width="139"><div align="left">
                <label for="textfield4"></label>
                <input type="text" name="email" id="textfield4" placeholder="Email-ID" required>
              </div></td>
            </tr>
            <tr>
              <td height="34"><div align="right">Password</div></td>
              <td>&nbsp;</td>
              <td><div align="left">
                <label for="textfield5"></label>
                <input type="password" name="pass" id="textfield5" placeholder="Password" required>
              </div></td>
            </tr>
            <tr>
              <td height="47" colspan="3"><div align="center">
                <input type="submit" name="button" id="button" value="Log in" onClick="return validate()">
              </div></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="47" colspan="3"><div align="center"><i><font color="#CC0000">Login Incorrect</font></i></div></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </form>
      </div></td>
    </tr>
  </table>
  </div>
<div id="apDiv10">
  <div align="left">
    <p style="font-size:36px; height: 20px; color: #030;">Patient and Visitors</p><hr size="2px">
    <p style="text-decoration:underline; height:0px; color:#060;">Patient</p><br>
    <p style="font-size:18px; font-family:'Times New Roman', Times, serif; font-weight:600;">Thank you for choosing our hospital (HMS) as your healthcare partner. We want you to feel comfortable and confident during your stay with us. We understand that you probably have some questions and concerns about the treatment you're about to undergo, whether you'll be having an outpatient procedure or a longer hospital stay. We hope you'll find the answers to your questions here. Your comfort and sense of well-being, before and after your surgery, is of the utmost importance to us. If you have questions or concerns, please call our patient care line at (864) 455-5555, or talk to your physician.</p>
    <p style="text-decoration:underline; height:0px; color:#060;">Visitors</p><br>
    <p style="font-size:18px; font-family:'Times New Roman', Times, serif; font-weight:600;">Welcome to our Hospital (HMS). We're happy that you're able to visit your loved one during his or her stay with us. Visitors provide a vital service to our patients and to us, because you play an important role in helping create a warm and healing environment for our patients. Your presence is one of the most important parts of the recovery process because you provide the comfort and support of home.<br><br>We hope that the amenities we've provided make your visit with us a pleasant one for you and a healing one for your loved one. Should you need information or wish to contact a patient, we can be reached at (864) 455-7000.</p><hr size="2px">
  </div>
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
</div>
</body>
</html>
