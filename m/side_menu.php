 <div id="st-container" class="st-container">
		<div class="st-pusher">
<!-- side menue items-->

			<nav class="st-menu st-effect-3" id="menu-3">
				<ul class="nav-style">
					<li>  
					</li>
                     <li class="home-ico"><a href="index.php">Home</a></li>
                     <li class="port-ico"><a href="surprises.php">Surprises</a></li>
                     <li class="serv-ico"><a href="Destination_Surprises.php"> Destination Surprises</a></li>
                     <li class="typo-ico"><a href="Event_Planner.php">Event Planner</a></li>
                     <li class="serv-ico"><a href="Candle_light_dinner.php">Candle light dinner</a></li>
                     <li class="abus-ico"><a href="pranks.php">pranks</a></li>
                     <li class="serv-ico"><a href="Delivery.php">Delivery</a></li>
                     <li class="typo-ico"><a href="Customise.php">Customise</a></li>
                     <li class="logi-ico">
					 <?php
					 if ((function_exists('session_status') 
  && session_status() !== PHP_SESSION_ACTIVE) || !session_id()) 
						  {
						  session_start();
							}
					if(isset($_SESSION['email']) && isset($_SESSION['fname']))
								{
					?>
								 <a href="profile.php">profile</a></li>
								<?php
								}
									else
												{
								?>
												 <a href="login.php">login</a></li>
												<?php 
												} 
												?>
					<li class="logi-ico"> <a href="logout.php">logout</a></li>
				<li class="serv-ico"><a href="chat.php">chat with us</a></li>			  



		<!--<li class="gall-ico"><a href="gallery.html">Our Work</a></li>
                     <li class="abme-ico"><a href="about.html">About Colin</a></li>
                     <li class="abus-ico"><a href="philanthropy.html">Philanthropy</a></li>
                     <li class="camera-ico"><a href="http://www.colincowieweddings.com/" target="_blank">Inspiration</a></li>
                     <li class="mail-ico"><a href="event-inquiry.html">Event Inquiry</a></li>
                     <li class="mail-ico"><a href="contact.html">Contact</a></li>                  
                    --> 
				</ul>
			
			</nav>
			
<div class="st-content">
		<div class="st-content-inner">
			<div id="page-content">
	
    <div id="top-navigation">
		        <div id="st-trigger-effects" class="column"> <button data-effect="st-effect-3" id="mobile_bar"> </button> </div>
       <a href="index.php"><div class="logo"></div></a> </td></tr>
		</table>
    </div>
