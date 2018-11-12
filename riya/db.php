<?php

$con=mysqli_connect("localhost","root","riya","reg");
echo "Connection success";

	

if(isset($_POST['register']))
{
	$name=$_POST['un'];
	$gender=$_POST['gender'];
	$phone=$_POST['ph'];
	$address=$_POST['add'];
	$email=$_POST['email'];


	
$sql="insert into register(name,gender,phone,address,email) values('$name','$gender','$phone','$address','$email')";
$res=mysqli_query($con,$sql);

if(!($res))
{
	header('Location:fail.php');
}
else
{
header('Location:success.php');	
}	
}

if(isset($_POST['display']))
{

$sql1="select * from register";
$res=mysqli_query($con,$sql1);

	echo "<table border=1px>";
	

while($row=mysqli_fetch_array($res))
{

		echo "<tr>";
		echo "<td>"; echo $row["name"]; echo "</td>";
		echo "<td>"; echo $row["gender"]; echo "</td>";
		echo "<td>"; echo $row["phone"]; echo "</td>";
			echo "<td>"; echo $row["address"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "</tr>"; 
}
echo "</table>";
}

if(isset($_POST['ok']))
{
	$n=$_POST['t1'];
	echo "$n";
	$sql2="delete from register where name='$n'";
	mysqli_query($con,$sql2);
}

if(isset($_POST['up']))
{
	$n1=$_POST['t2'];
	$n2=$_POST['t3'];
	$sql3="update register set name='$n2' where name='$n1'";
	mysqli_query($con,$sql3);

}


?>