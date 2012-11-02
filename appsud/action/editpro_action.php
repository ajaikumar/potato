<?php
include('../header.php');
if($_SESSION['username'])
{
    $b=new connection;
    $b->connect();
    if(isset($_POST['update']))
    {
	    $uname = $_SESSION['username'];
	    $fname = $_POST['firstname'];
	    $lname = $_POST['lastname'];
	    $country =  $_POST['country'];
	    $phone = $_POST['phone'];
	    $website = $_POST['website'];
	    $update = $b->update("app_register","firstname='$fname',lastname='$lname',country='$country',phone='$phone',website='$website'","username='$uname'");
	    header('location:../developers_home.php');
	}
	elseif (isset($_POST['save'])) {
		$allowedExts = array("jpg", "jpeg", "gif", "png");
		$extension = end(explode(".", $_FILES["file"]["name"]));
		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/png")
		|| ($_FILES["file"]["type"] == "image/pjpeg"))
		&& ($_FILES["file"]["size"] < 20000)
		&& in_array($extension, $allowedExts))
		{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Error: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
			$file = $_FILES ['file'];
			$name1 = $file ['name'];
			$type = $file ['type'];
			$size = $file ['size'];
			$tmppath = $file ['tmp_name'];
		}
		}
		else
		{
			echo "Invalid file";
		}

		}	
}
else{
  header('location:../loginsignup.php');
}           
