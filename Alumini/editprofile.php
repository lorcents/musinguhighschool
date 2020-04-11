<?php
session_start();

include('dbconnection.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:Alumni.html');
}
else{

if(isset($_POST['update']))
{
    $newfirst_name=$_POST['first_name'];
    $newlast_name=$_POST['last_name'];
	$newregno=$_POST['regno'];
    $newyear=$_POST['year'];
    $newemail=$_POST['email'];
    
    $newdob=$_POST['dob'];
    $newaddress=$_POST['address'];
    $newoccupation=$_POST['occupation'];
    
    $image=$_FILES["image"]["name"];
    $newusername=$_POST['username'];
    $newpassword=$_POST['password'];
    move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);	


 $edit=mysqli_query($con,"UPDATE  alumini set first_name='$newfirst_name', last_name='$newlast_name',
  year='$newyear',email='$newemail',dob='$newdob', address='$newaddress', occupation='$newoccupation',
    image='$image',username='$newusername',password='$newpassword' 
   WHERE regno='".$_SESSION['login']."'");
if($edit){
 $_SESSION['msg']="Your Profile has been successfully Updated !!";
}
else{
    $_SESSION['msg']="Your Profile has not been Updated Something went wrong";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Edit My Profile</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <link href="materialize.css" type="text/css" rel="stylesheet"/>
    
</head>
<body>


        <h1> Alumni Profile</h1> 
        
	

		
		<font color="blue" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>       
<?php $details=mysqli_query($con,"SELECT * from alumini  WHERE regno='".$_SESSION['login']."'");
$count=1;
while($row=mysqli_fetch_array($details)){
?>

<div class="header">
Welcome <?php echo htmlentities($row['username']);?> to Your Profile
  <a href="logout.php"><p style="color: red">logout</p></a>
</div>
<form  name="detailedit" method="post"  enctype="multipart/form-data">

Hello <?php echo htmlentities($row['first_name']);?> <?php echo htmlentities($row['last_name']);?> Update Your details Here</legend>
        <hr>
    <ol>
    <li>
            <label for="Photo">image</label>
            <img src="uploads/<?php echo $row['image_location']; ?>" width="30%" height=30%>
            <p> Edit Photo</p>
            <input type="file" name="image" value= "<?php echo htmlentities($row['image']);?>"   required>
            </li>
        <li>
            <label for="name">First Name</label>
            <input type="text" name="name" required value= "<?php echo htmlentities($row['first_name']);?>" required ></li>  
            <li>
            <label for="name">Second  Name</label>
            <input type="text" name="last_name" required value= "<?php echo htmlentities($row['last_name']);?>" required ></li>           
            
        </li>  
            <li>
            <label for="admissionnumber"> Admission Number</label>
            <input type="number" name="regno"   required value= "<?php echo htmlentities($row['regno']);?>" readonly required >         
        </li>
        
            <li>
            <label for="yearofcompletion">Year of Completion</label>
            <input type="date" name="year"  value= "<?php echo htmlentities($row['year']);?>"   required>
            
            </li>
            <li>
            <label for="Email">House</label>
            <input type="email" name="email" value= "<?php echo htmlentities($row['email']);?>"  >
            </li>
            <li>
            <label for="dateofbirth">Date of Birth</label>
            <input type="date" name="dob" value= "<?php echo htmlentities($row['dob']);?>"  required>
            </li>
            <li>
            <label for="town">Current Town Of Residence</label>
            <input type="text" name="address" value= "<?php echo htmlentities($row['address']);?>" required        </li>
            <li>
            <label for="Occupation">Occupation</label>
            <input type="text" name="occupation" value= "<?php echo htmlentities($row['occupation']);?>"required        </li>
            
            

            <li>
            <label for="username">Username</label>
            <input type="text" name="username" value= "<?php echo htmlentities($row['username']);?>" required        </li>
            <li>
            <label for="password">Password</label>
            <input type="password" class="text" value="" name="password" required>
            </li>
            
            <input type="submit" name="update"  value="Update" >
     </ol>
        
        
     <?php
  $count=$count+1;
  }?>       
    
    <font color="blue" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
</form>
						

	

	
    
</body>
</html>
<?php } ?>