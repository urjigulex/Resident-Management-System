
<?php 
$session_email="";
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from users where user_id='$session_email'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
<?php
require("dbcon.php");

?>
<?php


require("header2.php");

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
       <link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
    </head>
	<body><center>
<img src="images/lo.PNG"height="100" width="1100"/>
<div id="tooplate_wrapper">
	
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
				</table>
				
			 </div>

<div id="tooplate_main" class="shadow">
<div id="cc" style="margin-left:0px">

<table align="center" bgcolor="black" >

 
<title>KEBELE resident MANAGEMNT SYSTEM  </title>

</head>
<body>


	<p align="center"><font size="5" color="#181e4e"><b> Renew ID Card</b></font></p>
	
	<form method="get">

<?php

$kebele="";
$givendate="";
//connects to database
$conn=mysqli_connect("localhost","root","");
	
      mysqli_select_db($con,"onlinekebele");
if (!$conn)
{
die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"onlinekebele");

//retrieve data from database

								
								$result= mysqli_query($con,"select * from id_card order by id_no ASC" ) or die (mysqli_error($con));
								
								
	$intt=mysqli_num_rows($result);							
Print "<table border cellpadding=3 width='100%'>";
print"<tr style='background-color:#22696f;color: #fffbfb'>";
print"<th> id_no</th>";
print"<th> First Name</th>";
print"<th> Middle Name</th>";
print"<th> Last Name</th>";

print"<th>	sex </th>";		
print"<th>Registration Date</th>";	
print"<th>placeofbirth</th>";
							
print"<th> Renewed Date</th>";
print"<th> Renew</th>";
print"</tr>";
Print "<tr>";
if($intt==0){
	echo '<p><font size=4 color=red>Empty List</font>';
}


while($row = mysqli_fetch_array($result))
{
Print "<td>" . $row['id_no'] . "</td>";
Print "<td>" . $row['fname'] . "</td>";
Print "<td>" . $row['mname'] . "</td>";
Print "<td>" . $row['lname'] . "</td>";

Print "<td>" . $row['sex'] . "</td>";
Print "<td>" . $row['dateofbirth'] . "</td>";
Print "<td>" . $row['placeofbirth'] . "</td>";
Print "<td>" . $row['renewed_date'] . "</td>";
Print "<td>" . "<a href='renewid.php?action=edit&id_no=" . $row['id_no'] . "'>renew</a>" . "</td>";

Print "</tr>";
}
echo "</table>";

?>

</div>
</form>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


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
