<?php
$conn = mysqli_connect("localhost","mini_user","pass@123","chat");
//$conn = mysqli_connect("localhost","mini_user","pass@123","chat");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>