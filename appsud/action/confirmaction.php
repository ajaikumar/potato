<?php
include('../header.php');
$msg = $_REQUEST['msg'];
$b=new connection;
$b->connect();
$appid = $_SESSION['appid'];
if($_SESSION['username'])
{	
	if(isset($_POST['upload']))
	{
		$android = $_POST['android']; 
		$target = '../screenshots/';
		$scr1 = '../screenshots/';
		$scr2 = '../screenshots/';
		$scr3 = '../screenshots/';
		$target = $target .$appid. basename( $_FILES['banner']['name']) ; 
		$scr1 = $scr1 .$appid. basename( $_FILES['scr1']['name']) ; 
		$scr2 = $scr2 .$appid. basename( $_FILES['scr2']['name']) ; 
		$scr3 = $scr3 .$appid. basename( $_FILES['scr3']['name']) ; 
		if(move_uploaded_file($_FILES['banner']['tmp_name'], $target)) 
		{
			$banner = $appid.$_FILES['banner']['name'];
		}
		if(move_uploaded_file($_FILES['scr1']['tmp_name'], $scr1)) 
		{
			$scr1 = $appid.$_FILES['scr1']['name'];
		}
		if(move_uploaded_file($_FILES['scr2']['tmp_name'], $scr2)) 
		{
			$scr2 = $appid.$_FILES['scr2']['name'];
		}
		if(move_uploaded_file($_FILES['scr3']['tmp_name'], $scr3)) 
		{
			$scr3 = $appid.$_FILES['scr3']['name'];
		}
		$update = $b->update("app_apk","`2.2`='$android[0]',`2.3x`='$android[1]',`3.x`='$android[2]',`4.0.x`='$android[3]',`4.1/4.2`='$android[4]',app_banner='$banner',app_scr1='$scr1',app_scr2='$scr2',app_scr3='$scr3'","apk_id='$appid'");
		$msg = "uploaded succesfully";
		header('location:../upload_file.php?msg='.$msg);

	}

}

else{
     header('location:loginsignup.php');
}
?>