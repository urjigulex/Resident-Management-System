<?php 
$session_id="";
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from clark_account where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
 ?>
<?php include('db.php'); ?>
<?php include('header2.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head> <link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
</head>
<body>

<div id="tooplate_wrapper">
	<div id="tooplate_header">
	

	  <div id="site_title">

                    <div class="col-lg-3 ">
                        <img src="images/hh.PNG"height="50" width="1150" alt="left"/>
                    </div>
              
			</div>
<div id="tooplate_menu" class="menu1">
<table border="0" bgcolor="" width="160" align="left">

        <ul>
		                  <li class="active"><a href="clarkindex.php">
Home</a></li>		   							 
			   						
<li><a href="resindex.php">Resident Reg</a></li>
<li><a href="#.php">View <img src="images/down.png"></a>
			 <ul>
<li><a href="vmcl.php"> Message</a></li>	
<li><a href="comm.php"> withdrawal requiest</a></li>	
									
																						   </ul>
			</li>
										<li class="active"><a href="comindex.php"> View feedback</a></li>	   

<li><a href="#.php">Manage Resident<img src="images/down.png"></a>
			 <ul>
	<li class="active"><a href="viewpop1.php">Search residet </a></li><li><a href="viewclearance.php"> Clearance Information</a></li>	
										   
																						   </ul>
			</li>

<li><a href="news.php">Latest New's</a></li>	

			<li class="active"><a href="smad.php"> Send Message</a></li>
				<li class="active"><a href="ch.php">Change password</a></li>
							
			 </li>
<li><a href=""><font color="white" size="4" face="elephant"><b>
<?php echo ucfirst($_SESSION['username']); ?>
&nbsp; &nbsp; <img src="images/cla.jpg" width="80" height="30" class="img-circle profile_img" ><font color="black"></font></a>
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

		<font color="black">		
	 <fieldset>
					<legend  align="center"><div class="legend"><b>write your Report here</b></div></legend>
					<br>
					<div><center>
						 <form id="send" action="smad.php" method="post" onsubmit="return validate()">

 <b>Your Name: <input type="text"  name="name"id="span9001"size="30"value="<?php echo ucfirst($_SESSION['username']); ?>" readonly="readonly" required pattern="[A-Z a-z]{3,}"><br><br>
	Report Type: <select name="type"> <option>Daily Report Report</option><option>Weekly Report</option><option>Monthly Report</option><option>Six Montntly Report</option> <option>Yearly Report</option>
</select>
<br><br>
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
					 $conn=mysql_connect("localhost","root","");
	
      mysql_select_db("onlinekebele",$conn);
     
        if (isset($_POST['submit'])){
			
             $name=$_POST['name'];
             $type=$_POST['type'];
			            $mess=$_POST['message'];
                        $message_date = date('Y-m-d');

		if($name== ""){
			?>
	<script>
		alert(" Please enter your name!!!!!");
	</script>
	<?php	
		}		
		else{
             mysql_query("insert into smad(name,type,message,message_date)
               values('$name','$type','$mess','$message_date' )")or die(mysql_error());
			   ?>
			<script>
			alert("your Message has been  successfully sent!")
				</script>	
					<?php
    
   }
  }
		
 ?>

                <div class="post_box post_box_last">
                    <div class="post_box_right">
                    </div>
                    <div class="cleaner"></div>
				</div>
				 
        </div>
        </div>
        </div>
	
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


