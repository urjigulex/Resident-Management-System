<?php 
$session_id="";

include('session.php'); 

$result=mysqli_query($con, "select * from users where user_email='$session_id'")or die('Error In Session');
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

        <ul>			
                          <li class="active"><a href="index1.php">Home</a></li>

			 <li><a href="#.php">
<img src="images/service.png"> Services <img src="images/down.png"></a>
			 <ul>
			   							                                                                                                                                                                         <li><a href="search_id.php">  ID Card  verification </a></li>
											   <li><a href="birthindex1.php"> Give Birth certf </a></li>
											   
											   <li><a href="search_id2.php"> Give Marrieag cert</a></li>		
											   <li><a href="search_id3.php">Give Divorce certf</a></li>		   <li><a href="serch_id5.php"> Give Death  certf</a></li>								
											
                                           <li>
<a href="renew.php">renew id_card</a></li> 
									   </ul>
			</li>                                                            
 <li><a href="#.php">View<img src="images/down.png"></a>
			 <ul>
			   							                                                                                                                                                                         	<li class="active"><a href="viewmessage.php">Message</a></li>		
                         <li class="active"><a href="commessage.php">view_request</a></li>
<li class="active"><a href="comreport.php">view_report</a></li>
								   </ul>
			</li>                                                            
				<li class="active"><a href="viewpop.php">search residet info</a></li>

<li class="active"><a href="smcl.php">Send Message</a></li>

                            </li>
	 <li class="active"><a href="create.php">Create Account</a></li>	<li class="active"><a href="comindex1.php">View Feedback</a></li>

							 <li class="active"><a href="change_password.php">change password</a></li>
							 
			<li class="active"><a href="logout.php">Log out</a></li>
			<li><a href=""><img src="images/admin.jpg" width="80" height="50" ><i><font color="black"></font></i></a></li>

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
	                                           <th style="text-align:center;">Registration Date</th>
									<th style="text-align:center;">Place of Birth</th>					<th style="text-align:center;">Renewed Date</th>
								
									<th style="text-align:center;">Action</td  
                                    
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("select * from id_card order by id_no ASC" ) or die (mysql_error());
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id_no'];
								?>
								<tr>
								
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;"><a href="#<?php  echo $id;?>" data-toggle="modal">
									<?php if($row['location'] != ""): ?>
									<img src="upload/<?php echo $row['location']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?>
									</a>
								</td>
																<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['id_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['fname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['mname']; ?></td>								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['mname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['lname']; ?></td>
								
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['sex']; ?></td>
		<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['occupation']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['dateofbirth']; ?></td>
								<td style="text-align:center; width:350px;">
									<a href="renewid.php<?php echo '?id='.$id; ?>" class="btn btn-info"><font color="white" size="3">Renew</a>									 
								</td>
									
										
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

