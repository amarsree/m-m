 <?php include "acces_check.php" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	
    <!-- spage: /Default.asp -->
    
    <title>Million Doller Moment</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <style type="text/css"> 
	</style>
  <!-- SLIDER -->
	<link rel="stylesheet" href="slider/refineslide.css" />
	<link rel="stylesheet" href="slider/refineslide-theme-dark.css" />
    
    <!-- PORTFOLIO SWIPE PLUGIN --> 
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<link href="js/jquery.mCustomScrollbar.css" rel="stylesheet" />
       <!-- jQuery UI -->
</head>
<body> 
<?php include "side_menu.php";?> 
<br><br><br>
<table border="1" width='50%' align="center">
<?php
include 'dbconn.php';
$uid=$_SESSION['uid'];
$result = $conn->query("select * from `$uid`");
if(mysqli_errno($conn)==!0){
echo "start conversatin";
include 'dbconn.php';
$result = $conn-> query ("CREATE TABLE `m\$m`.`$uid` ( `mid` INT(4) NOT NULL AUTO_INCREMENT , `user` VARCHAR(25) NOT NULL , `msg` TEXT NOT NULL , `email` VARCHAR(30) NOT NULL , `time_stamp` TIMESTAMP NOT NULL , PRIMARY KEY (`mid`)) ENGINE = MyISAM");
}
?>

<div id="show"></div>

	<script type="text/javascript" src="mystyle/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#show').load('msg.php')
			}, 1000);
		});
	</script>

<form action="" method="post">
<tr><td>
<input type="text" name='msg' id='msg' style="width:100%;">
</td>
<?php $user=$_SESSION['fname'].' '.$_SESSION['lname'];?>
<input  type='hidden' value="<?php echo $user; ?>" name='user' id='user'>
<input  type='hidden' value="<?php echo $_SESSION['email'];?>" name='email' id='email'>
<td align='center'><input type='submit' value='Send'>
</td></tr>
</form>
</table> 
<?php

if(isset($_POST['msg']))
{	
 $user=$_POST['user'];
 $email=$_POST['email'];
 $msg=$_POST['msg'];  
 include 'dbconn.php';
 mysqli_query($conn,"insert into `$uid` (user,email,msg,time_stamp) values('$user','$email','$msg',now())");
 mysqli_query($conn,"insert into `chat` (user,email,msg,time_stamp) values('$user','$email','$msg',now())");
}
?>
<?php // include "social.php"; ?>

<noscript>
<div style="display:none;">
<img src="../pixel.quantserve.com/pixel/p-AESZ-fKpcpAtq.gif" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- End Quantcast tag -->
 	    </div>
	        
      <div id="page-inside">   
      
    	

      <div class="group section-wrap upper" id="upper">
        <div class="wrap group">
       
       
        </div> 
    </div> 
    
<div class="clr"></div>



    </div>
	</div>
</div>
</div>
	<script src="js/classie.js"></script>
	<script src="js/sidebarEffects.js"></script>

<script src='js/swipe.js'></script>

<div class="clr"></div>
	
</div>
</div> 
</body>
</html>
