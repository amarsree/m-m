<!DOCTYPE html>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php'; ?>
</head>
<body >

<?php  include 'header.php'; ?>

<hr>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-4x"></i></h3>
                          <?php
                          if(isset($_POST["email"])){
                           
   $email=$_POST['email'];
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
  $mail->Body = "Hear is the otp ".$otp."\n go to this link for typing otp http://www.srkrcampus.net/miniproject8/login_otp1.php";
  
  $mail->AddAddress($email);

  $mail->Send();
  
 include 'dbconn.php';
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
        }
  
  
  

                }else{


                          if(isset($_GET['id'])){
                         echo  '<h3 class="text-center">Email you entered is alredy regestred</h3>';
                        }
                          ?>
                          <h2 class="text-center">Forgot Password?</h2>
                          <p>You can reset your password here.</p>
                            <div class="panel-body">
                              
                              <form class="form" method="post" action="" >
                                <fieldset>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                      
                                      <input name="email" id="emailInput" placeholder="email address" class="form-control" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="" type="email">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" value="Reset My Password" type="submit">
                                  </div>
                                </fieldset>
                              </form>

                              
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
<?php  include 'footer.php'; ?>

</body>
</html>
