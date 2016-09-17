<?php 
include 'dbconn.php';
	$msg = $_POST["msg"];
	$uid = $_POST["uid"];
$fname="admin";
 $email="admin@123";
 $rset=mysqli_query($conn,"select uid from messages where uid=$uid");
$rows =mysqli_num_rows($rset);
if($rows==0)
		{
			
      mysqli_query($conn,"insert into `messages`(uid,user,msg) values('$uid','$fname','$msg')");
							
		}else
{
	mysqli_query($conn,"UPDATE messages SET msg='$msg',time_stamp=now() WHERE uid='$uid';");
}
 
mysqli_query($conn,"insert into `$uid`(user,email,msg,time_stamp) values('$fname','$email','$msg',now())");
?>