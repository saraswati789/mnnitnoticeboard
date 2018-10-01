<?php 
require('connection.php');

extract($_POST);
if(isset($save))
{
	
	$p=$conn->real_escape_string($_POST['p']);
	$cp=$conn->real_escape_string($_POST['cp']);
	if($p!=$cp)
	$err="<font color='red'>Please check your inputs!</font>";
//check admin already exists or not
else
{
	$sql=mysqli_query($conn,"select * from admins where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This admin already exists</font>";
}

else
{
	
//dob
$dob=$yy."-".$mm."-".$dd;

//subject
//$sub=implode($sub);

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into admins values('','$n','$e','$pass','$mob','$gen','$dep','$imageName','$dob',now())";
mysqli_query($conn,$query);

//upload image


move_uploaded_file($_FILES['img']['tmp_name'],"Admin_images/".$_FILES['img']['name']);

$err="<font color='red'>Registration successful!!</font>";



}
}

}


?>
<div id="container2">

		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><h3><a href="index.php?option=New_admin" style="color:#252702">Admin Registration Form</a></h3></Td>
	</Tr>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your name</td>
					<Td><input  type="text"  class="form-control" name="n" required/></td>
				</tr>
				<tr>
					<td>Enter Your email </td>
					<Td><input type="email"  class="form-control" name="e" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Password :<br/><p>(must contain 8 or more characters that are of at least one number,<br/> and one uppercase and lowercase letter)</p></td>
					<Td><input type="password"  class="form-control"  name="p" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/></td>
				</tr>
			<tr>
					<td>Confirm Your Password </td>
					<Td><input type="password"  class="form-control"  name="cp" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Mobile </td>
					<Td><input  class="form-control" type="tel" pattern="^([+][9][1]|[9][1]|[0]){0,1}([7-9]{1})([0-9]{9})$" name="mob" required/></td>
				</tr>
				
				<tr>
					<td>Select Your Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="m" required/>
				Female<input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
				
				<tr>
					<td>Choose Your Department</td>
					<Td>
					DEAN<input value="DEAN" type="radio" name="dep"/>
					HOSTEL<input value="HOSTEL" type="radio" name="dep"/>
					
					STUDENT WELFARE<input value="STUDENT WELFARE" type="radio" name="dep"/>
					TPO<input value="TPO" type="radio" name="dep"/>
					ECELL<input value="ECELL" type="radio" name="dep"/>
					</td>
				</tr>
				
				
				<tr>
					<td>Upload  Your Image </td>
					<Td><input type="file" class="form-control" name="img" accept="image/*" required /></td>
				</tr>
				
				<tr>
					<td>Enter Your DOB</td>
					<Td>
					<select name="yy" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="dd" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-info" value="Submit" name="save"/>
<input type="reset" class="btn btn-info" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
		</div>
	</body>
</html>