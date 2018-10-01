<?php 
extract($_POST);
if(isset($add))
{

	if($details=="" || $sub=="" || $user=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		foreach($user as $v)
		{
mysqli_query($conn,"INSERT INTO `notice` (`notice_id`, `admin`, `user`, `subject`, `Description`, `Date`) VALUES ('', '$dep', '$v', '$sub','$details',now())");
		}
		
		$err="<font color='lime'>Notice added Successfully</font>";	
	}
}

?>
<br/><br/>
<h2>Add New Notice</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Subject</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control"/></div>
	</div>



	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">&nbsp&nbsp&nbsp&nbspEnter Details</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"></textarea></div>
	</div>
	<div>
		<div class="col-sm-4">Enter your department</div>
					<font color='white'><div class="col-sm-5">DEAN<input value="DEAN" type="radio" name="dep"/>
					HOSTEL<input value="HOSTEL" type="radio" name="dep"/>
					
					STUDENT WELFARE<input value="STUDENT WELFARE" type="radio" name="dep"/>
					TPO<input value="TPO" type="radio" name="dep"/>
					ECELL<input value="ECELL" type="radio" name="dep"/></div></font>
	</div><br>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSelect User</div>
		<div class="col-sm-5">
		<select name="user[]" multiple="multiple" class="form-control">
			<?php 
	$sql=mysqli_query($conn,"select name,email from user");
	while($r=mysqli_fetch_array($sql))
	{
		echo "<option value='".$r['email']."'>".$r['name']."</option>";
	}
			?>
		</select>
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Notice" name="add" class="btn btn-info"/>
		<input type="reset" class="btn btn-danger"/>
		</div>
	</div>
</form>	