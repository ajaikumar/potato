<?php
include('../header.php');
$msg = $_REQUEST['msg'];
$b=new connection;
$b->connect();
if($_SESSION['username'])
{	
	if(isset($_POST['upload'])){
		$android = $_POST['android']; 
		$target = '../screenshots/';
		$target = $target . basename( $_FILES['banner']['name']) ; 
		$scr1 = $target . basename( $_FILES['scr1']['name']) ; 
		$scr2 = $target . basename( $_FILES['scr2']['name']) ; 
		$scr3 = $target . basename( $_FILES['scr3']['name']) ; 
		if(move_uploaded_file($_FILES['banner']['tmp_name'], $target)) 
		{
			$banner = $_FILES['banner']['name'];
		}
		if(move_uploaded_file($_FILES['scr1']['tmp_name'], $scr1)) 
		{
			$scr1 = $_FILES['scr1']['name'];
		}
		if(move_uploaded_file($_FILES['scr2']['tmp_name'], $scr2)) 
		{
			$scr2 = $_FILES['scr2']['name'];
		}
		if(move_uploaded_file($_FILES['scr3']['tmp_name'], $scr3)) 
		{
			$scr3 = $_FILES['scr3']['name'];
		}

	}

}

else{
     header('location:loginsignup.php');
}
?>