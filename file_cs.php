<?php
ob_start();
error_reporting(0);
include "connection.php";
$mb=$_REQUEST['t1'];
$pa=$_REQUEST['txt'];
$sql="INSERT into info('mobile','permanent_add')values ('$mb','$pa')";
mysqli_query($con,$sql);
header("location:file.php");
?>