<?php
//$conn = mysqli_connect("localhost","mini_user","pass@123","m\$m");
$conn = mysqli_connect("localhost","root","","stdroom");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>