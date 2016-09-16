<?php include "acces_check.php" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	
    <!-- spage: /event-inquiry.asp -->
    
    <title>Colin Cowie Mobile</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    
    
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
    


        <link rel="stylesheet" href="jquery.ui.datepicker.mobile.css" />
          <link rel="stylesheet" href="../code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="../code.jquery.com/jquery-1.10.2.js"></script>
  <script src="../code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
</head>
<body> 

<?php include "side_menu.php"; ?>
      
      <div class="clr"></div>
          <div id="page-sub-inside">   
            <img class="subpage-header-img" src="img/mobile/07-inquiry2.jpg" /> 
          </div>
      
      <div id="page-inside">   
      
    	

      <div class="group section-wrap upper" id="upper">
        <div class="wrap group">
        
        <div class="full-content">
			<div align="left">
<h1 style="text-align:justify">logged in succesful</h1>
<h1 style="text-align:justify">your details are...!</h1>
	<?php
		
		if(isset($_POST['email']))
		{
		$email=$_POST['email'];
		}
		else{
			$email=$_SESSION['email'];
		}
	//	$psw=$_POST['pswd'];
//		echo $email;
//		echo $p;
							include 'dbconn.php';
			$rset = mysqli_query ($conn, "SELECT * FROM reg where email='$email';");
							$row=mysqli_fetch_assoc($rset);
		?>		
		<table align=center border=1>
		<tr> <td>First Name</td><td><?php echo $row['fname'] ?> </td>
		</tr>
		<tr> <td>Last Name</td> <td><?php echo $row['lname'] ?></td>
		</tr>
		<tr> <td>emaill</td> <td><?php echo $row['email'] ?></td>
		</tr>
		<tr> <td>Mobile Number</td> <td><?php echo $row['mno'] ?></td>
		</tr>
		<tr> <td>Birthday</td> <td><?php echo $row['dob'] ?></td>
		</tr>
		</table>
		
		
		
		
			</div>
        </div>
      
        
        </div> 
    </div> 

<div class="clr"></div>

<div id="social_icons">
    	<div id="s_icons_pos">
    	<a href="https://www.facebook.com/itsmecolincowie"> <img src="img/social/facebook%402x.png"> </a>
        <a href="https://twitter.com/colincowie"> <img src="img/social/twitter%402x.png"> </a>
    	</div>
    </div>    
    
    <!-- google -->

<!-- Quantcast Tag -->
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
          
<!--<div class="full-content">
    <h5> WELCOME TO COLIN COWIE </h5>
        <p style="text-align:justify">Colin Cowie is on fire with an events business that travels the four corners of the world doing everything from intimate birthday celebrations to iconic weddings to corporate bashes, a hot new website on weddings and a consulting business that works on international hospitality and design projects for hotels, retailers and airlines. Layer on top of that his being a regular contributor to NBC’s The Today Show, a popular personality on HSN with home and lifestyle collections, and his ever-growing collection of lifestyle and entertaining books.</p>
</div>-->
        
    <script>
		(function () {
    		var e = document.getElementById("formdiv");
   		 e.parentNode.removeChild(e);
		})();
		</script>
        
        <script type="text/javascript" src="js/jquery.validate.html"></script>
    <script src="slider/modernizr.js"></script>
    <script src="slider/jquery.refineslide.js"></script>
    <script>
        $(function () {
            var $upper = $('#upper');

            $('#images').refineSlide({
                transition : 'slideH',
                onInit : function () {
                    var slider = this.slider,
                       $triggers = $('.translist').find('> li > a');

                    $triggers.parent().find('a[href="#_'+ this.slider.settings['transition'] +'"]').addClass('active');

                    $triggers.on('click', function (e) {
                       e.preventDefault();

                        if (!$(this).find('.unsupported').length) {
                            $triggers.removeClass('active');
                            $(this).addClass('active');
                            slider.settings['transition'] = $(this).attr('href').replace('#_', '');
                        }
                    });

                    function support(result, bobble) {
                        var phrase = '';

                        if (!result) {
                            phrase = ' not';
                            $upper.find('div.bobble-'+ bobble).addClass('unsupported');
                            $upper.find('div.bobble-js.bobble-css.unsupported').removeClass('bobble-css unsupported').text('JS');
                        }
                    }

                    support(this.slider.cssTransforms3d, '3d');
                    support(this.slider.cssTransitions, 'css');
                }
            });
        });
    </script>

     
    </div>
	</div>
	</div>
	</div>
		<script src="js/classie.js"></script>
		<script src="js/sidebarEffects.js"></script>

   <!--<script src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>-->
    
    <script src="js/jQuery.ui.datepicker.js"></script>
  <script>
  //reset type=date inputs to text
  $( document ).bind( "mobileinit", function(){
    $.mobile.page.prototype.options.degradeInputs.date = true;
  });	
</script>

	<div class="clr"></div>
    	
	</div>
</div>
</body>
</html>