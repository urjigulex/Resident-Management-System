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
  $query=mysql_query("select * from marriage where 
reg_no='{$ctrl}'")or die(mysql_error());
$row=mysql_fetch_array($query);
//$row = $query->fetch();
														
  ?>


 
								<div>
									<center>
													
														Marriage Reg No:<input type="text" name="reg_no" style="width: 15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;" required value=<?php echo $row['reg_no']; ?>></u>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/Capture.png" alt="1" title=" " />
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.
														
														<br/><br/>
									
														<strong>Ethiopian Federal and Democratic Republic <br />
															Civil Registration<br/> 
															Marriage Certificate </br>
															</strong><br />
									</center>
								</div>
								<div>
								
						<div class="control-group">
                        <label class="control-label" for="inputPassword">
										<?php if($row['wlocation'] != ""): ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="upload/<?php echo $row['wlocation']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
										<?php else: ?>
										<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
										<?php endif; ?>
									
										<?php if($row['hlocation'] != ""): ?>
										
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="upload/<?php echo $row['hlocation']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
										<?php else: ?>
										<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
										<?php endif; ?>
						</label>
						

                        </div>

	</div>
								
								
								
									
<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;&nbsp;ID Number:
											<u><input type="text" name="wage" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['wid_no']; ?>></u>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;

											ID Number:
												<u><input type="text" name="hage" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['hid_no']; ?>></u>
												
								</div>
								</div>
									
<div class="row">
								<div class="col-md-15">
									
											
											&nbsp;&nbsp;&nbsp;&nbsp;Wife Name:
											<u><input type="text" name="wfirstname" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['wfirstname']; ?>></u>
											<input type="text" name="wmiddlename" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['wmiddlename']; ?>></u>
											<input type="text" name="wlastname" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['wlastname']; ?>></u>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											Husband Name:
												<u><input type="text" name="hfirstname" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['hfirstname']; ?>></u>
											<input type="text" name="hmiddlename" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['hmiddlename']; ?>></u>
											<input type="text" name="hlastname" style="width:7%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['hlastname']; ?>></u>
											</div>
														</div>
									
<div class="row">
								<div class="col-md-15">
										&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth:
											<u><input type="text" name="wdate of Birth" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['wdateofbirth']; ?>></u>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											Date of birth:
												<u><input type="text" name="hdateofbirth" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['hdateofbirth']; ?>></u>
												
								</div>
								</div>
										
<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;&nbsp;Age:
											<u><input type="text" name="wage" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['wage']; ?>></u>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;

											Age:
												<u><input type="text" name="hage" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['hage']; ?>></u>
												
								</div>
								</div>
								
	
																<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;&nbsp;Nationality:
											<u><input type="text" name="wnation" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['wnation']; ?>></u>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											Nationality :
												<u><input type="text" name="hnation" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['hnation']; ?>></u>
												
								</div>
								</div>
								<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;&nbsp;Religion:
											<u><input type="text" name="hreligion" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['wreligion']; ?>></u>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;

											Religion:
												<u><input type="text" name="hage" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['hreligion']; ?>></u>
												
								</div>
								</div>

								<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;&nbsp;Date of Marriage:
											<u><input type="text" name="datemarriage" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['datemarriage']; ?>></u>
											
											
											<u>Place of Marriage :</u>
												<u><input type="text" name="placemarriage" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['placemarriage']; ?>></u>
								Date Approved:
												<u><input type="text" name="dateapprove" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['dateapprove']; ?>></u>
																
												
								</div>
								</div>
								<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;&nbsp;Marrage Approved by:
											<u><input type="text" name="approvedby" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['approvedby']; ?>></u>
									
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
<a href="sema.php"><img src="images/back.jpg" width="90"></a></center>

</body>
</html>
								
