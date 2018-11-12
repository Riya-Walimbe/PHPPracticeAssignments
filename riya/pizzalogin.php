<html>

<link rel="stylesheet" href="style1.css" type="text/css">
<link rel="stylesheet" href="style5.css" type="text/css">
<link rel=stylesheet href="css/bootstrap.css">
<link rel=stylesheet href="css/bootstrap.min.css">
<link rel="stylesheet" href="stylepopup.css" type="text/css">

<head>
<title>Dance academy</title>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 50%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>


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
   
   <li><a href="pizzaregister.php">Register</a>
   
   <li><a href="pizzalogin.php">Login</a>
   
<li><a href="gallery1.php">Gallery</a></li>
<li><a href="sectioncontact.php">Contact-us</a></li>
<li><a href="form4.html">Video</a></li>

</nav>
</div>

</div>


  <div  style="margin-left:800px; margin-top:200px; border:2px; height:410px; width:400px; box-shadow:8px 8px 8px 8px black; background-color:white">
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
  
    <center><button type="submit" class="btn btn-success" style="margin-top:40px; width:180px; font-size:20px"  name="login">Login</button></center><br>
    
    
	  
	  <center><a id="myBtn">Forgot Password</a></center>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  
  <div class="modal-content">
    <span class="close">&times;</span>
		 <div class="form-inline" align=center style="margin-top:40px">
    <label><font style="font-size:20px; ">Enter phone number &nbsp &nbsp</font></label>
    <input type="text" class="form-control" name=phno style="width:200px" id=phno maxlength=10>
  </div>
  
 <center><button type="submit" class="btn btn-success" style="margin-top:40px; width:180px; font-size:20px"  name="otp">Send OTP</button></center><br>
 </div>
  </div>

</form>
</div>

<?php

if(isset($_GET['login']))
	{
		
		$user=$_GET['user'];
		$password=$_GET['passwd'];
	
	
		if($user==""&&$password=="")
		{
			echo "<script>alert('Enter the valid credentials')</script>";
		}
		
		else
		{
			
				
	$cn=mysqli_connect("localhost","root","riya")or die("Error in connection_aborted!!");
	$d=mysqli_select_db($cn,"people")or die("Error in connection_aborted db!!");
	$sql=mysqli_query($cn,"select * from register where username='$user'  and  password='$password' ") or die("Error in connection_aborted!! insert");
		
		
           $row=mysqli_fetch_array($sql);

		    if($user==$row["username"] && $password==$row["password"])
			{
			session_start();			
			$_SESSION['uid']=$user;
			header("Location:pizzavisible.php");
			
			
		    echo"<script>alert('Login successfull!!')</script>";
			
			}
		
		else
		{
			
			echo"<script>alert('Please Register or enter the valid credentials!!')</script>";
	
		}
		
		}
			
	}
	
	if(isset($_GET['otp']))
	{
		
		$phno=$_GET['phno'];
		session_start();
	
		
	
	$x=mt_rand(100000,999999);
    $no=$_GET['phno'];
	echo $no;
    //$noString=implode(',',$no);
    $msg="Welcome to Dance Academy. Your otp is $x";	
	
	header("Location:otp.php");
	header("Location: http://bulksms.msghome.in/api/sendhttp.php?authkey=4705AJdgKb0i58ee172b&mobiles=$no&message=$msg&sender=RAJCOM&route=6");
    exit;
	
		$_SESSION['phno']=$phno;	
	/*	if(!($phno==""))
		{
		header("Location:otp.php");
		exit;
		}
		else
		{
			echo "<script>alert('Enter the Phone no.')</script>";
		}*/
	}

	
?>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

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
