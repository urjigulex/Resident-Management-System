
<?php 
$session_email="";
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from users where user_id='$session_email'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
<style type="text/css">

div#container
{
   width: 600px;
   position: relative;
   margin-top: 0px;
   margin-left: auto;
   margin-right: auto;
   text-align: left;
}
body
{
   background-color: #FFFFFF;
   background-image:url(images/bg-body.jpg);
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   margin: 0;
   text-align: center;
}
</style>
<html>
<head>
<title> Online Kebele Managment System Clark Homepage</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
</head>
<div id="tooplate_wrapper">
	<div id="tooplate_header">

 <div id="site_title">

                    <div >
                        <img src="images/lo.PNG"align="left"height="100" width="1100"/>
                    </div>

			</div>
    
<div id="tooplate_menu" class="menu1">
	<table border="0" bgcolor="" width="160" align="left">

        <ul>			
                          <li class="active"><a href="index1.php">Home</a></li>
<li class="active"><a href="#">Create Account<img src="images/down.png"></a><ul>	 
<li class="active"><a href="cre.php">Admin</a></li>	
<li class="active"><a href="create.php">Resident</a></li>	
 <li class="active"><a href="creat.php">Clark</a></li></ul>
                            </li>
	 <li>
                  <a href="#.php">Manage Users<img src="images/down.png"></a>
                  <ul>
                     	<li class="active"><a href="mancla.php">CLark</a></li>		
                         <li class="active"><a href="manres.php">Resident</a></li>

					
                                 </ul>

	 </li>
			
	
						 <li>
                  <a href="#.php">View <img src="images/down.png"></a>
                  <ul>
                     	<li class="active"><a href="viewmessage.php">Message</a></li>		
                         <li class="active"><a href="commessage.php">View Request</a></li>
<li class="active"><a href="comreport.php">view Report</a></li>
<li class="active"><a href="comindex1.php">View Feedback</a></li>
<li class="active"><a href="viewpop.php">View Resident info</a></li>
					
                                 </ul>



<li class="active"><a href="smcl.php">Send Message</a></li>

                            </li>

	

							 <li class="active"><a href="change_password.php">change password</a></li>	
<li><a href="posts.php">Post Announcement</a></li>
											   		
			 <li><a href="#.php">
<img src="images/service.png"> Services <img src="images/down.png"></a>
			 <ul>
			   							                                                                                                                                                                         <li><a href="idindex1.php">Manage ID Card Info</a></li>
											   <li><a href="birthindex1.php"> Manage Birth Info </a></li>
											   
											   <li><a href="deathindex1.php"> Manage Death  Info </a></li>				
                                           <li>
<a href="renew.php">renew id_card</a></li> 
									   </ul>
			</li>                                                            

<li><a href=""><font color="white" size="4" face="elephant"><b><?php echo ucfirst($_SESSION['username']); ?>
&nbsp; <img src="images/admin.jpg" width="60" height="33" class="img-circle profile_img" ></a>
<ul>	
<li class="active"><a href="logout.php"><font color="white" size="4" face="elephant">Logout</font> </a></li>
</ul></li>


		 </ul>  	
    </div> <!-- end of tooplate_menu -->
</div>
     <div id="tooplate_main" class="shadow">

<?php require_once('dbcon.php');?>
<?php
if(isset($_GET["attempt"]))
{
$attempt=$_GET["attempt"];
}
?>

				

				
	 <fieldset>
					<legend  align="center"><div class="legend"><b><font color="black">write your Message here</b></div></legend>
					<br><center>
					<div>
						 <form id="send" action="smcl.php" method="post" onsubmit="return validate()">

 <b>Your Name: <input type="text"  name="name"id="span9001"size="30" required pattern="[A-Z a-z]{3,}" value="<?php echo ucfirst($_SESSION['username']); ?>" readonly="readonly" ><br><br>
	
		Your message:	
			<textarea  name="message"  rows="5"cols="37" id="message" required> </textarea>
			
			<br>
           <br>		   
 <input type="submit" name="submit"style="background-color: #3399FF;border-radius: 40px;width: 120px;height: 35px;"  value="send">&nbsp;&nbsp;&nbsp;  
         <input type="reset" name="cancel" style="background-color: #3399FF;border-radius: 40px;width: 120px;height: 35px;" value="cancel">
		  <br>
		  
              </form>
					</div>
				</fieldset>		
   <?php
					 $conn=mysqli_connect("localhost","root","");
	
      mysqli_select_db($con,"onlinekebele");
     
        if (isset($_POST['submit'])){

             $name=$_POST['name'];
             $comment=$_POST['message'];
             $message_date = date('Y-m-d');

		if($name== ""){
			?>
	<script>
		alert(" Please enter your name!!!!!");
	</script>
	<?php	
		}
		elseif(is_numeric($name)){
			?>
			<script>
			alert("Name can not be numeric!")
			</script>	
					<?php
		}
		else{
             mysqli_query($con,"insert into smcl(name,message,message_date)
               values('$name','$comment','$message_date')")or die(mysqli_error($con));
           	   ?>
			<script>
			alert("your Message has been  successfully sent!")
				</script>	
					<?php
    
   }
  }
		
 ?>
<br>
<br>
<br>
<br>
</div>

                <div class="post_box post_box_last">
                    <div class="post_box_right">
                    </div>
                    <div class="cleaner"></div>
				</div>
                        <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
<a href="http://www.google.com" target="_blank"><img src="images/google-map.png" title="Google" width="30" height="25"></a>
		<a href="http://youtube.com"><img src="images/youtube.png" id="youtube" width="30"></a>
		<a href="http://facebook.com"><img src="images/facebook.png" id="facebook" width="40"></a> 
		<a href="http://tweeter.com"><img src="images/tweeter.png" id="tweeter"></a><b><font face="Elephant" color="white"size="3">Copyright &copy; Bate  Kebele Resident Management System  2017/2025  </font></b>	
		</div>
	</div>
	</div> 
            </tr>
          </table></td>
    </tr>
  </table>

</body></center>

</html>




