	    <!-- Button to trigger modal -->
					<a class="btn btn-primary" href="#myModal" data-toggle="modal">Sign Up</a>
					<a class="btn btn-primary" href="#myModal2" data-toggle="modal">log in</a>
				
	<br>
	<br>
	<br>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">

<h3 id="myModalLabel">Sign Up</h3>
</div>
<div class="modal-body">
<form method="post" action="upload.php"  enctype="multipart/form-data">
<table class="table1">
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">FirstName</label></td>
		<td width="30"></td>
		<td><input type="text" name="first_name" placeholder="FirstName" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">LastName</label></td>
		<td width="30"></td>
		<td><input type="text" name="last_name" placeholder="LastName" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Email</label></td>
		<td width="30"></td>
		<td><input type="email" name="email" placeholder="Email" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Current Residense</label></td>
		<td width="30"></td>
		<td><input type="text" name="address" placeholder="Current Town" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">REG Number</label></td>
		<td width="30"></td>
		<td><input type="text" name="regno" placeholder="reg no" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Year of completion</label></td>
		<td width="30"></td>
		<td><input type="date" name="year" placeholder="KCSE year" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Date of birth</label></td>
		<td width="30"></td>
		<td><input type="date" name="dob" placeholder="" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Occupation</label></td>
		<td width="30"></td>
		<td><input type="text" name="occupation" placeholder="proffession" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Username</label></td>
		<td width="30"></td>
		<td><input type="text" name="username" placeholder="username" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Password</label></td>
		<td width="30"></td>
		<td><input type="password" name="password" placeholder="password" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Select your Image</label></td>
		<td width="30"></td>
		<td><input type="file" name="image"></td>
	</tr>
</table>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Sign Up</button>
<hr>
Already have an account<a href="login.php/#myModal2">login</a>
    </div>
</form>
</div>			