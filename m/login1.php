<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
		 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	
    <!-- spage: /celebrations.asp -->
    
    <title>Wedding & Event Planner, Destination Weddings, New York and California Weddings | Colin Cowie Celebrations</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <style type="text/css"> 
    </style>
    <link rel="stylesheet" type="text/css" href="../dev.m.colincowie.com/fonts/183106/FD4BA651226B0C74A.css" />
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
    


<?php  include "side_menu.php" ?>

</head>
<body> 
	  
      <!--
          <div class="box-content"> <h1> <a href="#"> SIGNATURE </a> </h1> </div>
    <div class="box-content"> <h1> <a href="#"> TEAM COWIE </a> </h1></div>
    <div class="box-content"> <h1> <a href="#"> CONSULTING </a> </h1></div>
    <div class="box-content"> <h1> <a href="#"> FLORAL & DÉCOR </a> </h1> </div>
		-->
      
      <div id="page-inside">   
      
    	<div class="full-content" align="center">

        <p style="text-align:justify">Over the last two decades Colin Cowie Celebrations has mastered the art of entertaining by blending beauty with business. We facilitate the process of vision to reality and concept to execution. Serving domestic and international clients seeking private or corporate services around the globe, we have designed and produced a variety of events ranging from intimate gatherings for 50 to grand-scale productions for over 5000. As highly regarded Event Planners specializing in weddings, corporate and other private work we pride ourselves on our ability to perform.

Whether we are designing a private wedding celebration or a grand hotel opening we strive to create an experience that is memorable, meaningful and engaging for you and your guests and we would be delighted to help with yours.</p>
&nbsp;
		<div id="inquiry-button" align="center">
          <a href="event-inquiry.html">Submit an inquiry</a>
        </div>
        </div>

<br />
<div class="clr"></div>

  <div id="accordion">
	<h3>SIGNATURE</h3>
	<div><p style="text-align:justify"><i>Signature</i> services provide the personal talent and involvement of Colin on or for your event. Colin will personally spearhead the creation and design of your celebration from concept to completion. With the eye of an artist and the skill of an architect, Colin will create the most exquisite personal experience for you and your guests.</p>
    <br />
        <p style="text-align:justify">Colin’s amazing sense of style and design has created some of the most exquisite and beautiful environments ever. We apply our five-senses approach from concept thru completion to ensure that everything you touch, taste, smell, see and hear contributes to an experience that is tastefully executed with the right amount of sophistication and the right amount of wrong. For us everything matters. Colin’s clients say it better than we ever could—<a href="testimonials.html">see for yourself</a>.</p><br /></div>
	<h3>TEAM COWIE</h3>
	<div><p style="text-align:justify">Our team has grown and evolved to become the premiere event design and production company, servicing clients worldwide. We set the benchmark in our industry. <i>Team Cowie</i> provides unparalleled services that are comprised of the most talented, dedicated, creative and passionate individuals with one common goal — ensuring your event is memorable, meaningful and magical.</p>
    <br />
        <p style="text-align:justify">Whether you are planning a wedding, coming-of-age, milestone celebration or corporate gathering our team has mastered the art of blending beauty with business and provide you with one-stop services encompassing almost any aspect of event production.</p><br /></div>
	<h3>CONSULTING</h3>
	<div><p style="text-align:justify">Our Consulting Group provides a scope of services to organizations interested in not just <i>improving</i> the overall customer experience in all areas of hospitality, but interested in creating <i>the</i> experience that helps define and distinguish your brand. We are unique in that we blend multiple touch points, of all five senses, into one singular positive sensation <i>and</i> lasting memory that is designed to support and elevate your brand.</p>
    <br />
        <p style="text-align:justify">We provide insightful evaluations and assessments that deliver turnkey solutions, which are designed to seamlessly integrate with your company’s DNA. Our approach leverages all available resources and blends them with our expertise to help design and build self-sustaining procedures and processes that shape a unique and signature experience.</p><br /></div>
    <h3>FLORAL & DÉCOR</h3>
    <div><p style="text-align:justify">For Floral & Décor clients Colin Cowie Celebrations offers design services that create the overall look and feel of your event. Our involvement is limited to these services; leaving the full coordination and planning we normally provide under the Celebrations banner, to you, or other partners. Let us design the setting, complete with tabletop, floral and lighting for your event.</p></div>
</div>

    
<div class="clr"></div>
<div id="social_icons">
    	<div id="s_icons_pos">
    	<a href="https://www.facebook.com/itsmecolincowie"> <img src="img/social/facebook%402x.png"> </a>
        <a href="https://twitter.com/colincowie"> <img src="img/social/twitter%402x.png"> </a>
    	</div>
    </div>    
    


<noscript>
<div style="display:none;">
<img src="../pixel.quantserve.com/pixel/p-AESZ-fKpcpAtq.gif" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>

        
    
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

	<script src='js/swipe.js'></script>
    <script> var slider3 = new Swipe(document.getElementById('slider3')); </script>
    
 <script>

$( "#accordion" ).accordion({ header: "h3", active: false, collapsible: true });



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#radioset" ).buttonset();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>

	<div class="clr"></div>
    	
	</div>
</div>
</body>
</html>
