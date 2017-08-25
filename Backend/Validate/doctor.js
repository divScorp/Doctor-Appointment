function validate()
{
	var a=document.doctor.dname.value;
    var c=document.doctor.age.value;
    var d=document.doctor.phone.value;
    var f=document.doctor.email.value;
    var h=document.doctor.doctor.value;    
    if(a=="")
	{
		alert("Name Not Entered");
		document.doctor.fname.focus();
		return false;
	}
	if(c=="")
    {
        alert("Age not Entered");
        document.doctor.age.focus();
        return false;
    }
	if(isNaN(c))
	{
		alert("Please Enter age in Number");
		return false;
	}
    var phoneno = /^\d{10}$/;  
  	if(!(d.match(phoneno)) )
  	{  
   		 alert("Not a valid Phone Number");  
    	 return false;  
  	}  
    if ((document.doctor.gender[0].checked == false ) && ( document.doctor.gender[1].checked == false ) ) 
    {   
        alert ( "Please choose your Gender");
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
    if(h=="")
	{
		alert("Doctor Name Not Entered");
		document.doctor.doctor.focus();
		return false;
	}
    if(document.doctor.texts.value=="")
	{
		alert("Address Not Entered");
		document.doctor.texts.focus();
		return false;
    }
	return true;
    
} 