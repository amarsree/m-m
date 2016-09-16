<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >

<?php  include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue</h1>
            <div class="account-wall">
               
                <form class="form-signin" method="post" action="profile.php?id=0">
                <input name="email" type="text" class="form-control" placeholder="Email" required autofocus>
                <input name="pswd" type="password" class="form-control" placeholder="Password" required>
                <?php 
                if(isset($_GET["id"])){
                  echo "<div class='error_msg'>enter correct email or password</div>";
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
