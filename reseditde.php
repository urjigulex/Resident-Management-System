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
                                        <input type="text" name="name" required value=<?php echo $row['fname']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Middle Name:</label>
                                    <div class="controls">
                                        <input type="text" name="name" required value=<?php echo $row['mname']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Last Name:</label>
                                    <div class="controls">
                                        <input type="text" name="name" required value=<?php echo $row['lname']; ?>>
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
                                        <input type="text" name="pplaceofbirth" required value=<?php echo $row['placeofbirth']; ?>>
                                    </div>
                                </div>
<div class="control-group">
                                    <label class="control-label" for="inputPassword">Nationality:</label>
                                    <div class="controls">
                                        <input type="text" name="nationality" required value=<?php echo $row['nationality']; ?>>
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
                                    <label class="control-label" for="inputPassword">kebele:</label>
                                    <div class="controls">
                                        <input type="text" name="Kebele" required value=<?php echo $row['kebele']; ?>>
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
<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date of Death</label></td>
							<td width="30"></td>
							<td><input type="date" name="dateofdeath" placeholder="Date of Death" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place of Death</label></td>
							<td width="30"></td>
							<td><input type="text" name="placeofdeath" id="span9001" placeholder="Place of Death" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Cause of Death</label></td>
							<td width="30"></td>
						
							<td><input type="text" name="causeofdeath" id="span9001" placeholder="causeofdeath" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Time of Death</label></td>
							<td width="30"></td>
							<td><input type="time" name="timeofdeath" placeholder="Time of Death" required /></td>
						</tr>
<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Remark</label></td>
							<td width="30"></td>
							<td><input type="text" name="remark" id="span9001" placeholder="remark" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>


                                </div>
     <div class="control-group">
                                    <label class="control-label" for="inputPassword">Photo:</label>
                                    <div class="controls">
                                        <input type="file" name="image" required>
                                    </div>
                                </div>
<div class="control-group">
                                    <label class="control-label" for="inputPassword">Date of Reg:</label>
                                    <div class="controls">
                                        <input type="date" name="date" required>
                                    </div>
                                </div>


<div class="control-group">
                                    <label class="control-label" for="inputPassword">Approved By:</label>
                                    <div class="controls">
                                        <input type="text" name="approve" required >
                                    </div>
<div class="control-group">
 <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href=".php" class="btn">Back</a>
                                    </div>
                                </div>
                            </form>
											
							<?php
	include('db.php');

	if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
 
									else
										{

									move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
									$location=$_FILES["image"]["name"];
				$reg_no= $_POST['reg_no'];
									$name= $_POST['name'];					
									$age=
$_POST['age'];		
							           $sex=$_POST['sex'];
									$dateofbirth=$_POST['dateofbirth'];
									$placeofbirth= $_POST['pplaceofbirth'];
										                             $nation= $_POST['nationality'];
									$dateofdeath= $_POST['dateofdeath'];
									$placeofdeath= $_POST['placeofdeath'];
									$causeofdeath= $_POST['causeofdeath'];
									$timeofdeath= $_POST['timeofdeath'];
	$date= $_POST['date'];
		$approve= $_POST['approve'];
	
									$remark= $_POST['remark'];				
mysql_query("insert into death (reg_no,name,age,sex,dateofbirth,pplaceofbirth,nationality,dateofdeath,placeofdeath,causeofdeath,timeofdeath,date,approve,remark,location) 
						values('$reg_no','$name','$age','$sex','$dateofbirth','$placeofbirth','$nation','$dateofdeath','$placeofdeath','$causeofdeath','$timeofdeath','$date','$approve','$remark','$location')")or die(mysql_error());
?>
		<script>
						window.alert('Death Given successfully !');
				window.location.href='deathindex1.php';
				</script>

	<?php
					}	}}
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
		

