<?php 
include ('db.php'); 
include ('header1.php'); 
$ID=$_GET['id'];
?>
<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->




<div >
<?php
  $query=mysql_query("select * from birth where reg_no='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
//$row = $query->fetch();
														
  ?>


  <div style="background-color:white;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:600px;"> 
								<div>
									<center>
													
	
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/Capture.png" alt="1" title=" " />
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.
														
														<br/><br/>
									
														<strong>Ethiopian Federal and Democratic Ripublic <br />
															Civil Registration<br/> 
					 
				<br>
										Birth Certificate </br>
															</strong><br />
									</center>
								</div>
			
				
							    <div class="row">
											<div class="col-md-15">
											
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				
							Birth Reg No:<input type="text" name="reg_no" style="width: 15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;" required value=<?php echo $row['reg_no']; ?>></u>						<br/>&nbsp;&nbsp;&nbsp;&nbsp;Child Full Name:
											<u><input type="text" name="childfullname" style="width:40%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['childfullname']; ?>></u>
											</div>
														</div>
								<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;&nbsp;Sex<u><input type="text" name="sex" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['sex']; ?>></u>
											
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth:
											<u><input type="text" name="dateofBirth" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['dateofbirth']; ?>></u>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											Place of birth:
												<u><input type="text" name="placeofbirth" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['placeofbirth']; ?>></u>
												
								</div>
								</div>
								
								<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;
								Mother Name :<u><input type="text" name="motherfullname" style="width:30%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['motherfullname']; ?>></u>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Nationality :<u><input type="text" name="mnation" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['mnation']; ?>></u></u>
								</div>
								</div>
									<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;
								Father Name :<u><input type="text" name="fatherfullname" style="width:30%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['motherfullname']; ?>></u>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Nationality :<u><input type="text" name="fnation" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['mnation']; ?>></u></u>
								</div>
								</div>
								
								<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;&nbsp; Registerd by:
											<u><input type="text" name="approvedby" style="width:25%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['approvedby']; ?>></u>
									&nbsp;&nbsp;&nbsp;&nbsp; Registerd Date:
											<u><input type="text" name="datereg" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['datereg']; ?>></u>
									
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											
											Signiture:
												<u><img src="images/Capturs.png" alt="1" title=" " /></u>
										
												
								</div>
								</div>
						</div>
							

								</div>
								</div>
								</div>
								</div>
								<div class="pull-right">
								<button onClick="window.print()" id="btnPrint" class="btn btn-primary btn-m " >
										Print 
									</button>
									
									</div>
							<center>
<a href="birthindex1.php"><img src="images/back.jpg" width="90"></a></center>

</body>
</html>
								