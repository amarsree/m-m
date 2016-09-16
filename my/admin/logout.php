<?php include 'acces_check.php'; 
session_destroy();
header('location: index.php');
?>