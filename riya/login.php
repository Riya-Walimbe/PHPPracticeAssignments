<html>

<link rel="stylesheet" href="style1.css" type="text/css">
<link rel="stylesheet" href="style5.css" type="text/css">
<link rel=stylesheet href="css/bootstrap.css">
<link rel=stylesheet href="css/bootstrap.min.css">


<head>
<title>Dance academy</title>
</head>

<body>
<div class=wrapper style="height:1000px; background-repeat: no-repeat; background:url(brown.jpg); 
 background-size: cover;"> 

<div class=header>

<div class=logo>

<img src="logo.png">

</div>

<div class=navigation>
<nav>
<ul>
<li><a href="#">Home</a>
 <ul>
        <li><a href="about.html">About Us</a></li>
		<li><a href="contactsdance.xml">Teaching Staff</a></li>
		 <li><a href="dance.html">Home page</a></li>
		
		<!--<li><a href="#">Infrastructure</a></li>-->
         
		 </ul>
  </li> 
   
   <li><a href="my.php">Register</a>
   
   <li><a href="login.php">Login</a>
   
<li><a href="gallery1.php">Gallery</a></li>
<li><a href="sectioncontact.php">Contact-us</a></li>
<li><a href="form4.html">Video</a></li>

</nav>
</div>

</div>


  <div  style="margin-left:800px; margin-top:200px; border:2px; height:400px; width:400px; box-shadow:8px 8px 8px 8px black; background-color:white">
 <form>
   <center><font style="margin-top:50px; font-size:40px; color:red; font-family:Arial"><br>LOGIN</font></center>
  <div class="form-inline" align=center style="margin-top:50px">
    <label><font style="font-size:20px;">UserName &nbsp &nbsp</font></label>
    <input type="text" class="form-control" name=user style="width:200px" id=un  value= <?php 
										if(isset($_GET['user']) ) echo $_GET['user']; ?>>
  </div>
  <div class="form-inline" align=center style="margin-top:40px">
    <label><font style="font-size:20px; ">Password &nbsp &nbsp</font></label>
    <input type="password" class="form-control" name=passwd style="width:200px" id=pwd>
  </div>
    <center><button type="submit" class="btn btn-success" style="margin-top:40px; width:180px; font-size:20px"  name="login">Login</button></center>
</form>
</div>

<?php

if(isset($_GET['login']))
	{
		
		$user=$_GET['user'];
		$password=$_GET['passwd'];
		
		
	$cn=	mysqli_connect("localhost","root","riya")or die("Error in connection_aborted!!");
	$d=	mysqli_select_db($cn,"dance")or die("Error in connection_aborted db!!");
		$rows=mysqli_query($cn,"select * from register where username='$user'  and  password='$password' ") or die("Error in connection_aborted!! insert");
		
		if(mysqli_num_rows($rows)>=1)
		{
			$r=mysqli_fetch_row($rows);
			session_start();
			$_SESSION['uid']=$user;
			header("Location:visiblepage.php");
		echo"<script>alert('Login successfull!!')</script>";
		}
		else
		{
			
			echo"<script>alert('Please Register or enter the valid credentials!!')</script>";
	
		}
		
		
			
	}


	
?>


<div class=footer style="margin-top:300px;">

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

</html>