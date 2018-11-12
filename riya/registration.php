<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<title>JavaScript Form Validation using a sample registration form</title>

<link rel='stylesheet' href='js-form-validation.css' type='text/css' />
<script src="sample-registration-form-validation.js"></script>
<script type="text/javascript">
function formValidation()
{
var uid = document.registration.userid;
var passid = document.registration.passid;
var uname = document.registration.username;
var dob = document.registration.dob;
var uadd = document.registration.address;
var ucountry = document.registration.country;
var course = document.registration.course;
var dept = document.registration.department;
var uemail = document.registration.email;
var mob = document.registration.mobileno;
var umsex = document.registration.msex;
var ufsex = document.registration.fsex; 
if(userid_validation(uid,5,12))
{
if(passid_validation(passid,7,12))
{
if(allLetter(uname))
{
if(alphanumeric(dob))
{
if(alphanumeric(uadd))
{ 
if(countryselect(ucountry))
{
if(allLetter(course))
{
if(allLetter(dept))
{
if(ValidateEmail(uemail))
{
if(allnumeric(mob))
{
if(validsex(umsex,ufsex))
{
}
}
} 
}
}
}
} 
}
}
}
}
return false;

} function userid_validation(uid,mx,my)
{
var uid_len = uid.value.length;
if (uid_len == 0 || uid_len >= my || uid_len < mx)
{
alert("User Id should not be empty / length be between "+mx+" to "+my);
uid.focus();
return false;
}
return true;
}
function passid_validation(passid,mx,my)
{
var passid_len = passid.value.length;
if (passid_len == 0 ||passid_len >= my || passid_len < mx)
{
alert("Password should not be empty / length be between "+mx+" to "+my);
passid.focus();
return false;
}
return true;
}
function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
uname.focus();
return false;
}
}

function alphanumeric(uadd)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(uadd.value.match(letters))
{
return true;
}
else
{
alert('User address must have alphanumeric characters only');
uadd.focus();
return false;
}
}
function countryselect(ucountry)
{
if(ucountry.value == "Default")
{
alert('Select your country from the list');
ucountry.focus();
return false;
}
else
{
return true;
}
}
function allLetter(course)
{ 
var letters = /^[a-zA-Z]+$/;
if(uadd.value.match(letters))
{
return true;
}
else
{
alert('course must have letters only');
course.focus();
return false;
}
}
function allLetter(department)
{
var letters = /^[a-zA-Z]+$/;
if(dept.value.match(letters))
{
return true;
}
else
{
alert('Department must have letters only');
department.focus();
return false;
}
}
/*function ValidateEmail(uemail)
{

//var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var mailformat = /^[a-zA-Z0-9.!#$%&'*+\/=?^_'{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/
if(uemail.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
uemail.focus();
return false;
}

}*/

  function ValidateEmail(uemail)
  {
    var eml;
    eml = document.getElementById("em").value;
    
    if(eml=="")
    {
      document.getElementById("err").innerHTML="Please Fill Emailid";
      document.getElementById("em").focus(true);
      return false;
    }
    else
    {
      var atpos,dotpos;
      atpos = eml.indexOf("@");
      dotpos = eml.indexOf(".",atpos+1);
      
      if(atpos>=1 && dotpos>=1)
      return true;
      else
      {
        document.getElementById("err").innerHTML="Please enter valid emailid";
        return false;
      }
      document.getElementById("em").value="";
      return true;
    }
    
  }

function numeric(mob)
{ 
var letters = /^[0-9]+$/;
if(uadd.value.match(letters))
{
return true;
}
else
{
alert('mobile Number must have numeric characters only');
mob.focus();
return false;
}
}
} function validsex(umsex,ufsex)
{
x=0;

if(umsex.checked) 
{
x++;
} 
else(ufsex.checked)
{
x++; 
}
if(x==0)
{
alert('Select Male/Female');
umsex.focus();
return false;
}
else
{
alert('Form Succesfully Submitted');
window.location.reload()
return true;
}
}
</script>
</head>
<body background="bck4.jpg" onload="document.registration.userid.focus();">
<h1>Registration Form</h1>
<form  name='registration' action="log.html" method="GET" onClick="return formValidation();">

<table align="center" cellpadding="10">
<tr><td>
User id: </td>
<td><input type="text" name="userid" required maxlegth="20" size="18" /></td></tr>

<tr><td>
Password: </td>
<td><input type="password" name="passid" required maxlegth="20" size="10" /></td></tr>

<tr><td>
Name: </td>
<td><input type="text" name="username" required maxlegth="20" size="30" /></td></tr>

<tr><td>
DOB : </td>
<td><input type="text" name=date required placeholder="yyyy-mm-dd" /></td></tr>

<tr><td>
Address: </td>
<td><input type="text" name="address" required maxlegth="20" size="30" /></td></tr>

<tr><td>
Country: </td>
<td><select name="country">
<option selected="" value="Default">(Please select a country)</option>
<option value="Australia">Australia</option>
<option value="Canada">Canada</option>
<option value="India">India</option>
<option value="Russia">Russia</option>
<option value="USA">USA</option>
</select></td></tr>

<tr><td>
Courses Applied For: </td> 
<td> <input type="radio" name="Course" value="MCA">MCA
 <input type="radio" name="Course" value="B.E">B.E
 <input type="radio" name="Course" value="M.E"/>M.E</td></tr>

<tr><td>
Department: </td>
<td><select name="department">
<option selected="" value="Default">(Please select a department)</option>
<option value="Mechanical">Mechanical</option>
<option value="Civil">Civil</option>
<option value="Computer">Computer</option>
<option value="Electrical">Electrical</option>
<option value="Entc">E&TC</option>
</select></td></tr>

<tr><td>
Email: </td> 
<td><input type="text" name="email" required maxlegth="20" size="30" /></td></tr>

<tr><td>
MobileNo: </td>
<td><input type="text" name="mob" required maxlegth="12" size="10" /></td></tr>

<tr><td>
Gender: </td>
<td><input type="radio" name="msex" maxlegth="20" value="Male" /><span>Male</span>

	<input type="radio" name="msex"  maxlegth="20" value="Female" /><span>Female</span></td></tr>

<tr><td>
  <input type=submit name="ok" value="ok">
<input type="submit" name="submit" value="Submit" /></td></tr>
</table>
</form>

<?php   
if(isset($_GET['submit']))
{
  $userid=$_GET['userid'];
  $passid=$_GET['passid'];
  $username=$_GET['username'];
  $date=$_GET['date'];
  $address=$_GET['address'];
  $country=$_GET['country'];
  $Course=$_GET['Course'];
  $department=$_GET['department'];
  $email=$_GET['email'];
  $mob=$_GET['mob'];
  $msex=$_GET['msex'];
  //$fsex=$_GET['fsex'];
    
  
mysql_connect("localhost","root","");
mysql_select_db("website");
mysql_query("insert into admin values ('$userid','$passid','$username','$date','$address','$country','$Course','$department','$email',$mob,'$msex')");
echo"Records Saved Successfully";
}
?>

</body>
</html>
