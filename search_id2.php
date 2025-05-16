
<?php 
$session_email="";
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from users where user_id='$session_email'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
<?php include('db.php'); ?>
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


<html xmlns="http://www.w3.org/1999/xhtml">
<head> <link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>

<div id="tooplate_wrapper">
	<div id="tooplate_header">
	
<div id="site_title">

                    <div >
                        <img src="images/lo.PNG"height="100" width="1100"/>
                    </div>

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
											   
											   <li><a href="marrindex1.php"> Manage Marrieag Info</a></li>		
											   <li><a href="divindex1.php">Manage Divorce Info</a></li>		   <li><a href="deathindex1.php"> Manage Death  Info </a></li>				
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
				</table>
			 </div>
 <div id="tooplate_main" class="shadow">

                    <center>
					
					
 <div>
<h2>Residet Information Verification</h2>
<form action="search_id2.php" method="POST" >

 <br><br> <br><br>
<strong>
Enter Reg_No:
</strong>
<input name="searchid" type="text"> 
<br>
<br>
<input type="submit" name="searchres" value="GO">
 
</form></div> </center>
<?php
$con= mysql_connect("localhost","root","");
mysql_select_db("onlinekebele",$con);
if(isset($_POST['searchres']))
{
$no=$_POST['searchid'];
$sql = "SELECT * FROM resident where reg_no='$no' ";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$myrow = mysql_fetch_array($result);

if ($records==0)
{
echo '<script type="text/javascript">alert("You Are Not Resident!");
window.location=\'search_id2.php\';</script>'.mysql_error();
}
else

echo '<script type="text/javascript">alert("YOU CAN to Give Marrieag Certificate!");window.location=\'marrindex1.php\';</script>';

}
mysql_close();
?><br><br><br><br><br><br><br><br><br><br><br><br>
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

