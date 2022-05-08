<?php
ob_start();
error_reporting(0);
include "connection.php";
$nm=$_REQUEST['t1'];
$em=$_REQUEST['t2'];
$mb=$_REQUEST['t3'];
$ad=$_REQUEST['txt'];
$sql="INSERT into user (name,email,mobile,address)values ('$nm','$em','$mb','$ad')";
mysqli_query($con,$sql);
header("location:show.php");
?>