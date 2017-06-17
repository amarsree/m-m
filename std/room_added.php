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
           

         <div class="row">
             
<center><h1>your room is added to our data base</h1>

<br>
<h2>Thanks for heping in finding rooms</h2> 
<?php  
$lname= $_POST['lname'];
$rent= $_POST['rent'];
$total = $_POST['total'];
$status= $_POST['status'];
$for_g= $_POST['for'];
$discription= $_POST['discription'];
$conditions = $_POST['conditions'];
$about_owner = $_POST['about_owner'];
$contact= $_POST['contact'];


include "dbconn.php";
        mysqli_query($conn,"insert into rooms(lname,rent,total,status,for_g,discription,conditions,About_owner,contact) values('$lname','$rent','$total', '$status','$for_g','$discription','$conditions','$about_owner','$contact')"); 
 
// image upload code
class fileing 
{
  
  function upload()
    {
      $name = $_FILES['file']['name'];
      $type = $_FILES['file']['type'];
      $tmp = $_FILES['file']['tmp_name'];
      $size = $_FILES['file']['size'];

      $dir = "uploads/"; //Create a folder named "uploads" and give write permission (chmod 777 uploads)
include "dbconn.php";
 $rset = mysqli_query($conn, "select max(rid) as mx from rooms");   
//$rset = mysqli_query($conn,"SELECT max(rid) FROM as rmax rooms");
$row = mysqli_fetch_array($rset);
     $rid=$row['mx'];
//echo $row['mx'];

      $filepath = "uploads/".$rid.".jpg";
/* inserting  path to database*/
mysqli_query($conn,"insert into img(rid,img1,img2,img3,img4,img5) values('$rid','$filepath')"); echo("insert into img(rid,img1,img2,img3,img4,img5) values('$rid','$filepath')");
 

      //echo $type."<br>".$size."<br>".$filepath;
      $validsize = 1000000; //Change this number to increase or decrease the file size limit
    
      if($size <= $validsize) 
        {
          if(move_uploaded_file($tmp, $filepath))
            {
              // echo "$name is uploaded into $dir";
            }
          else
            {
               echo " Not uploaded";
            }
        }
      else
        {
          echo "File size has to be less than $validsize";
        }
  } 
}

if(isset($_FILES['file'])) 
  {
    $fu = new fileing;
    $fu->upload();
  }




 


?>

</center>



         </div>

                   
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
