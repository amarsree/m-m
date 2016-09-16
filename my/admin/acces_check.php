<?php
session_start();
if(isset($_POST['email']) && isset($_POST['pswd']))
{			
			$email=$_POST['email'];
			$pswd=$_POST['pswd'];
		//	include "dbconn.php";
		//	$rset = mysqli_query($conn, "select uname,pswd,email from registration where email='$email' and pswd='$pswd';"); 
		//	$rows =mysqli_num_rows($rset);
				if(($email=='admin') && ($pswd=='abc'))
						{
							$_SESSION['uname']="admin";
							$_SESSION['email']='admin@gmail.com';
						}
								else
								{
								session_destroy();
								header('location: admin_login.php?id=0');
							}
}	
		else if(!isset($_SESSION['email']))
{
			session_destroy();
		header ('location: admin_login.php?id=1'); 
} 
?>