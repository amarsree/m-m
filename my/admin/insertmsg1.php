<?php 
include 'dbconn.php';
	$msg = $_POST["msg"];
$fname="admin";
 $email="admin@123";
 
 
mysqli_query($conn,"insert into `chat`(user,email,msg,time_stamp) values('$fname','$email','$msg',now())");
?>