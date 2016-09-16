<?php include "acces_check1.php" ?>
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
 <!--   <link rel="stylesheet" type="text/css"   href="../dev.m.colincowie.com/fonts/183106/FD4BA651226B0C74A.css" />
    <link rel="stylesheet" type="text/css" href="jquery-ui.css" />
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/transit.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
    <script src="js/modernizr.custom.js"></script>
    
    <!-- SLIDER -->
	<link rel="stylesheet" href="slider/refineslide.css" />
	<link rel="stylesheet" href="slider/refineslide-theme-dark.css" />
    
    <!-- PORTFOLIO SWIPE PLUGIN --> 
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<link href="js/jquery.mCustomScrollbar.css" rel="stylesheet" />
    

    
    <!-- jQuery UI -->
    
    <script type="text/javascript" src="js/jquery-ui.js"></script>
</head>
<body> 
<?php include "side_menu2.php"; ?> 

<br><br><br>


<table border="1" width=50% align="center">
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
<input  type='hidden' value="<?php echo $_SESSION['fname'].' '.$_SESSION['lname'];?>" name='user' id='user'>
<input  type='hidden' value="<?php echo $_SESSION['email'];?>" name='email' id='email'>
<td align="center"><input type='submit' value='Send'>
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
mysqli_query($conn, "CREATE TABLE `m\$m`.`$uid` ( `mid` INT(4) NOT NULL AUTO_INCREMENT , `user` VARCHAR(25) NOT NULL , `msg` TEXT NOT NULL , `email` VARCHAR(30) NOT NULL , `time_stamp` TIMESTAMP NOT NULL , PRIMARY KEY (`mid`)) ENGINE = MyISAM"); 

}
 
?>

			
   
<?php // include "social.php"; ?>

    

<!-- Quantcast Tag 
<script type="text/javascript">
var _qevents = _qevents || [];

(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();

_qevents.push({
qacct:"p-AESZ-fKpcpAtq"
});
</script>

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
    <script> var slider3 = new Swipe(document.getElementById('slider3')); </script>

	<div class="clr"></div>
    	
	</div>
</div>

</body>
</html>
