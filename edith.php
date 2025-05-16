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
 <div id="tooplate_main" class="shadow">

 <tr>
<td>
 <table border="0" bgcolor="blue" cellspacing="0" align="center">
   <tr>
  
  
     <td style="margin-left:100px"width="800"  height="600" valign="top" bgcolor="white"><br><br>		
	<table>
			<tr>
				<td>

<?php
$OwnerId=$_POST["OwnerId"]; 
$HouseNumber=$_POST["HouseNumber"]; 
$ke=$_POST["Kebele"];
$Region=$_POST["Region"]; 
$House_Type=$_POST["House_Type"];
$DateOfRegistration=$_POST["DateOfRegistration"];
$approve=$_POST["approve"];   
$con = mysql_connect("localhost","root","");
if (!'con')
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("onlinekebele", $con);
$query= "UPDATE house SET OwnerId='$OwnerId',HouseNumber='$HouseNumber',Kebele='$ke',Region='$Region',House_Type='$House_Type',DateOfRegistration='$DateOfRegistration',approve='$approve'WHERE OwnerId='$OwnerId'";
$result=mysql_query($query,$con);
if($result)
{
echo " information is succesfully updated,thank you<br>";
}
else
{
echo " information is succesfully updated,thank you!!";
}
mysql_close($con);
?>
<p><a href="viewhouse.php"> you can check</a></p><br/>
			</tr>
	</table>

</td>
	</tr>
</table>
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
