function validate()
{  
var name=document.myform.name.value;  
var password=document.myform.password.value;  
var username=document.myform.username.value;  
var submit=true;
  
if (name==null || name=="")
{  
  document.getElementById("err3").innerHTML="*Please Fill Name";
  document.getElementById("name").focus(true);
			//alert("Invalid email");
			submit=false;
}

var eml=document.myform.ema.value;  
		
		if(eml=="")
		{
			document.getElementById("err").innerHTML="*Please Fill Email id";
			document.getElementById("ema").focus(true);
			//alert("Invalid email");
			submit=false;
		}
		else
		{
			var atpos,dotpos;
			atpos = eml.indexOf("@");
			dotpos = eml.indexOf(".",atpos+1);
			
			if(atpos>=1 && dotpos>=1)
			submit=true;
			else
			{
				document.getElementById("err").innerHTML="*Please enter valid email id";
				//alert("Invalid email");
   			document.getElementById("email").value="";

				submit=false;
			}
			//submit=true;
		}
		
if (username	==null || username=="")
{  
document.getElementById("err4").innerHTML="*Please enter username";
document.getElementById("username").focus(true);
				//alert("Invalid email");
				submit=false;
  
}	

if(password.length<6){  
  
			document.getElementById("err1").innerHTML="*Password must be at least 6 characters long.";
			document.getElementById("passd").focus(true);
			//alert("Invalid email");
			submit=false;
  }  


var firstpassword=document.myform.passd.value;  
var secondpassword=document.myform.confirm.value;  

if (secondpassword==null || secondpassword=="")
{  
  document.getElementById("err2").innerHTML="*Confirm your password";
  document.getElementById("confirm").focus(true);
			//alert("Invalid email");
			submit=false;
}
  
if(firstpassword==secondpassword){  
return true;  
}  
else{  
document.getElementById("err2").innerHTML="*Password must be same!";
			document.getElementById("confirm").focus(true);
			//alert("Invalid email");
			submit=false;  
}  
		
return submit;

}

