<?php
//start
session_start();
error_reporting(0);


$name= filter_input(INPUT_POST,'name');
$email= filter_input(INPUT_POST,'email');
$category= filter_input(INPUT_POST,'category');
$priority= filter_input(INPUT_POST,'priority');
$message= filter_input(INPUT_POST,'message');
$copy= filter_input(INPUT_POST,'copy');
$human= filter_input(INPUT_POST,'human');


$host = 'localhost';
$dbusername = 'root';
$dbpassword = 'software';
$dbname = 'musingu';
//connection
$con=mysqli_connect("localhost", "root", "software", "musingu");
if(mysqli_connect_errno()){
 echo "Connection Fail".mysqli_connect_error();
 }
 else{

$sql="INSERT INTO contact(name,email,category,priority,message,copy,human)
values('$name','$email','$category','$priority','$message','$copy','$human')";
if($con->query($sql)){
 echo "<script type='text/javascript'>alert('Thank you $name for your suggestions and feedback ');</script>";
 
 
 echo include_once('index.html');
}
else{
 echo"error:".sql."<br>".$con->error;
}

 }

 $con->close();

  ?>