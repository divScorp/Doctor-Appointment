function validate() {
	var a=document.signup.email.value;
	var b=document.signup.pass.value;
	var c=document.signup.repass.value;
	var d=document.signup.age.value;
	var e=document.signup.phone.value;
	var f=document.signup.pname.value;
	if(f=="")
	{
		alert("Patient name not entered");
		return false;
	}
	if (a=="") {
		alert("Email-id not entered");
		return false;
	}
	
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!(a.match(mailformat)) )
    {  
        alert("You have entered an invalid email address!");  
        document.signup.email.focus();  
        return false;
    } 
	if (b=="") 
	{
		alert("Password not entered");
		return false;
	}
	if(c=="")
	{
		alert("Re-enter your password");
		return false;
	}
	if(b!=c)
	{
		alert("Password doesnot match !!");
		return false;
	}
	if(d=="")
	{
		alert("Age not entered");
		return false;
	}
	if(isNaN(d))
	{
		alert("Invalid age");
		return false;
	}
	var phoneno = /^\d{10}$/;  
  	if(!(e.match(phoneno)) )
  	{  
   		 alert("Not a valid Phone Number");  
    	 return false;  
  	}  
	if ( ( document.signup.gender[0].checked == false ) && ( document.signup.gender[1].checked == false ) ) 
  	{
 		 alert ( "Please choose your Gender: Male or Female" ); 
  	     return false;
  	}
	var val = document.signup.address.value;

    if (/^\s*$/g.test(val) || val.indexOf('\n') != -1) {
        alert('Wrong Address!');
		return false;
    }
	return true;
}