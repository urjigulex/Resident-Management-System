
<?php
include('dbcon.php');

?>

<!DOCTYPE html>

<html>
<head>
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/mu.css" type="text/css">
	<!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<!-- icon -->
	

	<title>Online Kebele  resident Managmenet System </title>
	<style>
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 70%;
			margin: auto;
		}
	</style>
	<script type="text/JavaScript">

 var count = 0;
  function member() {
    if (parent.count ==0) {
       document.parent.src = "img/3.jpg";
	 title="evahotel build";
       count = 1;
    }
     else if (parent.count ==1) {

       document.parent.src = "img/90.jpg";
       count = 2;
    }
 else if(parent.count ==2) {
       document.parent.src = "img/4.jpg";
       count = 3;
    }
 else if(parent.count ==3) {
       document.parent.src = "img/sal.jpg";
       count = 4;
    }
 else if(parent.count ==4) {
       document.parent.src = "img/gr.jpg";
       count = 5;
    }
 else if(parent.count ==5) {
       document.parent.src = "img/49.jpg";
       count = 6;
    }

 else {
 document.parent.src = "img/af.jpg";
       count = 0;

}
    setTimeout("member()", 3000);
  }
</script>

</head>
<body onload="parent.member()" onload="noBack();" onpageshow="if(event.persisted) noBack(); ">
		
	<nav class="navbar navbar-default">
		<div class="container-fluid" >
			<!-- Brand and toggle get grouped for better mobile display -->
			

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div id="site_title"><h3 id="hheader"style="margin-left:100;font-size:30px;font-family: Black;" bgcolor="purple" ><br/><b><span style="font-size:50px;"><br/></b>
			
				<div id="tooplate_wrapper">


	  <div id="site_title">
              <div class="row">
                    <div class="col-lg-3 ">
                        <img src="photo/flag.PNG"height="100" width="350" alt="left"/>
                    </div>
	
                    <div class="col-lg-6 ">                     
                        <img src="photo/bta.PNG"height="100" width="585" alt=""/>
                    </div>
			
                    <div class="col-lg-3">
                        <img src="photo/et.PNG"height="100" width="270" alt=""/>
                    </div>
                </div>
			
				
				
				<br>
				
				<table border="0" width="1000"  bgcolor="purple" cellspacing="50" >
				<tr>
			
  <td id="dropdown" colspan="30">
<br/>
<li><b><a href="loginindex.php">Home </a></li>   
<li><a href="ab.php">About Us</a></li>
<li><a href="contacts.php">Contact us</a></li>
<li><a href="help2.php">Help</a></li>
<li><a href="comment.php">Feedback</a></li>
<li><a href="userindex.php">service</a></li>
<li><a href="developers.php">developers</a></li>
<li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-menu" style="margin-top: 6px;">Log in </button><br/>
 <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</li>
</li>
 </td>
 </tr>
 
 <td><img src="img/2.jpg" width="1100" height="300" name="parent"/></td>
 
 
 </table> 
 

				</div>	
				</div>
				</h3>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="modal-menu">
					<div class="modal-dialog modal-md">
						<div class="modal-content">
							<!-- modal header -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3>Choose Account Type: </h3>
							</div>
							<!-- modal body -->
							<div class="modal-body">
							
								<ul class="nav nav-pills">
								<li><a data-toggle="pill" href="#menu1">Admin</a></li>
								<li><a data-toggle="pill" href="#menu2">Clerk</a></li>
			
									
								</ul>
								
								<div class="tab-content">
								<!-- Admin -->
									<div id="menu1" class="tab-pane fade">
										<h3>Admin</h3>
										<form action="index.php"method="post">
											<div class="form-group">
												<input type="text" class="form-control" name="user" placeholder="Username" required >
											
											</div>											<div class="form-group">
												<input type="password" class="form-control" name="pass" placeholder="Password" required>
											</div>
											<div class="form-group">
											<input type="submit" class="btn btn-block btn-primary " title="Log In" name="login" value="Login"></input>
											
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
												 
											</div>
											
												 <ul> <li class="active"><a href="change_password.php">forget password</a></li> </ul>
										
											 
										</form>
										
										<?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:index1.php');
					
				}
			
			else{?>
			
					<script>
					alert("Invalid Username and Password Combination");
					</script>
					<?php
				}
		}
  ?>
 
 
									</div>
									
									
									<!-- clark -->
									<div id="menu2" class="tab-pane fade" >
										<h3>clerk</h3>
										<form action="index.php"method="post">
											<div class="form-group">
												<input type="text" class="form-control" name="user" placeholder="Username"required>
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="pass" placeholder="Password"required>
											</div>
											<div class="form-group">
											<input type="submit" class="btn btn-block btn-primary" title="Log In" name="login" value="Login"></input>
												<button class="btn btn-block btn-danger ">Cancel</button>
											</div>
										</form>
										<?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:clarkindex.php');
					
				}
			
			
		}
  ?>
 
									</div>
									
									
									
										
									
									<!-- user -->
									
									</div>
								
								
								
								
								
								
									</div>
								</div>
							</div>
						</div>
			</div>
					
			</div>	

			
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 

            
                <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet" type="text/css"/> 

               
                <link href="css/justified-nav.css" rel="stylesheet" type="text/css"/>
                <link href="css/carousel.css" rel="stylesheet" type="text/css"/>

                
               
				
			
				<!-- Modal -->
				<div class="modal fade" id="modal-create">
					<div class="modal-dialog modal-md">
						<div class="modal-content">
							<!-- modal header -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3>Create New Account</h3>
							</div>
							<!-- modal body -->
							<div class="modal-body">
								<ul class="nav nav-pills">
									
									<li class="active"><a  href="supmodal_add.php"> User </a></li>
																	

								</ul>
								<div class="tab-content">
								<!-- Admin -->
									<div id="menu1" class="tab-pane fade">
										<h3>User</h3>
										<form method="post">
											<div class="form-group">
												<input type="text" class="form-control" name="username" placeholder="Username">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="password" placeholder="Password">
											</div>
											<div class="form-group">
												<button class="btn btn-block btn-primary signin-button-admin">Create Account</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
											</div>
										</form>
									</div>
				</div> <!-- ENNNNNNNNNND MODAL-->				

			</div><link rel="stylesheet" href="css/mu.css" type="text/css"><!--/.navbar-collapse -->
		</div><!-- /.container-fluid -->
		</div>
		</div>
		</div>
		
				
	</nav>

	<div class="container">
		<!-- carousel -->
	<!--	<div class="row">-->
			<!--<div id="myCarousel" class="carousel slide" data-ride="carousel" style="padding:20px 20px 20px 20px;">
				 Indicators -->
				<!--<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>-->

				<!-- Wrapper for slides -->
				<!--<div id="tooplate_main" class="shadow">


	  <div id="site_title">
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/gr.jpg" alt="Chania" width="460" height="200">
					</div>

					<div class="item">
						<img src="img/h.jpg" alt="Chania" width="460" height="200">
					</div>

					<div class="item">
						<img src="img/c.jpg" alt="Flower" width="400" height="50">
					</div>

					<div class="item">
						<img src="img/sal.jpg" alt="Flower" width="460" height="200">
					</div>
				</div>
				</div>
				</div>
-->
				<!-- Left and right controls -->
				<!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="icon-prev" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="icon-next" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>-->
		<div id="tooplate_menu" class="menu1">
		 <div id="tooplate_main" class="shadow">
		<div class="row"> 
			<div class="col-md-7 mv">
				<center><h3>Mission</h3></center>
				<p style="font-family:comic sans ms">
				<font size="4px">
				The implementation of technology influences the values of a society by changing expectations and realities. 
				Technology often enables organizational and bureaucratic group structures that otherwise and here to fore were simply not possible. 
				<p style="font-family:comic sans ms">
				Our group would like to contribute in the Automation system advantages of the Government of Ethiopia by proposing and implementing a management system for Kebele System.</p> 
				</div>
			<div class="col-md-5 mv">
				<center><h3>Vision</h3></center>
				<p style="font-family:comic sans ms">Our Vision is to develop an automated kebele management system  and serve the people in Excellence, Competence, and Wel Educational Leadership in Science and Technology.</p>
				</font></div>
			</div>
		</div>  
		<script src="js/jquery-1.12.1.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script>
			$('.carousel').carousel({
        interval: 3000 //changes the speed
    })
</script>

				
<div id="tooplate_footer_wrapper">
	<center>
        <div id="tooplate_copyright">
		<a href="http://youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © Online Kebele Management System 2010/2018</b>	
		</div>
		</center>
	</div>
</div> 	</div><!-- end of wrapper -->
</body>
</html>