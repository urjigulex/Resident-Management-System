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
  $query=mysql_query("select * from death where reg_no='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
  <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                
                                <hr>
                                <h4>Personal Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Reg_no:</label>
                                    <div class="controls">
                                        <input type="text" name="reg_no" required value=<?php echo $row['reg_no']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Full Name:</label>
                                    <div class="controls">
                                        <input type="text" name="name" required value=<?php echo $row['name']; ?>>
                                    </div>
                                </div>
	<div class="control-group">
                                    <label class="control-label" for="inputPassword">Age:</label>
                                    <div class="controls">
                                        <input type="text" name="age" required value=<?php echo $row['age']; ?>>
                                    </div>
                                </div>

                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Sex:</label>
                                    <div class="controls">
                                        <input type="text" name="sex" required value=<?php echo $row['sex']; ?>>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Date Of Birth:</label>
                                    <div class="controls">
                                        <input type="date" name="dateofbirth" required value=<?php echo $row['dateofbirth']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Place Of Birth:</label>
                                    <div class="controls">
                                        <input type="text" name="pplaceofbirth" required value=<?php echo $row['pplaceofbirth']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Date Of Death:</label>
                                    <div class="controls">
                                        <input type="date" name="dateofdeath" required value=<?php echo $row['dateofdeath']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Place of Death:</label>
                                    <div class="controls">
                                        <input type="text" name="placeofdeath" required value=<?php echo $row['placeofdeath']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Cause of Death:</label>
                                    <div class="controls">
                                        <input type="text" name="causeofdeath" required value=<?php echo $row['causeofdeath']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Time of Death:</label>
                                    <div class="controls">
                                        <input type="time" name="timeofdeath" required value=<?php echo $row['timeofdeath']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Remark :</label>
                                    <div class="controls">
                                        <input type="text" name="remark" value=<?php echo $row['remark']; ?>>
                                    </div>
                                </div>
								
                                </div>
								
								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="deathindex1.php" class="btn">Back</a>
                                    </div>
                                </div>
                            </form>

							
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysql_query("SELECT * FROM death WHERE reg_no = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
									$fname= $test['name'];
									$lname=$test['name'];
									$sex=$test['sex'];
									$dateofbirth=$test['dateofbirth'];
									$pplaceofbirth=$test['pplaceofbirth'];
									
									$dateofdeath=$test['dateofdeath'];
									$placeofdeath=$test['placeofdeath'];
						
									$causeofdeath=$test['causeofdeath'];
									$timeofdeath=$test['timeofdeath'];
									$remark=$test['remark'];
									
				
				
                            
if (isset($_POST['update'])) {
                               
									$name_save= $_POST['name'];
									$age_save=$_POST['age'];
									$sex_save= $_POST['sex'];
									$dateofbirth_save= $_POST['dateofbirth'];
									$pplaceofbirth_save= $_POST['pplaceofbirth'];
									$dateofdeath_save= $_POST['dateofdeath'];
									$placeofdeath_save= $_POST['placeofdeath'];
									$causeofdeath_save= $_POST['causeofdeath'];
									$timeofdeath_save= $_POST['timeofdeath'];
									$remark_save= $_POST['remark'];
									
								
mysql_query("UPDATE death SET name = '$name_save' , age = '$age_save' ,sex ='$sex_save',dateofbirth ='$dateofbirth_save',pplaceofbirth ='$pplaceofbirth_save',
dateofdeath ='$dateofdeath_save',placeofdeath ='$placeofdeath_save',causeofdeath ='$causeofdeath_save',timeofdeath ='$timeofdeath_save',
remark ='$remark_save' WHERE reg_no = '$id'") or die(mysql_error()); 	
//header("Location:deathindex.php");	

					
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
								