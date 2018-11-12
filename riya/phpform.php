<?php include_once("db.php");?>
<html>


<body>

<form method=post>
<h1 align=center>REGISTER</h1>
Name <input type=text name="un" required><br><br>
Gender <input type=radio name="gender" value="f" required>Female<input type=radio name="gender" value="m">Male
<br><br>
Phone number <input type=text name="ph" required><br><br>
Address <input type=text name="add" required><br><br>
Email-id <input type=text name="email" required><br><br>
<input type=submit name="register" value="Register"><br><br>
</form>
<form method=post>
<input type=submit name="display" value="Display"><br><br>
</form>

</body>



</html>