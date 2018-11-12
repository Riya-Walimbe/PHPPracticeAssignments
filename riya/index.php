<html>

<body>
	<a href="phpform.php">Add new Record</a>
	<form method=post>
<input type=submit name="delete" value="Delete"><br><br>
<input type=submit name="update" value="update"><br><br>
	</form>

	<?php
if(isset($_POST['delete']))
{
header('Location:delete.php');
}

if(isset($_POST['update']))
{
header('Location:update.php');
}


?>

</body>

</html>