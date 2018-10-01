  <div id="container2">
<br/><br/>
<form action="#" id="form" method="post" name="form">
	<div class="row">
		<div class="col-md-8">
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	<center>
	<div class="row">
		<div class="col-sm-4">Enter Your Name:</div>
		<div class="col-sm-5">
		<input type="text" name="vname" class="form-control"/></div>
	</div>
	<br/>
	<div class="row">
	
		<div class="col-sm-4">Enter Your Email:</div>
		<div class="col-sm-5">
		<input type="email" name="vemail" class="form-control"/></div>
		
	</div>
	<br/>
	
	
	<div class="row">
		<div class="col-sm-4">Enter Your Message:</div>
		<div class="col-sm-5">
		<textarea name="msg" placeholder="Type your text here..."></textarea></div>
	</div>
	<br/>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input class="btn btn-danger" name="submit" type="submit" value="Send Query">
		
		</div>
		
	</div>
	</center>
		
		</div>
		<font color="white">
		<div class="col-md-4">
		<h2>Contact us</h2>
		
		Name: Tanisha/Saraswati <br/>
		Mobile: 9792539541<br/>
		Email:tansaras@gmail.com<br/>

		</div>
		</font>
	</div>
	
	
</form>	
<h3><?php include "secure_email_code.php"?></h3>
</div>