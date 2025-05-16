<?php 
$session_email="";

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

                    <div >
                        <img src="images/lo.PNG"height="100" width="1100"/>
                    </div>

			</div>
  
	

<div id="tooplate_menu" class="menu1">
	<table border="0" bgcolor="" width="160" align="left">

        <ul>			<li class="active"><a href="index1.php">Home</a></li>
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
	


 


         

            <div class="container">



                        <table cellpadding="0" cellspacing="0" border="1000" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
									
                                    <th style="text-align:center;" >Image</th>
									<th style="text-align:center;" >Id_No </th>
                                    <th style="text-align:center;">FirstName</th>
                                    <th style="text-align:center;">MiddleName</th>
                                    <th style="text-align:center;">LastName</th>
                                    
									<th style="text-align:center;">Sex</th>
	                                           <th style="text-align:center;">Occupation</th>
									<th style="text-align:center;">DateofBirth</th>
								
									<th style="text-align:center;">Action</td
                                    
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysqli_query($con,"select * from id_card order by id_no ASC" ) or die (mysqli_error($con));
								while ($row= mysqli_fetch_array ($result) ){
								$id=$row['id_no'];
								?>
								<tr>
								
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;"><a href="#<?php  echo $id;?>" data-toggle="modal">
									<?php if($row['location'] != ""): ?>
									<img src="upload/<?php echo $row['location']; ?>" width="0px" height="100px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" style="border:100px solid #333333;">
									<?php endif; ?>
									</a>
								</td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['id_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['fname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['mname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['lname']; ?></td>
								
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['sex']; ?></td>
		<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['occupation']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['dateofbirth']; ?></td>
								<td style="text-align:center; width:350px;">
									<a href="idedit2.php<?php echo '?id='.$id; ?>" class="btn btn-info"><font color="white" size="3">Edit</a>
									 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" ><font color="white" size="3">Delete </a>
									 <a href="idcard.php<?php echo '?id='.$id; ?>" class="btn btn-info"><font color="white" size="3">View</a>
									 
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
								<a href="iddelete1.php<?php echo '?id_no='.$id; ?>" class="btn btn-danger">Yes</a>
								</div>
								</div>
								</div>
								</tr>

								<!-- Modal Bigger Image -->
								<div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">

								<h3 id="myModalLabel"><b><?php echo $row['fname']." ".$row['mname']; ?></b></h3>
								</div>
								<div class="modal-body">
								<?php if($row['location'] != ""): ?>
								<img src="upload/<?php echo $row['location']; ?>" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php else: ?>
								<img src="images/default.png" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php endif; ?>
								</div>
								<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
								</div>

								<?php } ?>
                            </tbody>
                        </table>


       
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
