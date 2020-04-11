<?php
session_start();
include('dbconnection.php');

if(isset($_POST['login']))
{
$regno=$_POST['regno']; 
$password=$_POST['password'];
$signin=mysqli_query($con,"SELECT * FROM alumini WHERE regno='$regno' and password='$password'");
$success=mysqli_fetch_array($signin);
if($success>0)
    {
        
  $extra="editprofile.php";
  $_SESSION['login']=$_POST['regno'];
  $_SESSION['id']=$success['regno'];
 $host=$_SERVER['HTTP_HOST'];
  $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
  header("location:http://$host$uri/$extra");

 } 
   
else
{
    $_SESSION['msg']="regno or Password";
 

    
}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
</head>
<body>
	<div id="myModal2"class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
<form name="Login" action="" id="register" method="POST">
 <fieldset>
     <legend>Login Here</legend>
            
    <ol>
    
        
        <li>
            <label for="regno">regno</label>
            <input type="text" name="regno" required placeholder="regno">
        </li>
        <li>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" required>
        </li>    
			<input type="submit" name="login" value="LOG IN" >
									
     </ol>
        
        
  </fieldset>
</form>
	</div>
	</div>
</body>
</html>