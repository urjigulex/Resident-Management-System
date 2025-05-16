<?php 
include ('db.php'); 
include ('header1.php'); 
?>
<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->




<div >
<?php
$ctrl = $_REQUEST['key1'];
												$query=mysql_query("select * from devorce where reg_no='{$ctrl}'")or die(mysql_error());

$row=mysql_fetch_array($query);
//$row = $query->fetch();
														
  ?>

 
								<div>
									<center>
													
														 Reg No:<input type="text" name="reg_no" style="width: 15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;" required value=<?php echo $row['reg_no']; ?>></u>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/Capture.png" alt="1" title=" " />
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.
														
														<br/><br/>
									
														<strong>Ethiopian Federal and Democratic Republic <br />
															Civil Registration<br/> 
															Marriage Separation Certificate </br>
															</strong><br />
									</center>
								</div>
						
				
							    <div class="row">
											<div class="col-md-3">
											
											
											<br/>&nbsp;&nbsp;&nbsp;&nbsp;Petitioner Name:
											<u><input type="text" name="pfullname" style="width:30%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['pfullname']; ?>></u>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											Respondent Name:
												<u><input type="text" name="rfullname" style="width:30%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['rfullname']; ?>></u>
											
											</div>
														</div>
								<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth:
											<u><input type="text" name="pdateofBirth" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['pdateofbirth']; ?>></u>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											Date of birth:
												<u><input type="text" name="rdateofbirth" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['rdateofbirth']; ?>></u>
												
								</div>
								</div>
								
																<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;&nbsp;Nationality:
											<u><input type="text" name="pnation" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['pnation']; ?>></u>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											Nationality :
												<u><input type="text" name="rnationality" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['rnationality']; ?>></u>
												
								</div>
								</div>
								
								<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;&nbsp;Date of Separation:
											<u><input type="text" name="dateofsep" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['dateofsep']; ?>></u>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											
											
											Place of Separation :
												<u><input type="text" name="placeofsep" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['placeofsep']; ?>></u>
											
								</div>
								</div>
								
								<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;&nbsp;Separation Approved by:
											<u><input type="text" name="approvedby" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['approvedby']; ?>></u>
									&nbsp;&nbsp;&nbsp;&nbsp;Date Approved:
									<u><input type="text" name="dateapprove" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['dateapprove']; ?>></u>
									
		
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											Signiture:
												<u><img src="images/Capturs.png" alt="1" title=" " /></u>
										
												
								</div>
								</div>
						</div>
					
													
</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								
								<div class="pull-right">
								<button onclick="window.print()" id="btnPrint" class="btn btn-primary btn-m " >
										Print 
									</button>
									</div>
							<center>
<a href="serdi.php"><img src="images/back.jpg" width="90"></a></center>

</body>
</html>
								
