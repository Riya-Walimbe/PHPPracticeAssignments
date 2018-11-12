<?php
$un=$_GET['un'];
$pwd=$_GET['pwd'];

if($un=="abc" && $pwd=="123")
	echo "Login Successfull";
else
	echo "Invalid Login";

?>