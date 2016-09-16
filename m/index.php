<!DOCTYPE >

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
		 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	
    <!-- page: /Default.asp --->
    
    <title>Million Doller Moment</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    
    <!-- SLIDER -->
	<link rel="stylesheet" href="slider/refineslide.css" />
	<link rel="stylesheet" href="slider/refineslide-theme-dark.css" />
    
    <!-- PORTFOLIO SWIPE PLUGIN --->
    <script src="js/jqu	ery.mCustomScrollbar.concat.min.js"></script>
	<link href="js/jquery.mCustomScrollbar.css" rel="stylesheet" />
    

    
    <!-- jQuery UI --->
    
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    


</head>
<body> 

	
		
<?php 
session_start();
if(isset($_SESSION['email']))
{
 include "side_menu.php"; 
 }else{
	 include "side_menu1.php";
	session_destroy();
	 }           
	?>
  <!-- main page contentents  -->
      <div class="clr"></div>
      <div  class="s-12 l-9">
          <div id="page-sub-inside">   
            <a href="celebrations.html"><img class="subpage-header-hmpg-top" src="img/2.jpg" /></a>
            <a href="corporate.html"><img class="subpage-header-hmpg" src="img/mobile/02-corporate.jpg" /></a> 
            <a href="http://www.colincowieweddings.com/"><img class="subpage-header-hmpg" src="img/mobile/09-inspiration.jpg" /></a> 
            <a href="gallery.html"><img class="subpage-header-hmpg" src="img/mobile/03-ourwork.jpg" /></a> 
            <a href="about.html"><img class="subpage-header-hmpg" src="img/mobile/04-aboutcolin.jpg" /></a> 
            <a href="philanthropy.html"><img class="subpage-header-hmpg" src="img/mobile/05-philanthropy.jpg" /></a> 
            <a href="contact.html"><img class="subpage-header-hmpg" src="img/mobile/06-contact.jpg" /></a>   
<!--end of main page contentents  -->
			</div>
   
<?php include "social.php"; ?>
<?php include "chat/index.html"; ?>

  

          </div>
	  
      
      <div id="page-inside">   
      
    	

      <div class="group section-wrap upper" id="upper">
        <div class="wrap group">
       
       
        </div> 
    </div> 
    
<div class="clr"></div>
<!--<div class="full-content">
    <h5> WELCOME TO COLIN COWIE </h5>
        <p style="text-align:justify">Colin Cowie is on fire with an events business that travels the four corners of the world doing everything from intimate birthday celebrations to iconic weddings to corporate bashes, a hot new website on weddings and a consulting business that works on international hospitality and design projects for hotels, retailers and airlines. Layer on top of that his being a regular contributor to NBC’s The Today Show, a popular personality on HSN with home and lifestyle collections, and his ever-growing collection of lifestyle and entertaining books.</p>
</div>--->
        
    
    <script src="slider/modernizr.js"></script>
    <script src="slider/jquery.refineslide.js"></script>



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
