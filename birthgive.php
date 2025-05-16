
<?php 
$session_id="";
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
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

				</table>
			 </div>
 <div id="tooplate_main" class="shadow">


    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">


<?php include('birthmodal_add.php'); ?>
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;" >Image</th>
                                    <th style="text-align:center;">Reg_num</th>

                                    <th style="text-align:center;">First Name</th>
                                    <th style="text-align:center;">Middle Name</th>
                                    <th style="text-align:center;">Last Name</th>
									<th style="text-align:center;">Age</th>                          <th style="text-align:center;">Sex</th>
									<th style="text-align:center;">DateofBirth</th>
	                                           <th style="text-align:center;">Date of Registration</th>

									<th style="text-align:center;">Action</td
                                    
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("select * from resident order by reg_no ASC" ) or die (mysql_error());
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['reg_no'];
								?>
								<tr>
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;"><a href="#<?php  echo $id;?>" data-toggle="modal">
									<?php if($row['plocation'] != ""): ?>
									<img src="upload/<?php echo $row['plocation']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?>
									</a>
								</td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['reg_no']; ?></td>								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['fname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['mname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['lname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['age']; ?></td>
	<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['sex']; ?></td>

								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['dateofbirth']; ?></td>
	<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['dateofreg']; ?></td>
								<td style="text-align:center; width:350px;">
									<a href="reseditt.php<?php echo '?id='.$id; ?>" class="btn btn-info"> <font color="white" size="4"> Give Birth certificate</a>
									 
									 <a href="suppl.php<?php echo '?id='.$id; ?>" class="btn btn-success"><font color="white" size="4"> View</a>
								</td>
									
																		<div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">

								<h3 id="myModalLabel"><b><?php echo $row['fname']." ".$row['mname']; ?></b></h3>
								</div>
								<div class="modal-body">
								<?php if($row['plocation'] != ""): ?>
								<img src="upload/<?php echo $row['plocation']; ?>" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
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

<br><br><br>
          
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




