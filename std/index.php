<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'head.php'; ?>
</head>

<body>

   <?php include 'nav.php'; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <?php include 'filters.php'; ?>

          <?php include 'carousel.php'; ?>
                <div class="row">
<?php
include 'dbconn.php';
//include 'display.php';
//$rset = mysqli_query($conn, "SELECT * FROM rooms  ORDER BY rid LIMIT 8 OFFSET $pno;");

//$rset = mysqli_query($conn, "SELECT * FROM rooms  ORDER BY rid;");
            
// display cide comes here

?>
<div class="display">



    

</div>
                  
<!--                     <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>
 -->
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
