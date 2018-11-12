   <?php
   $name=filter_input[INPUT_POST,'name'];
	$emailid=filter_input[INPUT_POST,'email'];
	$username=filter_input[INPUT_POST,'username'];
	$password=filter_input[INPUT_POST,'password'];
	
	
	mysql_connect("localhost","root","riya")or die("Error in connection_aborted!!");
	mysql_select_db("dance")or die("Error in connection_aborted db!!");
	mysql_query("insert into register values('$name','$emailid','$username','$password')") or die("Error in connection_aborted!! insert");
	echo"Record saved successfully";
	
	?>