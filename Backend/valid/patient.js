function validate()
{
	var a=document.patient.pname.value;
    var c=document.patient.age.value;
    var d=document.patient.phone.value;
    var f=document.patient.email.value;
    var h=document.patient.doctor.value;
    
    if(a=="")
	{
		alert("Name Not Entered");
		document.patient.fname.focus();
		return false;
	}
    if(c=="")
    {
        alert("Age not Entered");
        document.patient.age.focus();
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
    if ((document.patient.gender[0].checked == false ) && ( document.patient.gender[1].checked == false ) ) 
    {   
        alert ( "Please choose your Gender");
        return false;
    }
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(f.match(mailformat))  
    {  
        document.patient.email.focus();  
        return true;  
    }  
    else  
    {  
        alert("You have entered an invalid email address!");  
        document.patient.email.focus();  
        return false;
    }  
    if(h=="")
	{
		alert("Doctor Name Not Entered");
		document.patient.doctor.focus();
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