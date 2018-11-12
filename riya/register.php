<html>

<link rel="stylesheet" href="style1.css" type="text/css">
<link rel=stylesheet href="css/bootstrap.css">
<link rel=stylesheet href="css/bootstrap.min.css">
<link rel="stylesheet" href="style5.css" type="text/css">
<head>
<title>Dance academy</title>
	     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="regvalid.js"> </script>
		

		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style5.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Register</title>
	</head>

</head>

<body>
<div class=wrapper style="height:500px;"> 

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
		<li><a href="#teachers">Teaching Staff</a></li>
		 <li><a href="dance.html">Home page</a></li>
		
		<!--<li><a href="#">Infrastructure</a></li>-->
         
		 </ul>
  </li> 
   
   <li><a href="register.html">Register</a>
   
   <li><a href="login.html">Login</a>
   
<li><a href="gallery1.php">Gallery</a></li>
<li><a href="dance.html#contact">Contact-us</a></li>

</nav>
</div>

</div>

<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5><b><font size=15 style="font-family:Verdena">SIGN UP</font></b></h5>
					<form class="" method="get"  name="myform">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" />
								</div>
								<span id="err3" style="font-size:15px;color:red; float:right"></span>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
								<span id="err" style="font-size:15px;color:red; float:right"></span>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								<!--	<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username" value=<?php echo $username ?>>-->
								</div>
								<span id="err4" style="font-size:15px;color:red; float:right"></span>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
								<span id="err1" style="font-size:15px;color:red; float:right"></span>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
								</div>
								<span id="err2" style="font-size:15px;color:red; float:right"></span>
							</div>
						</div>

						<div class="form-group ">
						<!--<input type=submit>-->
							<input class="btn btn-primary btn-lg btn-block login-button"  onclick="validate();return false;" type="submit" name="register" Value="Register">Register</button>
						</div>
											</form>

						<?php
	if(isset($_GET['register']))
{
	echo "<h1>Hello</h1>";
		$name=$_GET['name'];
		$emailid=$_GET['email'];
		$username=$_GET['username'];
		$password=$_GET['password'];
	
	echo $name;
		mysql_connect("localhost","root","riya")or die("Error in connection_aborted!!");
		mysql_select_db("dance")or die("Error in connection_aborted db!!");
		mysql_query("insert into register values('$name','$emailid','$username','$password')") or die("Error in connection_aborted!! insert");
		echo"<script>alert('Record saved successfully')</script>";
}
						?>
				</div>
			</div>
		</div>
		

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

<div class=footer style="margin-top:300px;";>

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