<!DOCTYPE html>
<html lang="en">
<head>
<?php include "head.php"; ?>
</head>
<body >

<?php  include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="msg"></div>
            <h1 class="text-center login-title">Sign in to continue</h1>
            <div class="account-wall">
               
                <form class="form-signin" method="post" action="profile.php?id=0">
                <input name="email" type="text" class="form-control" placeholder="Email" required autofocus>
                <input name="pswd" type="password" class="form-control" placeholder="Password" required>
                <?php 
                if(isset($_GET["id"])){
                  if($_GET["id"]==0){
                     echo "<div class='error_msg'>log in to chat</div>";
                   }else if($_GET["id"]==1){
                  echo "<div class='error_msg'>enter correct email or password</div>";
                  }else{
                    ?>
                    <script>

                    $(function(){
                      $(".msg").html('<h1 class="text-center login-title">Regestred successfully...</h1>');
                    });
                    alert();
                    </script>
                    <?php

                  }
                }

                 ?>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
               <!--  <label class="checkbox pull-left">
                   <input type="checkbox" value="remember-me">
                   Remember me
               </label> -->
                </form>
            </div>
            <a href="reg.php" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>
<br>
<br>


   
<?php  include 'footer.php'; ?>

</body>
</html>
