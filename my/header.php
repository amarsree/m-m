    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="index.php">M$M</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            
            
        <!--  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                   <li><a href="#">Surprises</a></li>
                   <li><a href="#">Destination Surprises</a></li>
                   <li><a href="#">Event Planner</a></li>
                   <li role="separator" class="divider"></li>
                   <li class="dropdown-header">Nav header</li>
                   <li><a href="#">Candle light dinner</a></li>
                   <li><a href="#">Delivery</a></li>
                   <li><a href="#">Customise</a></li>
                   <li><a href="#">pranks</a></li>
                 </ul> 
              </li>-->
              <li><a href="services.php">Services</a></li>
            <li><a href="about us.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            </li>
     
          </ul>

          <ul class="nav navbar-nav navbar-right"><?php 
        if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
            if(isset($_SESSION['fname'])){
             echo "<li><a href='profile.php'>".$_SESSION['fname']."</a></li>";
             echo "<li><a href='logout.php'>Logout</a></li>";


            }else{
              session_destroy();
              ?>
       <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
          <ul id="login-dp" class="dropdown-menu">
          
          

            <li>
               <div class="row">
                  <div class="col-md-12">
                    Login via
                    <div class="social-buttons">
                      <a href="fblogin/fbconfig.php" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                      <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                    </div>
                                    or
                     <form class="form" role="form" method="post" action="profile.php?id=0" accept-charset="UTF-8" id="login-nav">
                        <div class="form-group">
                           <label class="sr-only" for="exampleInputEmail2">Email address</label>
                           <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                        </div>
                        <div class="form-group">
                           <label class="sr-only" for="exampleInputPassword2">Password</label>
                           <input name="pswd" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                 <div class="help-block text-right"><a href="forget.php">Forget the password ?</a></div>
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input type="checkbox"> keep me logged-in
                           </label>
                        </div>
                     </form>
                  </div>
                  <div class="bottom text-center">
                    New here ? <a href="reg.php"><b>Join Us</b></a>
                  </div>
               </div>
            </li>
          </ul>
            </li>




              <?php

            }
          ?>
          
            
      
          </ul>
        </div>
      </div>
    </nav>