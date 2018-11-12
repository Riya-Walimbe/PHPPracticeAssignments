<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dance Academy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div>
<form><button class="btn btn-primary btn-lg btn-block login-button" style="width:100px; margin-left:1700px; background:green; margin-top:20px" name="back">Back</button>
   </form>
   </div>

<div  style="margin-left:700px; margin-top:100px; border:2px; height:400px; width:500px; box-shadow:8px 8px 8px 8px black; background-color:white">
 <form>
   <center><br><br><br><font style="margin-top:50px; font-size:40px; color:red; font-family:Arial">Forgot Password<br></font></center>
  <div class="form-inline" align=center style="margin-top:50px">
    <label><font style="font-size:20px;">Enter OTP &nbsp &nbsp</font></label>
    <input type="text" class="form-control" name=optno style="width:200px" id=optno maxlength=6> 
									
  
    <center><button type="submit" class="btn btn-success" style="margin-top:40px; width:100px; font-size:20px"  name="ok">OK</button></center><br>
	<center><button type="submit" class="btn btn-success" style="margin-top:10px; width:140px; font-size:20px"  name="resend">Resend OTP</button></center>
</form>
</div>
</body>
</html>

<?php
session_start();
$phno=$_SESSION['phno'];
//echo $phno;

if(isset($_GET['back']))
{
	header("Location: pizzalogin.php");
     exit;
	
}

if(isset($_GET['otp']))
{
	$optno=$_GET['optno'];
	if(!($optno==""))
	{
	$x=mt_rand(100000,999999);
    $no=$_GET['phno'];
	echo $no;
    $noString=implode(',',$no);
    $msg="Welcome to Dance Academy";	
	
	header("Location: http://bulksms.msghome.in/api/sendhttp.php?authkey=4705AJdgKb0i58ee172b&mobiles=$no&message=$msg&sender=RAJCOM&route=6");
     exit;
	 
	}
	

?>