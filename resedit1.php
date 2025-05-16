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
  $query=mysql_query("select * from resident where reg_no='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
 <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Image</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">
										<?php if($row['plocation'] != ""): ?>
										<img src="upload/<?php echo $row['plocation']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
										<?php else: ?>
										<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
										<?php endif; ?>
									</label>
                                    <div class="controls">
                                        <input type="file" name="image" style="margin-left:27px;">
										<button type="submit" name="image" class="btn btn-success" style="margin-top: 20px; margin-right: 131px;">Update</button>
                                    </div>
                                </div>
                                <hr>
                                <h4>Personal Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Registration No:</label>
                                    <div class="controls">
                                        <input type="text" name="reg_no" required value=<?php echo $row['reg_no']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">First Name:</label>
                                    <div class="controls">
                                        <input type="text" name="fname" required value=<?php echo $row['fname']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Middle Name:</label>
                                    <div class="controls">
                                        <input type="text" name="mname" required value=<?php echo $row['mname']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Last Name:</label>
                                    <div class="controls">
                                        <input type="text" name="lname" required value=<?php echo $row['lname']; ?>>
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
                                        <input type="text" name="placeofbirth" required value=<?php echo $row['placeofbirth']; ?>>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Region:</label>
                                    <div class="controls">
                                        <input type="text" name="region" required value=<?php echo $row['region']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Zone:</label>
                                    <div class="controls">
                                        <input type="text" name="zone" required value=<?php echo $row['zone']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Woreda:</label>
                                    <div class="controls">
                                        <input type="text" name="woreda" required value=<?php echo $row['woreda']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Nationality:</label>
                                    <div class="controls">
                                        <input type="text" name="nationality" required value=<?php echo $row['nationality']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">House No:</label>
                                    <div class="controls">
                                        <input type="text" name="houseno" required value=<?php echo $row['houseno']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Occupation:</label>
                                    <div class="controls">
                                        <input type="text" name="occupation" required value=<?php echo $row['occupation']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Phone</label>
                                    <div class="controls">
                                        <input type="text" name="phone" required value=<?php echo $row['phone']; ?>>
                                    </div>
                                </div>
								
								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										
                                    </div>
                                </div>
                            </form>
							
<?php
$id=$_REQUEST['id'];
if (isset($_POST['image'])) {

//image
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];

move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
$plocation=$_FILES["image"]["name"];

mysql_query(" UPDATE resident SET plocation='$plocation' WHERE reg_no = '$id' ")or die(mysql_error());
//header('location:resindex1.php');
}
?>
							
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysql_query("SELECT * FROM resident WHERE reg_no = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
									$fname= $test['fname'];
									$mname= $test['mname'];
									$lname= $test['lname'];
									$fname=$test['fname'];
									$mname=$test['mname'];
									$lname=$test['lname'];
									$lname=$test['age'];
									$sex=$test['sex'];
									$dateofbirth=$test['dateofbirth'];
									$placeofbirth=$test['placeofbirth'];
									$region=$test['region'];
									$zone=$test['zone'];
									$woreda=$test['woreda'];
									$nationality=$test['nationality'];
									$houseno=$test['houseno'];
									$dategiven=$test['occupation'];
									$approvedby=$test['phone'];
				
				
                            
if (isset($_POST['update'])) {
                               
									$fname_save= $_POST['fname'];
									$mname_save= $_POST['mname'];
									$lname_save= $_POST['lname'];
									$age_save=$_POST['age'];
									$sex_save= $_POST['sex'];
									$dateofbirth_save= $_POST['dateofbirth'];
									$placeofbirth_save= $_POST['placeofbirth'];
									
									$region_save= $_POST['region'];
									$zone_save= $_POST['zone'];
									$woreda_save= $_POST['woreda'];
									$nationality_save= $_POST['nationality'];
									
									$houseno_save=$_POST['houseno'];
									$occupation_save=$_POST['occupation'];
									$phone_save=$_POST['phone'];
								
mysql_query("UPDATE resident SET fname = '$fname_save' , mname = '$mname_save' , lname ='$lname_save',
age = '$age_save' ,sex ='$sex_save',dateofbirth ='$dateofbirth_save',placeofbirth ='$placeofbirth_save',region ='$region_save',zone ='$zone_save',woreda ='$woreda_save',
nationality ='$nationality_save',houseno ='$houseno_save',occupation ='$occupation_save',phone ='$phone_save' WHERE reg_no = '$id'") or die(mysql_error()); 	

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
								