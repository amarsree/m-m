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
      
      <div class="clr"></div>
          <div id="page-sub-inside">   
            <img class="subpage-header-img" src="img/mobile/07-inquiry2.jpg" /> 
          </div>
      
      <div id="page-inside">   
      
    	

      <div class="group section-wrap upper" id="upper">
        <div class="wrap group">
        
        <div class="full-content">
		<div align="left">
		<?php
		if(!isset($_GET['id']))
		{
			?>
<h1 style="text-align:justify">please enter your details</h1>
		<table align="center" border='1' >
<form method="post" action="reg.php?id=0">
		<tr>
        <td >First Name <font color="#FF0000"></font></td>
        </tr>
        <tr>
        <td><input type="text" name="fname"  id="fname"/></td>
        </tr>
		
		<tr>
        <td >Last Name <font color="#FF0000"></font></td>
        </tr>
        <tr>
        <td><input type="text" name="lname"  id="lname"/></td>
        </tr>
		
		<tr>
        <td >Email <font color="#FF0000"></font></td>
        </tr>
        <tr>
        <td><input type="text" name="email"  id="email"/></td>
        </tr>
		
		<tr>
        <td >Password<font color="#FF0000"></font></td>
        </tr>
        <tr>
        <td><input type="password" name="pswd"  id="pswd"/></td>
        </tr>
		
		<tr>
        <td >re-enter password<font color="#FF0000"></font></td>
        </tr>
        <tr>
        <td><input type="password" name="pswd1" id="pswd1"/></td>
        </tr>
		<tr>
        <td >Birthday<font color="#FF0000"></font></td>
        </tr>
		<tr>
		<td>
		<select name="day" id="day">
		<?php 
			for ($i=1;$i<=31;$i++)
			{
		echo '<option value="'.$i.'">'.$i.'</option>"';
			}
			 ?>
		</select>
<select  name="month" id="month">
<option value="01" selected="1">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sept</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>

<select  name="year" id="year">
<?php for($i=1960;$i<=2005;$i++)
{
echo '<option value="'.$i.'">'.$i.'</option>';
}
 ?>	
</select>
        <tr>
        <td id="mno">Mobile <font color="#FF0000"></font></td>
        </tr>
        <tr>
        <td><input type="text" name="mno"  id="mno"/></td>
        </tr>
		
        <tr>
        <td align='center'><input type="submit" id="send-button" value="submit"/></td>
        </tr>
          </form>
		</table>
			</div>
        </div>
      
        
        </div> 
    </div> 
	<?php
		}
		
		else
		{
		?>
<!---		<h1><strong><color>you are regestred successfully....!</color></strong></h1>
		<h1><strong><color>please log in....!</color></strong></h1>
		
	--->	
		
		
		<?php 
	echo $fname=$_POST['fname'];
	echo	$lname=$_POST['lname'];
	echo	$email=$_POST['email'];
	echo	$pswd=$_POST['pswd'];
		
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];
	echo	$dob=$year."-".$month."-".$day;
		
	echo	$mno=$_POST['mno'];
		
		include "dbconn.php";
		mysqli_query($conn,"insert into reg (fname,lname,email,pswd,mno,dob) values('$fname','$lname','$email','$pswd','$mno','$dob')");
		
		
		?>
		
		
			<form method="post" class="form" action="login_succ.php">
		<table border="0" align="center">
        <tr>
        <td id="email">Email <font color="#FF0000"></font></td>
        </tr>
        <tr>
        <td><input type="text" name="email"  id="email" /></td>
        </tr>
		
		<tr>
        <td id="label">Password <font color="#FF0000"></font></td>
        </tr>
        <tr>
        <td><input type="password" name="pswd"  id="pswd"/></td>
        </tr>
		
        <tr>
        <td  align='center'><input type="submit" id="send-button"  value="login"></td>
        </tr>
		</table>
          </form>
		
		<?php 
		}
		?>
<div class="clr"></div>

<div id="social_icons">
    	<div id="s_icons_pos">
    	<a href="https://www.facebook.com/itsmecolincowie"> <img src="img/social/facebook%402x.png"> </a>
        <a href="https://twitter.com/colincowie"> <img src="img/social/twitter%402x.png"> </a>
    	</div>
    </div>    

<!-- Quantcast Tag -->

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
        
        <script type="text/javascript" src="js/jquery.validate.html"></script>
    <script src="slider/modernizr.js"></script>
    <script src="slider/jquery.refineslide.js"></script>
	</div>
	</div>
	</div>
	</div>
		<script src="js/classie.js"></script>
		<script src="js/sidebarEffects.js"></script>   
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
