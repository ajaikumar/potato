<?php
include('../header.php');
$b=new connection;
$b->connect();
$ses = $_SESSION['username'];
$select = $b->select("app_register","propic,reg_id","username='$ses'");
$rows = mysql_fetch_array($select);
if(isset($_POST['save']))
{
	unlink('../propic/'.$rows["propic"]);
	$target = '../propic/';
	$allowed = array("jpg", "jpeg", "gif", "png");
	if (($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/png")
	|| ($_FILES["file"]["type"] == "image/pjpeg"))
	{
	  if ($_FILES["file"]["error"] > 0)
	    {
	    $msg = $_FILES["file"]["error"];
	    $a=0;
	    }
	  else
	    {
	    	$extension = end(explode(".", $_FILES["file"]["name"]));
	    	$propic = rand().'.'.$extension;
			move_uploaded_file($_FILES["file"]["tmp_name"],$target.$propic);
			$regid = $rows['reg_id'];
			$update = $b->update("app_register","propic='$propic'","reg_id='$regid'");
			header('location:../edit_profile.php');
	    }
	  }
	else
	  {
	  $msg = "Invalid file";
	  $a=0;
	  }
}
?>