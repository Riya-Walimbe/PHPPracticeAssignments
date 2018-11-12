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

<div  style="margin-left:700px; margin-top:100px; border:2px; height:500px; width:500px; box-shadow:8px 8px 8px 8px black; background-color:white">
 <form>
   <center><br><br><br><font style="margin-top:50px; font-size:40px; color:red; font-family:Arial">Change Password<br></font></center>
  <div class="form-inline" align=center style="margin-top:50px">
    <label><font style="font-size:20px;">Current Password &nbsp &nbsp</font></label>
    <input type="password" class="form-control" name=passwd style="width:200px" id=pwd  value= <?php 
										if(isset($_GET['user']) ) echo $_GET['user']; ?>>
  </div>
  <div class="form-inline" align=center style="margin-top:40px">
    <label><font style="font-size:20px;  ">New Password &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp</font></label>
    <input type="password" class="form-control" name=passwd1 style="width:200px" id=pwd1>
  </div>
  
  <div class="form-inline" align=center style="margin-top:40px">
    <label><font style="font-size:20px; ">Confirm Password &nbsp &nbsp</font></label>
    <input type="password" class="form-control" name=passwd2 style="width:200px" id=pwd2>
  </div>
  
    <center><button type="submit" class="btn btn-success" style="margin-top:40px; width:180px; font-size:20px"  name="change">Change</button></center>
</form>
</div>
</body>
</html>


<?php

//echo $uid;
//echo "<br><br>";
//echo "<b><font color=green size=15px style='font-family: Comic Sans MS; text-shadow:3px 3px black '>WELCOME $uid!!</font></b><br><br>";


?>

<?php

if(isset($_GET['change']))
{	
$cn=mysqli_connect("localhost","root","riya")or die("Error in connection_aborted!!");
$d=mysqli_select_db($cn,"people")or die("Error in connection_aborted db!!");

session_start();
$user=$_SESSION['uid'];
echo $user;
$curr=$_GET['passwd'];
$new=$_GET['passwd1'];
$confirm=$_GET['passwd2'];
$sql="select password from register where username='$user' ";
$res=mysqli_query($cn,$sql);
$row=mysqli_fetch_array($res);


if($curr==$row["password"])
{
if($new==$confirm && !($new==" "&&$confirm==" "))
{
	$sql2="update register	set password='$new' where password='$curr'  and username='$user' ";
	mysqli_query($cn,$sql2);
	echo "<script>alert('Password updated successfully!!')</script>";
	
}
else
{
	echo "<script>alert('Passwords are not matching')</script>";
}

}

else
{
	echo "<script>alert('Invalid Current Password')</script>";
}

}

?>
<?php

if(isset($_GET['back']))
{
	header("Location: pizzavisible.php");
     exit;
	
}


?>