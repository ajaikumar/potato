<?php
include('../header.php');
$b=new connection;
$b->connect();
if(isset($_POST[signup]))
{
	$username = $_POST['username'];
	$email = $_POST['emailid'];
	$password = $_POST['password'];
	$re_pass = $_POST['re_password'];
	$usertype = $_POST['usertype'];
	$country = $_POST['country'];
	$phone = $_POST['phone'];
	$website = $_POST['website'];
	$a=1;
	if($username == '')
	{
		$msg="Enter username";	
		$a=0;
	}
	elseif ($email == '') 
	{
		$msg="Enter Email";	
		$a=0;
	}
	elseif ($password == '') 
	{
		$msg="Enter Password";	
		$a=0;
	}
	elseif ($re_pass == '') 
	{
		$msg="Please Re type password";	
		$a=0;
	}
	elseif ($password != $re_pass) 
	{
		$msg="Enter Same password";	
		$a=0;
	}
	elseif ($usertype == 0) 
	{
		$msg="Enter select usertype";	
		$a=0;
	}
	elseif ($country == '') 
	{
		$msg="Enter country";	
		$a=0;
	}
	elseif ($phone == '') 
	{
		$msg="Enter phone";	
		$a=0;
	}
	elseif ($website == '') 
	{
		$msg="Enter website";	
		$a=0;
	}
	if($a==0)
	{
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $email;
		$_SESSION['usertype'] = $usertype;
		$_SESSION['country'] = $country;
		$_SESSION['phone'] = $phone;
		$_SESSION['website'] = $website;
		header('location:../loginsignup.php?msg='.$msg);
	}
	if($a == 1)
	{
		$select = $b->select("app_register","username,email","username='$username' || email='$email'");
		$num = mysql_num_rows($select);
		if($num>0)
		{
			$msg = "user already exists";
			header('location:../loginsignup.php?msg='.$msg);
		}
		else
		{
			$insert =$b->insert("app_register","username,email,password,usertype,country,phone,website","'$username','$email','$password','$usertype','$country','$phone','$website'");
			$_SESSION['username'] = $username;
			header('location:../developers_home.php');			
		}
	}
}

if(isset($_POST['login']))
{
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$c=1;
	if($uname == '')
	{
		$msg = "Please enter the username";
		$c=0;
	}
	elseif ($pass == '') {
		$msg = "Please enter Password";
		$c=0;
	}
	if($c==0)
	{
		$_SESSION['username'] = $uname;
		$_SESSION['pass'] = $pass;
		header('location:../loginsignup.php?msg='.$msg);
	}
	if($c==1)
	{
		$select =$b->select("app_register","username,email","((username='$uname' || email='$uname') && password='$pass')");
		$num = mysql_num_rows($select);
		if($num == 1)
		{
			$_SESSION['username'] = $uname;
			header('location:../developers_home.php');
		}
		else
		{
			$msg = "invalid login";
			header('location:../loginsignup.php?msg='.$msg);

		}
	}
}

?>