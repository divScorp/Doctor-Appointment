function show_course()
{
	document.getElementById("apDiv8").style.visibility="visible";
}
function hide_course()
{
	document.getElementById("apDiv8").style.visibility="hidden";
}
function show()
{
	document.getElementById("apDiv9").style.visibility="visible";
}
function hide()
{
	document.getElementById("apDiv9").style.visibility="hidden";
}
function show1()
{
	document.getElementById("apDiv10").style.visibility="visible";
}
function hide1()
{
	document.getElementById("apDiv10").style.visibility="hidden";
}
function show2()
{
	document.getElementById("apDiv11").style.visibility="visible";
}
function hide2()
{
	document.getElementById("apDiv11").style.visibility="hidden";
}
function show3()
{
	document.getElementById("apDiv13").style.visibility="visible";
}
function hide3()
{
	document.getElementById("apDiv13").style.visibility="hidden";
}
function validate()
{
	var a=document.f1.pass1.value;
	var b=document.f1.pass2.value;
	var c=document.f1.pass3.value;
	if(a=="")
	{
		alert("Current Password Not Entered");
		return false;
	}
	if(b=="")
	{
		alert("New Password Not Entered");
		return false;
	}
	if(c=="")
	{
		alert("Re-enter new Password");
		return false;
	}
	if(b!=c)
	{
		alert("New Password doesn't match.");
		return false;
	}
}

