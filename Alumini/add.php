<?php
require_once('db.php');

$fname= $_POST['fname'];
$mname= $_POST['mname'];
$lname= $_POST['lname'];
$address= $_POST['address'];
$email= $_POST['email'];
$regno= $_POST['regno'];
$year= $_POST['year'];
$dob= $_POST['dob'];
$occupation= $_POST['occupation'];
$username= $_POST['username'];
$password= $_POST['password'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO student (fname, mname, lname, address, email,regno,year,dob,occupation,username,password)
VALUES ('$fname', '$mname', '$lname', '$address', '$email','$regno','$year','$dob','$occupation','$username','$password')";

$conn->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='index.php'</script>";
?>