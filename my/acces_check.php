<?php
session_start();
if(isset($_POST['email']) && isset($_POST['pswd']))
{			
			$email=$_POST['email'];
			$pswd=$_POST['pswd'];		
			
			
			include "dbconn.php";
			$rset = mysqli_query($conn, "select fname,lname,pswd,email,uid from reg where email='$email' and pswd='$pswd';"); 
			$rows =mysqli_num_rows($rset);
				if($rows==0)
						{
								session_destroy();
								header('location: login.php?id=1');
						}
								else
								{
									$row=mysqli_fetch_assoc($rset);
									$_SESSION['fname']=$row['fname'];
									$_SESSION['lname']=$row['lname'];
									$_SESSION['uid']=$row['uid'];
									$_SESSION['email']=$row['email'];	
 
								}
}	
		else if(!isset($_SESSION['email']))
{
			session_destroy();
		header ('location: login.php?id=1'); 
} 
?>