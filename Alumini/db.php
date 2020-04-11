<?php 

$conn = new PDO('mysql:host=localhost; dbname=musingu','root', 'software'); 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>