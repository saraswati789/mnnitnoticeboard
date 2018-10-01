<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>

		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
  <style>
  
	  

#container1 {
  margin: 0 auto;
  margin-top: 50px;
	width:100%;
  height:auto;
  background: rgba(7,46,6,0.8)   ;
 
  border: 20px solid #ccc;
  box-shadow: 1px 1px 2px #fff inset,
              -1px -1px 2px #fff inset;
  border-radius: 3px/6px;         
    
    
}
#container2 {
  margin: 0 auto;
width:100%;
  height:auto;
  background:#B5E1E5  ;
 
 background-image: linear-gradient(-90deg,#172954, #B5E1E5); 
 border: 20px solid #ccc;
  box-shadow: 1px 1px 2px #fff inset,
              -1px -1px 2px #fff inset;
  border-radius: 3px/6px;  
    
}


</style>
 
	</head>
	<body>
	<h4>
	<nav class="navbar navbar-inverse navbar-fixed-top" style="background:#246268  ">
  <div class="container-fluid">
  	<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
  <div class="collapse navbar-collapse" id="myNavbar">
  <ul class="nav navbar-nav navbar-left">
    <li ><a href="index.php"><strong>Home</strong></a></li>
      
	  
	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
   
   
	
	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
	
	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>


</div>
</div>
</nav>	



  <div id="container1">
          
  <img src="board.jpg"  alt="MNNIT NOTICE BOARD" class="responsive" width="100%" height="350"> 
</div>



<div>
	<div class="row">
	<!-- container -->
		<div class="col-sm-12">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
			else if($opt=="New_admin")
			{
				include('admin_registration.php');
			}
			else if($opt=="admin_login")
			{
				include('admin_login.php');
			}
		

		}
		else
		{
		echo "<center><div id='container2'><b><h3><font color='#FF5733'>WELCOME TO OUR NOTICE BOARD</font></b>
		<br><br><br><font color='#FFC300'><b>Here you can get all the notices regarding your departments at one place.</b></font><BR><br><br>
		<font color='#252702'><b>Please sign up to view the important notices or sign in if u already have an account.</b></font></h3></div></center>";
		}
		?>
		
		
		
		
		</div>
	<!-- container -->
		
		
	</div>

</div>





<!-- footer-->


			<nav class="navbar navbar-inverse navbar-bottom" style="background:#246268">
  
  
  <ul class="nav navbar-nav navbar-center">
    
		 <li><p style="color:white;">Copyright &copy; TANSARAS 2018,MNNIT ALLAHABAD(All Rights Reserved)</p></li>
      
	</ul>





  <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</nav>

<!-- footer-->
</h4>
	</body>
</html>