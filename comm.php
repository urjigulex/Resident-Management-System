<?php 
include('dbcon.php');
include('session.php'); 

// Get username from session
$session_id = isset($_SESSION['username']) ? $_SESSION['username'] : '';

// Query the database
$result = mysqli_query($con, "SELECT * FROM clark_account WHERE username='$session_id'") or die('Error In Session');
$row = mysqli_fetch_array($result);
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

                    <div >
                        <img src="images/lo.PNG"height="30" width="1150"/>
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
			 </div></div>
 <div id="tooplate_main" class="shadow">


    <div class="row-fluid">
        <div class="span12">


 

            <div class="container">



                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
						            <th style="text-align:center;">No</th>						            <th style="text-align:center;">id_no</th>
									<th style="text-align:center;">rtype</td>
									 <th style="text-align:center;">message</th>
									<th style="text-align:center;">message_date</th>									<th style="text-align:center;">Action</th>
									
                            message_id        
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysqli_query($con,"select * from usermessage order by  message_id DESC" ) or die (mysqli_error($con));
								while ($row= mysqli_fetch_array ($result) ){
								$id=$row['message_id'];
								?>
								
								<tr>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['message_id']; ?></td>								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['id_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['rtype']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['message']; ?></td>
								
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['message_date']; ?></td>
								

								
								
								<td style="text-align:center; width:350px;">
<a href="mesag.php<?php echo '?id='.$id; ?>" class="btn btn-info"><b><font color="white" size="3"> View</a>

									 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" ><b><font color="white" size="3"> Delete </a>
<a href="cheackid.php" class="btn btn-success"> <b>
<font color="white" size="3"> Give Certificate</a>
									
								</td>
									
										<!-- Modal -->
								<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<h3 id="myModalLabel">Delete</h3>
								</div>
								<div class="modal-body">
								<p><div class="alert alert-danger">Are you Sure you want Delete?</p>
								</div>
								<hr>
								<div class="modal-footer">
								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
								<a href="deletewith.php<?php echo '?message_id='.$id; ?>" class="btn btn-danger">Yes</a>
								</div>
								</div>
								</div>
								</tr>

								<!-- Modal Bigger Image -->
								<div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">											<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
								</div>

								<?php } ?>
                            </tbody>
                        </table>


          <br><br><br><br><br><br><br>   <br><br><br><br><br><br><br>  <br><br>
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



