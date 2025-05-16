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
<li><a href=""><font color="white" size="4" face="elephant"><b><?php echo ucfirst($_SESSION['username']); ?>
&nbsp; &nbsp; <img src="images/cla.jpg" width="80" height="30" class="img-circle profile_img" ><font color="black"></font></a>
<ul>
	
<li class="active"><a href="logout.php"><font color="white" size="4" face="elephant">Logout</font> </a></li>
</ul></li>


			 </ul>	
				</table>
			 </div>
 <div id="tooplate_main" class="shadow">

    <div class="row-fluid">
        <div class="span12">
 

            <div class="container">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp; Latest News Information</strong>
                            </div>
                            <thead>
                                <tr>
						
									<th style="text-align:center;" >ID NO</th>
                                    <th style="text-align:center;">Date of Post</th>
								  <th style="text-align:center;">Title</th>
                                    <th style="text-align:center;">Message</th>

								
                                    
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("select * from post order by post_id ASC" ) or die (mysql_error());
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['post_id'];
								?>
								
								<tr>
								
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['post_id']; ?></td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['date']; ?></td>

								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['title']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['news']; ?></td								</div>
								</div>
					
																	
											</div>
								</div>
								</tr>

																</div>
								</div>

								<?php } ?>
                            </tbody>
                        </table>

        </div>
        </div>
        </div>
		<br><br><br><br><br><br><br><br>
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





