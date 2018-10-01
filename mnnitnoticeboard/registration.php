<?php 
require('connection.php');
extract($_POST);
if(isset($save))
{
	
	$p=$conn->real_escape_string($_POST['p']);
	$cp=$conn->real_escape_string($_POST['cp']);
	if($p!=$cp)
	$err="<font color='red'>Please check your inputs!</font>";
//check user alereay exists or not
else
{
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);

//upload image
mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);



$err="<font color='blue'>Registration successfull !!</font>";

}
}
}



?>
 <div id="container2">

		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><h3><a href="index.php?option=New_admin" style="color:red">Click here to register yourself as an admin</a></h3></Td>
	</Tr><Tr>
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
					<td>Enter Your Password<br/><p>(must contain 8 or more characters that are of at least one number,<br/> and one uppercase and lowercase letter)</p> </td>
					<Td><input type="password"  class="form-control" name="p" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/></td>
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
					<td>Choose Your hobbies</td>
					<Td>
					Reading<input value="reading" type="checkbox" name="hob[]"/>
					Singing<input value="singing" type="checkbox" name="hob[]"/>
					
					Playing<input value="playing" type="checkbox" name="hob[]"/>
					</td>
				</tr>
				
				
				<tr>
					<td>Upload  Your Image </td>
					<Td><input class="form-control" type="file" name="img" required/></td>
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
<input type="submit" class="btn btn-info" value="Save" name="save"/>
<input type="reset" class="btn btn-info" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	</div>	
	</body>
</html>