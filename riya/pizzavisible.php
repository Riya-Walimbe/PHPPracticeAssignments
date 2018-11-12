<html>

<link rel="stylesheet" href="style1.css" type="text/css">
<link rel=stylesheet href="css/bootstrap.css">
<link rel=stylesheet href="css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style5.css" type="text/css">

<head>
<title>Dance academy</title>

		

		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style5.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

</head>
<body style="background:pink.jpg; ">
<div class=wrapper style="height:1500px; background:white"> 

<div class=header>

<div class=logo>

<img src="logo.png">

</div>

<div class=navigation>
<nav>

<form><li><button class="btn btn-primary btn-lg btn-block login-button" style="width:100px; margin-left:1250px; background:red" name="logout">Log Out</button></li>
   </form>
</nav>
</div>

<form><button class="btn btn-primary btn-lg btn-block login-button" style="width:100px; margin-right:500px; background:red; margin-top:300px" name="display">Display</button>
<button class="btn btn-primary btn-lg btn-block login-button" style="width:200px; margin-right:500px; background:red;  margin-top:50px" name="changePassword">Change Password</button> 
<button class="btn btn-primary btn-lg btn-block login-button" style="width:200px; margin-right:500px; background:red;  margin-top:50px" name="update">Update</button> 


 </form>
</div>

<?php
session_start();
$uid=$_SESSION['uid'];
echo "<br><br>";
echo "<b><font color=green size=15px style='font-family: Comic Sans MS; text-shadow:3px 3px black '>WELCOME $uid!!</font></b><br><br>";
$_SESSION['uid']=$uid;
?>

<?php

if(isset($_GET['logout']))
{
	session_unset;
	header("Location: pizzalogin.php");
     exit;
	
}


if(isset($_GET['update']))
{
	header("Location: up.php");
     exit;
	
}

if(isset($_GET['display']))
{
	header("Location: dis.php");
     exit;
	
}

if(isset($_GET['changePassword']))
{
	header("Location: changePassword.php");
     exit;
	
}




?>

				</div>
			</div>
		</div>
		

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>




<div class=footer style="margin-top:600px">

<div class=footer1>

<h3 style="margin-top:80px; ">Class-Centers</h3>
<ul style="display:inline; list-style:none">
<li><h4>Mumbai</h4></li>
<li><h4>Delhi</h4></li>
<li><h4>Chennai</h4></li>
<li><h4>Kolkata</h4></li>
</ul>

</div>


<div class=footer2>
<h3 style="margin-top:100px; ">Choreographers</h3>
<ul>
<li><h4>Remo</h4></li>
<li><h4>Terrence</h4></li>
<li><h4>K.K</h4></li>
<li><h4>A.D</h4></li>
</ul>
</div>

<div class=footer3>
<h3 style="margin-top:120px; ">Related-links</h3>
<ul>
<li><a href="#"><h4>dance-academy-mumbai</h4></a></li>
<li><a href="#"><h4>dance-academy-delhi</h4></a></li>
<li><a href="#"><h4>dance-academy-chennai</h4></a></li>
<li><a href="#"><h4>dance-academy-kolkata</h4></a></li>
</ul>
</div>

<div class=footer4>
<h3 style="margin-top:140px; ">Contact-us</h3>
<ul>
<li><h4>0253-226445</h4></li>
<li><h4>a@gmail.com</h4></li>
<li><h4>Fax no:225-33456</h4></li>
<li><h4>www.danceac.com</h4></li>
</ul>
</div>

</div>
</body>
</html>