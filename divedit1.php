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

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="row-fluid">
<div class="span3"></div>
<div class="span6">


<div class="hero-unit-3">
<center>

<?php
  $query=mysql_query("select * from devorce where reg_no='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
  <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                
                                <h4>Petitioner Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Reg_no:</label>
                                    <div class="controls">
                                        <input type="text" name="reg_no" required value=<?php echo $row['reg_no']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Petitioner ID No:</label>
                                    <div class="controls">
                                        <input type="text" name="pid_no" required value=<?php echo $row['pid_no']; ?>>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Petitioner Full Name:</label>
                                    <div class="controls">
                                        <input type="text" name="pfullname" required value=<?php echo $row['pfullname']; ?>>
                                    </div>
                                </div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Sex:</label>
                                    <div class="controls">
                                        <input type="text" name="psex" required value=<?php echo $row['psex']; ?>>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Date Of Birth:</label>
                                    <div class="controls">
                                        <input type="date" name="pdateofbirth" required value=<?php echo $row['pdateofbirth']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Place Of Birth:</label>
                                    <div class="controls">
                                        <input type="text" name="pplaceofbirth" required value=<?php echo $row['pplaceofbirth']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Nationality:</label>
                                    <div class="controls">
                                        <input type="text" name="pnation" required value=<?php echo $row['pnation']; ?>>
                                    </div>
                                </div>
								<h4>Respondent Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Respondent ID No:</label>
                                    <div class="controls">
                                        <input type="text" name="rid_no" required value=<?php echo $row['rid_no']; ?>>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Respondent Full Name:</label>
                                    <div class="controls">
                                        <input type="text" name="rfullname" required value=<?php echo $row['rfullname']; ?>>
                                    </div>
                                </div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Sex:</label>
                                    <div class="controls">
                                        <input type="text" name="rsex" required value=<?php echo $row['rsex']; ?>>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Date Of Birth:</label>
                                    <div class="controls">
                                        <input type="date" name="rdateofbirth" required value=<?php echo $row['rdateofbirth']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Place Of Birth:</label>
                                    <div class="controls">
                                        <input type="text" name="rplaceofbirth" required value=<?php echo $row['rplaceofbirth']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Nationality:</label>
                                    <div class="controls">
                                        <input type="text" name="rnationality" required value=<?php echo $row['rnationality']; ?>>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">No of Children:</label>
                                    <div class="controls">
                                        <input type="text" name="noofchild" required value=<?php echo $row['noofchild']; ?>>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">No of Children under 18:</label>
                                    <div class="controls">
                                        <input type="text" name="under18" required value=<?php echo $row['under18']; ?>>
                                    </div>
                                </div>
								  	
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Date of Separation</label>
                                    <div class="controls">
                                        <input type="date" name="dateofsep" required value=<?php echo $row['dateofsep']; ?>>
                                    </div>
                                </div>
								
								
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Place of Separation</label>
                                    <div class="controls">
                                        <input type="text" name="placeofsep" required value=<?php echo $row['placeofsep']; ?>>
                                    </div>
                                </div>	
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Time of Separation</label>
                                    <div class="controls">
                                        <input type="time" name="timeofsep" required value=<?php echo $row['timeofsep']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Approved By :</label>
                                    <div class="controls">
                                        <input type="text" name="approvedby" value=<?php echo $row['approvedby']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Date Approved:</label>
                                    <div class="controls">
                                        <input type="date" name="dateapprove" value=<?php echo $row['dateapprove']; ?>>
                                    </div>
                                </div>
                               							
								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="divindex1.php" class="btn">Back</a>
                                    </div>
                                </div>
                            </form>
							

							</div>
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysql_query("SELECT * FROM devorce WHERE reg_no = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
								
									$pid_no=$test['pid_no'];
									$pfullname= $test['pfullname'];
									$psex=$test['psex'];
									$pdateofbirth=$test['pdateofbirth'];
									$pplaceofbirth= $test['pplaceofbirth'];
									$pnation=$test['pnation'];
									$rid_no=$test['rid_no'];
									$rfullname=$test['rfullname'];
									$rsex=$test['rsex'];
									$rdateofbirth=$test['rdateofbirth'];
									$rplaceofbirth=$test['rplaceofbirth'];
									$rnationality= $test['rnationality'];
									$noofchild=$test['noofchild'];
									$under18=$test['under18'];
									$dateofsep=$test['dateofsep'];
									$placeofsep=$test['placeofsep'];
									$timeofsep=$test['timeofsep'];
									$approvedby=$test['approvedby'];
									$dateapprove=$test['dateapprove'];
				
                            
if (isset($_POST['update'])) {
									
									$pid_no_save=$_POST['pid_no'];
									$pfullname_save= $_POST['pfullname'];
									$psex_save=$_POST['psex'];
									$pdateofbirth_save=$_POST['pdateofbirth'];
									$pplaceofbirth_save= $_POST['pplaceofbirth'];
									$pnation_save= $_POST['pnation'];
									$rid_no_save=$_POST['rid_no'];
									$rfullname_save= $_POST['rfullname'];
									$rsex_save=$_POST['rsex'];
									$rdateofbirth_save=$_POST['rdateofbirth'];
									$rplaceofbirth_save= $_POST['rplaceofbirth'];
									$rnationality_save= $_POST['rnationality'];
									$noofchild_save=$_POST['noofchild'];
									$under18_save=$_POST['under18'];
									$dateofsep_save= $_POST['dateofsep'];
									$placeofsep_save= $_POST['placeofsep'];
									$timeofsep_save= $_POST['timeofsep'];
									$approvedby_save=$_POST['approvedby'];
									$dateapprove_save=$_POST['dateapprove'];
									
									
								
mysql_query("UPDATE devorce SET pid_no = '$pid_no_save' , pfullname = '$pfullname_save' ,psex ='$psex_save',pdateofbirth ='$pdateofbirth_save',
pplaceofbirth ='$pplaceofbirth_save',pnation ='$pnation_save',
rid_no = '$rid_no_save' , rfullname = '$rfullname_save' ,rsex ='$rsex_save',rdateofbirth ='$rdateofbirth_save',
rplaceofbirth ='$rplaceofbirth_save',rnationality ='$rnationality_save',
noofchild ='$noofchild_save',under18 ='$under18_save',dateofsep ='$dateofsep_save',placeofsep ='$placeofsep_save',timeofsep='$timeofsep_save',
approvedby ='$approvedby_save',dateapprove='$dateapprove_save' WHERE reg_no = '$id'") or die(mysql_error()); 	

?><script>
alert("Updated Successfully!");
</script><?php

					
								}
								?>
								</center>
								</center>

								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
</body>
</html>
								