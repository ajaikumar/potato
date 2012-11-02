<?php
error_reporting (E_ALL);
ini_set("display_errors","1");
include('../header.php');
$b=new connection;
$b->connect();
if(isset($_POST['upload']))
{
	$appname = $_POST['apps'];
	$appid = $_POST['appid'];
	$version = $_POST['version'];
	$apptype = $_POST['apptype'];
	$license = $_POST['license'];
	$description = $_POST['description'];
	$a=1;
	if($appname == '')
	{
		$msg="Enter appname";	
		$a=0;
	}
	elseif ($appid == '') 
	{
		$msg="Enter appid";	
		$a=0;
	}
	elseif ($version == '') 
	{
		$msg="Enter version";	
		$a=0;
	}
	elseif ($apptype == '') 
	{
		$msg="Enter apptype";	
		$a=0;
	}
	elseif ($license == '') 
	{
		$msg="Enter license";	
		$a=0;
	}
	elseif ($description == '') 
	{
		$msg="Enter description";	
		$a=0;
	}
	$uploaded_size = $_FILES['uploaded']['size'];
	$type = $_FILES['uploaded']['type']; 
	if ($uploaded_size > 52428800)
	{
	$msg = "The file size should be below 50MB"; 
	$a=0;
	} 
	if ($type != 'application/vnd.android.package-archive')
	{
	$msg = "Please upload a valid apk file"; 
	$a=0;
	} 
	if($a == 0)
	{
		header('location:../upload_file.php?msg='.$msg);
	}
	if($a == 1)
	{
		$uname = $_SESSION['username'];
		$select =$b->select("app_register","reg_id","username='$uname'");
		$fetch = mysql_fetch_array($select);
		$id = $fetch['reg_id'];
		$target = '../apk/';
		$target = $target . basename( $_FILES['uploaded']['name']) ; 
		$ok=1; 
		if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
		{
			echo "The file ". basename( $_FILES['uploaded']['name']). " has been uploaded";
			$apkname = basename( $_FILES['uploaded']['name']);
			$select1 = $b->select("app_apk","apk_name","apk_name='$apkname'");
			if(mysql_num_rows($select1) > 0)
			{
				$msg = "Please choose another filename for your app";
				header('location:../upload_file.php?msg='.$msg);
				exit();
			}
		} 
		else {
			echo $msg = "Sorry, there was a problem uploading your file.";
			header('location:../upload_file.php?msg='.$msg);
			exit();
		}
		$insert =$b->insert("app_apk","reg_id,app_name,app_id,app_version,app_type,app_license,description,apk_name","'$id','$appname','$appid','$version','$apptype','$license','$description','$apkname'");
		header('location:../upload_file.php?msg='.$msg);

		
	}

}

?>