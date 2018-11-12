function validate()
{
	var name=document.forms["myform"]["name"];
	var email=document.forms["myform"]["email"];
	var name_error=document.getElementById("name_error");
	var email_error=document.getElementById("email_error");
	
	name.addEventListener("blur" , nameverify, true);
	email.addEventListener("blur" , emailverify, true);
	
	if(name.value=="")
	{
		name.style.border = "1px solid red";
		name_error.textContent="Name required";
		name.focus();
		return false;
	}
		
	if(email.value=="")
	{
		email.style.border = "1px solid red";
		email_error.textContent="Email required";
		email.focus();
		return false;
	}
	

}

function nameverify()
{
	if(name.value!="")
	{
		name_error.innerHTML="";
		return true;
	}
}

function emailverify()
{	
	if(email.value!="")
	{
		email_error.innerHTML="";
		return true;
	}
}