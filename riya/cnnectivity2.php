<html>
<form>
Tour id<input type=text name=tid>
Tour name<input type=text name=tn>
Your Amount<input type=text name=tmat>
Tour Dates<input type=date name=td>
<input type=submit value="save" name=save>

</form>
<?php
if(isset($_GET['save']))
{
	$tid=$_GET['tid'];
	$tn=$_GET['tn'];
	$tmat=$_GET['tmat'];
	$td=$_GET['td'];
	
	mysql_connect("localhost","root","riya");
	mysql_select_db("tour");
	mysql_query("insert into travell1 values($tid,'$tn',$tmat,'$td')");
	echo "Record save successfully";
}
?>
</html>