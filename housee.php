<?php 
$session_email="";

include('session.php'); 

$result=mysqli_query($con, "select * from users where user_email='$session_email'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
<?php include('db.php'); ?>
<?php include('header1.php'); ?>
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
                        <img src="images/lo.PNG"height="50" width="1150" alt="left"/>
                    </div>
              
			</div>
<div id="tooplate_menu" class="menu1">
	<table border="0" bgcolor="" width="160" align="left">

        <ul>
		   
			
               <li class="active"><a href="clarkindex.php">
Home</a></li>		   							 
			   							 <li><a href="housee.php">register house </a></li>
<li><a href="searchhouse.php">Resident Reg</a></li>
<li><a href="#.php">View <img src="images/down.png"></a>
			 <ul>
<li><a href="vmcl.php"> Message</a></li>	
<li><a href="comm.php"> withdrawal requiest</a></li>	
										<li class="active"><a href="comindex.php"> View feedback</a></li>	   
																						   </ul>
			</li>
<li><a href="cheackid.php">Give Withdrawal </a></li>		<li class="active"><a href="viewpop1.php">Search residet </a></li>

			<li class="active"><a href="smad.php"> Send Message</a></li>
				<li class="active"><a href="ch.php">Change password</a></li>
							<li class="active"><a href="logout.php">Logout</a></li>
			 <li><a href=""><img src="images/ca.jpg" width="80" height="40" ><i><font color="black"></font></i></a></li>

			 </ul>	
				</table>
			 </div>
   <div id="tooplate_main" class="shadow" style="background-color:white;width:1060px; height:600px;">
<body>
            <center>                   
      <div class="sidebar2">
       <li><a href="viewhouse.php"><b>View House</b></a></li>
  
		<div><b>House Registeration Form</b></div>
					<hr />
					<fieldset>
					<legend  align="center"><div class="legend"><b>Please fill-up the space provided below</b></div></legend>
					<br>
					<div>
						<form onsubmit='return formValidation()' action='housee.php' method='POST'>
							<table>
								<tr>
									<td><font color="red">*</font>OwnerId :</td>
									<td><input type="text" size="20px" id='id' name='id' placeholder="Enter id..." required></td>	
<td><font color="red">*</font>Nationality:</td><td><input type="text"  size="20px" id='nation' name='nation' placeholder="Enter your nationality..."required pattern="[A-Z a-z]{3,}"></td></tr>
<tr><td><font color="red">*</font>Region:</td>
<td><input type="text"  size="20px" id='region' name='region' placeholder="Enter region..." required pattern="[A-Z a-z]{3,}"></td>
<td><font color="red">*</font>Zone:</td><td><input type="text"  size="20px" id='zone' name='zone' placeholder="Enter zone..." required pattern="[A-Z a-z]{3,}"></td>

</tr><tr><td><font color="red">*</font>Woreda:</td>
<td><input type="text"  size="20px" id='region' name='woreda' placeholder="Enter woreda..." required pattern="[A-Z a-z]{3,}"></td><td><font color="red">*</font>Kebele:</td>
<td><input type="text"  size="20px" id='kebele' name='kebele' placeholder="Enter kebele..." required pattern="[A-Z a-z]{3,}"></td>
</tr><tr><td><font color="red">*</font>House Number :</td>
<td><input type="text"  size="20px" id='house' name='house' placeholder="Enter House Number..."required pattern="([0-9])+(?:-?\d){0,}"></td>
<td><font color="red">*</font>Martial Status:</td>
<td><input type="text"  size="20px" id='status' name='status' placeholder="Enter Status..."required pattern="[A-Z a-z]{3,}"></td></tr>
<tr>
<td><font color="red">*</font>House_Type :</td>
<td><input type="radio" name="housetype" id="optionsRadios1" value="Kebele House" checked>
Kebele House<input type="radio" name="housetype" id="optionsRadios2" value="Private house" checked>Private house</td>							
<td><font color="red">*</font>Date Of Registration:</td><td><input type="date" name="DateOfRegistration" id="DateOfRegistration" placeholder='date of registration...' required/>								</tr>
								<tr>
									<td><font color="red">*</font>Approved by:</td>
									<td><input type="text"  size="20px" id='approve' name='approve' placeholder="Enter your name..." required pattern="[A-Z a-z]{3,}"></td>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td><input type='submit' value='Save' name='houses' onclick="return check(this.form);"/>
									<input type='reset' value='clear'></td>
								</tr>		
							</table>		
						</form>
					</div>
					</fieldset>	
					
					<hr />
					
					<?php
			$conn=mysql_connect("localhost","root","");
	
      mysql_select_db("onlinekebele",$conn);
if(isset($_POST['houses']))
{
 if(!$conn)
  {
   die('Could not connect: ' . mysql_error());
  }

mysql_select_db("onlinekebele", $conn);
$sql="INSERT INTO house (OwnerId,nation,Region,zone,woreda,Kebele,HouseNumber,status,House_Type,DateOfRegistration,approve)
VALUES
('$_POST[id]','$_POST[nation]','$_POST[region]','$_POST[zone]','$_POST[woreda]','$_POST[kebele]','$_POST[house]','$_POST[status]','$_POST[housetype]','$_POST[DateOfRegistration]','$_POST[approve]')";
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
echo " <font color='green'> &#9829; Your information is Registerd Successfully,Thank you.";
}
}
mysql_close($conn)
?>
				</td>
			</tr>
	</table>

</center>	

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

</html>		
