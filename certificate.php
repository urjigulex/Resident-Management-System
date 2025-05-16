<?php 
$session_id="";
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from users where username='$session_id'")or die('Error In Session');
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

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
                        <img src="images/lo.jpg"height="100" width="1100"/>
                    </div>

			</div>
			<div id="tooplate_menu" class="menu1">
	<table border="0" bgcolor="" width="160" align="left">

        <ul>			
                          <li class="active"><a href="index1.php">Home</a></li>

	                     	<li class="active"><a href="viewmessage.php">Message</a></li>		
                         <li class="active"><a href="commessage.php">View Request</a></li>
<li class="active"><a href="comindex1.php">View Feedback</a><li><a href="search_id.php"> Give Identification Card </a></li>
											   <li><a href="birthgive.php"> Give Birth certf </a></li>
											   
											   	  <li><a href="serch_id5.php"> Give Death  certf</a></li>								
											
                                           <li>
<a href="renew.php">renew id_card</a></li> 
<li><a href=""><font color="white" size="4" face="elephant"><b><?php echo ucfirst($_SESSION['username']); ?>
&nbsp; <img src="images/admin.jpg" width="60" height="33" class="img-circle profile_img" ></a>
<ul>	
<li class="active"><a href="logout.php"><font color="white" size="4" face="elephant">Logout</font> </a></li>
</ul></li>

        </ul> 
				
    </div> <!-- end of tooplate_menu -->

    <div id="tooplate_main" class="shadow">

 <div >
				<div >
				<center>
					<img src="images/pre1.png" alt="jquery gallery" title=" " id="wows1_10"/>
					<center>
				</div>
			</div>	
			
		
									
		         </ul>
	
				
	
			<br><br><br><br><br><br><br><br><br><br>
                
					
			<div >
	
								</div>					
    </div>
		<div class="post_box post_box_last">
                    <div class="post_box_right">
                    </div>
                    <div class="cleaner"></div>
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

