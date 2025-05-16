<?php 
$session_email="";
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from users where user_id='$session_email'")or die('Error In Session');
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
<li><a href=""><font color="white" size="4" face="elephant"><b><?php echo ucfirst($_SESSION['username']); ?>
&nbsp; &nbsp; <img src="images/cla.jpg" width="80" height="30" class="img-circle profile_img" ><font color="black"></font></a>
<ul>
	
<li class="active"><a href="logout.php"><font color="white" size="4" face="elephant">Logout</font> </a></li>
</ul></li>




			 </ul>	
				</table>
			 </div>
 <div id="tooplate_main" class="shadow">	
<ul>
<a color="back" href="viewclearance.php" class="btn btn-info"><strong><font color="white" size="4">View withdraw Information</font></strong></a><br/><br>
</ul>
       <div class="container">
        <div class="row bg-danger">
            <div class="noprint">	<center>
					<legend  align="center"><div class="legend"><b>Please fill-up the space provided below</b></div></legend>
					<br><br>
				
						<form onsubmit='return formValidator()' action='clearance.php' method='POST'>
							<table>
								<tr>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;
							<b>IdNumber :<input type="text"  size="20px" id='id' name='id' placeholder="Enter Id number..." required>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
&nbsp;&nbsp;&nbsp;


							<b>FirstName :<input type="text"  size="20px" id='span9001' name='firstname' placeholder="Enter firstname..." required pattern="[A-Z a-z]{3,}">	<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


Middle name :<input type="text"  size="20px" id='span9001' name='middleName' placeholder="Enter middleName..." required pattern="[A-Z a-z]{3,}">
							    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;


								LastName :<input type="text"  size="20px" id='span9001' name='lastname' placeholder="Enter lastname..." required pattern="[A-Z a-z]{3,}"><br><br>
							    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;


									Age :<input type="text"  size="20px" id='span9001' name='age' placeholder="Enter Age..." required pattern="([1-9])+(?:-?\d){0,}">
							    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;

							    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								Sex:<select name="sex"> <option>Male</option><option>Female</option></select>	
									<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

									Reason of Withdrawal: 	<textarea style="margin-center:0px" name="Reason_Of_Clearance"  rows="3" cols="10" id="news" placeholder="Enter reason of..." required  pattern="[A-Z a-z]{3,}"></textarea> 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;
Approved By:<input type="text"  size="20px" id='span9001' name='approve' placeholder="enter your name..." required  pattern="[A-Z a-z]{3,}"><br><br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;


									Date_Of_Taken:<input type="text"  size="20px" id='date' name='date' class="mine_text_field_7" value="<?php echo date('Y-m-d');?>"  placeholder="Enter DateOfTaken..."/>

					<br><br>
								<tr>
									<td></td>
									<td>
<input type="submit" value="Send" name="clearance"style="background-color: #66FFCC;border-radius: 40px;width: 120px;height: 35px;" onclick="return check(this.form);"/>
<input type="reset" value="Clear" name="clearance"style="background-color: #FF99CC;border-radius: 40px;width: 120px;height: 35px;" onclick="return check(this.form);"/>
	</td>
								</tr>		
							</table>	
						
						</form>
					</center>
					</fieldset>	<br><br><br><br><br><br><br><br><br><br>
					<?php
					 $conn=mysqli_connect("localhost","root","");
	  mysqli_select_db("db",$conn);
if(isset($_POST['clearance']))
{
 if(!$conn)
  {
   die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db("onlinekebele", $conn);
$sql="INSERT INTO withdrawal(IdNumber,FirstName,middleName,LastName,age,sex,Reason_Of_Clearance,approve,Date_Of_Taken)
VALUES
('$_POST[id]','$_POST[firstname]','$_POST[middleName]','$_POST[lastname]','$_POST[age]','$_POST[sex]','$_POST[Reason_Of_Clearance]','$_POST[approve]','$_POST[date]')";
if (!mysqli_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
  else
  {?>
<script>
			alert("your Withdrawal has been  successfully Saved!")
				</script>	
				<?php
}
}
mysql_close($conn);
 ?>
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
					
				
					
    
	

	



