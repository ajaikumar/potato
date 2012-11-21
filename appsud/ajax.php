<?php
include('model/allclasses.php');
$b=new connection;
$b->connect();
if(isset($_REQUEST['username']))
{
	$username = $_REQUEST['username'];
	$select = $b->select("app_register","username","username='$username'");
	$rows = mysql_fetch_array($select);
	if($rows > 0)
	{
		echo "Username exists";
	}
	else if(strlen($username) <8 )
	{
		echo "username should not be less than 8";
	}
	else if(strlen($username) >8)
	{
		echo "";
	}
}
exit;
?>