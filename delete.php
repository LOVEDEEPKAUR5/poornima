<?php
include "connection.php";
$id=$_REQUEST['uid'];
$sql="delete from user where id='$id'";
mysqli_query($con,$sql);
header("location:show.php");
?>
