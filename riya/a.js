function validate()
{
var name_regex = /^[a-zA-Z]+$/;
//var email_regex = /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
var email_regex=/^([A-Za-z0-9_\-\.]){1,}\@([A-Za-z0-9_\-\.])}{1,}\.([A-Za-z]{2,4})$/;
var add_regex = /^[0-9a-zA-Z]+$/;
var zip_regex = /^[0-9]+$/;

var name=document.forms["myform"]["name"];
var password=document.forms["myform"]["passd"];  
var username=document.forms["myform"]["username"];  
var eml=document.forms["myform"]["ema"];
var firstpassword=document.forms["myform"]["passd"];  
var secondpassword=document.forms["myform"]["confirm"];  
var em=document.getElementById("ema").value;

var err=document.getElementById("err");
var err1=document.getElementById("err1");
var err2=document.getElementById("err2");
var err3=document.getElementById("err3");

name.addEventListener("blur" , nameverify, true);
password.addEventListener("blur" , passwordverify, true);
username.addEventListener("blur" , usernameverify, true);
eml.addEventListener("blur" , emlverify, true);
secondpassword.addEventListener("blur" , passwordconfirmverify, true);

if (!(name.value>='a' && name.value<='z' || name.value>='A' && name.value<='Z' ))
{  
  name.style.border = "1px solid red";
  err3.textContent="*Name can't be blank and can't contain digits";
  name.focus();
  return false;
}


/*if(email_regex.test(eml.value)==false)
{
	eml.style.border = "1px solid red";
	err.textContent="*Please Fill Email-id";
	eml.focus();
	return false;
}*/

if(eml.value=="")
		{
			eml.style.border = "1px solid red";
			err.textContent="*Please Fill Email-id";
			eml.focus();
			return false;
		}
		else
		{
			var atpos,dotpos;
			atpos = em.indexOf("@");
			dotpos = em.indexOf(".",atpos+1);
			
			if(!(atpos>=1 && dotpos>=1))
			
			{
			eml.style.border = "1px solid red";
			err.textContent="*Please Fill Email-id in proper format";
			eml.focus();
			return false;
			}
			
		}
 	
if (username.value==null || username.value=="")
		{  
			username.style.border = "1px solid red";
			err4.textContent="*Please Fill Username";
			username.focus();
			return false;
		}	
		
		
		
if(password.value==""||password.value.length<6)
		{
			password.style.border = "1px solid red";
			err1.textContent="*Please Fill Password more than 6 characters";
			password.focus();
			return false;
		}

if (secondpassword.value==null || secondpassword.value=="")
{  
			secondpassword.style.border = "1px solid red";
			err2.textContent="*Confirm your password";
			secondpassword.focus();
			return false;
	
}

if(password.value==secondpassword.value)
{  
return true;  
}  
else
{  
			secondpassword.style.border = "1px solid red";
			password.innerHTML="";
			secondpassword.innerHTML0="";
			err2.textContent="*Password must be same";
			password.focus();
			return false;
}  

   
}

function nameverify()
{
	var name=document.forms["myform"]["name"];
	if(name.value!="")
	{
		err3.innerHTML="";
		return true;
	}
}

function emlverify()
{
var eml=document.forms["myform"]["ema"];
	if(eml.value!="")
	{
		err.innerHTML="";
		return true;
	}
	
}

function usernameverify()
{
	if(username.value!="")
	{
		err4.innerHTML="";
		return true;
	}
	
}

function passwordverify()
{
	var password=document.forms["myform"]["password"];
	if(password.value!="")
	{
		err1.innerHTML="";
		return true;
	}
	
}

function passwordconfirmverify()
{
	
	var secondpassword=document.forms["myform"]["secondpassword"];
	if(secondpassword.value!="")
	{
		err2.innerHTML="";
		return true;
	}
	
}
