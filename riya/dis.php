<html>

<head>
<link rel=stylesheet href="css/bootstrap.css">
<link rel=stylesheet href="css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

</html>
<?php
session_start();
$uid=$_SESSION['uid'];
$cn=mysqli_connect("localhost","root","riya")or die("Error in connection_aborted!!");
$d=mysqli_select_db($cn,"people")or die("Error in connection_aborted db!!");

$sql="select * from register where username='$uid' ";
$result=mysqli_query($cn, $sql);

//echo "<table border=2>";
$row=mysqli_fetch_array($result);
	
$name1=$row["name"];
$email1=$row["emailid"];
$username1=$row["username"];

$name=$_SESSION['name'];
$email=$_SESSION['email'];
$username=$_SESSION['username'];

//$_SESSION['user']=$username;
?>

<div>
<form>
<button class="btn btn-primary btn-lg btn-block login-button" style="width:100px; margin-left:1700px; background:green; margin-top:40px" name="back">Back</button>
   </form>
   </div>
<div  style="margin-left:700px; margin-top:50px; border:2px; height:700px; width:500px; box-shadow:8px 8px 8px 8px black; background-color:white">
 <form>
   <center><br><br><br><font style="margin-top:50px; font-size:40px; color:orange; font-family:Arial">DETAILS<br></font></center>
  <div class="form-inline" align=center style="margin-top:50px">
    <label><font style="font-size:20px; margin-left:10px">NAME &nbsp &nbsp</font></label>
	<label><font style="font-size:20px; margin-left:10px; color:red">
	<?php 
	if($name=="")
	echo $name1;
    else
	echo $name;
	?>
	</font></label>
	
  </div>
  <div class="form-inline" align=center style="margin-top:40px">
    <label><font style="font-size:20px;  ">EMAIL-ID</font></label>
	<label><font style="font-size:20px; color:red  ">
	<?php
     if($email=="")		 
	echo $email1;
    else
	echo $email;
	?>
	</font></label>
  </div>
  
  <div class="form-inline" align=center style="margin-top:40px">
    <label><font style="font-size:20px; margin-left:-60px" name=usern>USERNAME</font></label>
	<label><font style="font-size:20px; margin-left:20px; color:red">
	<?php
	 if($username=="")
	echo $username1;
	else
	echo $username;
	?>
	</font></label>
    									
  </div>
  
    </form>
</div>

<?php
//echo "</table>";


if(isset($_GET['back']))
{

	header("Location: pizzavisible.php");
     exit;
	
}



?>