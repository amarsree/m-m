<?php
//for ($i=1; $i<3; $i++)
//{
	 //$email=$_POST['email'];
$email= "amarsree007@gmail.com";
	$otp=rand(999,10000);
	//echo $otp;
  require_once('email/class.phpmailer.php');
  include("email/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
		
  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "movierating11@gmail.com";  // GMAIL username
  $mail->Password   = "srkr@123";            // GMAIL password

  $mail->SetFrom('movierating11@gmail.com', 'movie rating'); // Change the name as you want
  $mail->Subject    = "conformation mail";
  $mail->Body = "count =";
  for ($i=1; $i<10; $i++){
    echo $i;
  $mail->AddAddress($email);
 }

  $mail->Send();

  echo "mail has been Sent";

//}
  
/* include 'dbconn.php';
  $rset = mysqli_query($conn, "select email,status,otp from forgot_pswd where email='$email' and status=0;"); 
			$rows =mysqli_num_rows($rset);
				if($rows==0)
				{
					include "dbconn.php";
  mysqli_query($conn,"insert into forgot_pswd (email,otp,status) values('$email',$otp,0)"); 
  echo "<br><br><center><font color='green' size='3'><b> OPT has been Successfully Sent to your email!</b></font></center>";

				}
				else
				{
					$row=mysqli_fetch_assoc($rset);
					echo "<center>A record is matching with your details you can use this OTP ".$row['otp']."</center>";
				}*/

?> 