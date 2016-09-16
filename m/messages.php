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
<?php include "side_menu2.php";?> 
<br><br><br>
<?php
include 'dbconn.php';

?>
<table  width=50% align="center">
<div id="show"></div>

	<script type="text/javascript" src="mystyle/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#show').load('msg1.php')
			}, 3000);
		});
	</script>
	
	
	
	
</table> 
<?php



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
    <script> var slider3 = new Swipe(document.getElementById('slider3')); </script>

	<div class="clr"></div>
    	
	</div>
</div>

</body>
</html>
