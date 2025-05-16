
<?php 
$session_email="";
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from users where user_email='$session_email'")or die('Error In Session');
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

<body><center>

<img src="images/hh.PNG"height="100" width="1100"/>

<div id="tooplate_wrapper">	
<div id="site_title">
                    

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
 <div id="tooplate_main" class="shadow"><center>
<h2>House verfication</h2>
<form action="searchhouse.php" method="POST" name="form">
Enter Owner ID Number:

<input name="searchid" type="text"> <br>

<input type="submit" name="searchres" value="Check">
 
</form>
<?php
include('resindex1.php'); ?>
<?php
$con= mysql_connect("localhost","root","");
mysql_select_db("onlinekebele",$con);
if(isset($_POST['searchres']))
{
$no=$_POST['searchid'];


$sql = "SELECT * FROM house where OwnerId='$no' ";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$myrow = mysql_fetch_array($result);


if ($records == 0)
{

echo '<script type="text/javascript">alert("You Are Not Resident!");
window.location=\'searchhouse.php\';</script>'.mysql_error();
}
else 

echo '<script type="text/javascript">alert("YOU CAN To Register!");window.location=\'resindex.php\';</script>';
}

mysql_close();
?>
<br><br><br><br><br><br><br>
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
                     


