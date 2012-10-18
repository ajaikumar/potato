<?php
ob_start();
session_start();
include('model/allclasses.php');
$obj=new connection();
$obj->connect;
?>