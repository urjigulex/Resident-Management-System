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
                                                                 </div>
                                <hr>
                                <h4>Child Information</h4>
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
                                        <input type="text" name="childfullname" required value=<?php echo $row['fname']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Middle Name:</label>
                                    <div class="controls">
                                        <input type="text" name="childfullname" required  value=<?php echo $row['mname']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Last Name:</label>
                                    <div class="controls">
                                        <input type="text" name="childfullname" required value=<?php echo $row['lname']; ?>>
                                    </div>
                                </div>
      
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Age:</label>
                                    <div class="controls">
                                        <input type="text" name="chage" required value=<?php echo $row['age']; ?>>
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
                                    <label class="control-label" for="inputPassword">Nationality:</label>
                                    <div class="controls">
                                        <input type="text" name="nationality" required value=<?php echo $row['nationality']; ?>>
                                    </div>
                                </div>
								
<label style="color:#3a87ad; font-size:18px;">Type of Birth</label></td>
					
<select name="typeofbirth" style="background-color:#Green;" width="25" >
								
									<option>Single </option>
									<option>Twin </option>
									<option>Triplets </option>
									</select>
<h4><u>Mother Information</u></h4>							<td> <label style="color:#3a87ad; font-size:18px;">Full Name </label></td>
							<td width="30"></td>
							<td><input type="text" name="motherfullname" id="span9001" placeholder="Full Name" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age</label></td>
							<td width="30"></td>
							<td><input type="text" name="mage" id="span9001" placeholder="Age" required pattern="([1-9])+(?:-?\d){0,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">mnation</label></td>
							<td width="30"></td>
							<td><select name="mnation" style="background-color:#Green;" width="25">
								<option>Ethiopian  </option>
								<option>America</option>
								<option>Sudan </option>
								<option>Kenya</option>
								<option>other </option>
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Religion</label></td>
							<td width="30"></td>
							<td><select name="mreligion" style="background-color:#Green;" width="25">
								<option>Religion</option>
								<option>Orthodox  </option>
								<option>Islam</option>
								<option>Protestant </option>
								<option>Catholic</option>
								<option>other </option>
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Occupation</label></td>
							<td width="30"></td>
							<td><input type="text" name="moccupation" id="span9001" placeholder="Occupation" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Address</label></td>
							<td width="30"></td>
							<td><input type="text" name="maddress" id="span9001" placeholder="Address" pattern="[A-Z a-z]{3,}" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Telephone</label></td>
							<td width="30"></td>
							<td><input type="text" name="mtel" id="span9001" placeholder="Telephone"  required pattern="[0&9]{2}[0-9]{8}"/></td>
						</tr>
<td colspan=3> <h4><u>Father Information</u></h4></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Full Name </label></td>
							<td width="30"></td>
							<td><input type="text" name="fatherfullname" id="span9001" placeholder="Full Name" required pattern="[A-Z a-z]{3,}"value=<?php echo $row['mname']; ?>>
</td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age</label></td>
							<td width="30"></td>
							<td><input type="text" name="fage" id="span9001" placeholder="Age" required pattern="([1-9])+(?:-?\d){0,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Natvionality</label></td>
							<td width="30"></td>
							<td><select name="fnation" style="background-color:#Green;" width="25">
								<option>Ethiopian</option>
								<option>American</option>
								<option>Sudan </option>
								<option>Kenya</option>
								<option>other </option>
								</select></td>
							
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Religion</label></td>
							<td width="30"></td>
							<td><select name="freligion" style="background-color:#Green;" width="25">
								<option>Religion</option>
								<option>Orthodox  </option>
								<option>Islam</option>
								<option>Protestant </option>
								<option>Catholic</option>
								<option>other </option>
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Occupation</label></td>
							<td width="30"></td>
							<td><input type="text" name="foccupation" id="span9001" placeholder="Occupation" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Address</label></td>
							<td width="30"></td>
							<td><input type="text" name="faddress" id="span9001" placeholder="Address" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Telephone</label></td>
							<td width="30"></td>
							<td><input type="text" name="ftel" id="span9001" placeholder="Telephone" required pattern="[0&9]{2}[0-9]{8}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date of Registration</label></td>
							<td width="30"></td>
							<td><input type="date" name="datereg" placeholder="Date of Reg" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Approved By</label></td>
							<td width="30"></td>
							<td><input type="text" name="approvedby" id="span9001" placeholder="Approved By" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
							<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Image</label></td>
							<td width="30"></td>
							<td><input type="file"name="image"  /></td>
						</tr>

					                                    </div>
                                </div>


                                </div>
     <div class="control-group">
 <div class="controls">

                                        &nbsp;<button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href=".php" class="btn">Back</a>
                                    </div>
                                </div>
                            </form>
											
							<?php
	include('db.php');
						if (!isset($_FILES['image']['tmp_name'])) {
							
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
									$childfullname= $_POST['childfullname'];
									$sex=$_POST['sex'];
									$dateofbirth=$_POST['dateofbirth'];
									$placeofbirth= $_POST['placeofbirth'];
									$typeofbirth= $_POST['typeofbirth'];
									$motherfullname= $_POST['motherfullname'];
									$mage= $_POST['mage'];
									$mnation= $_POST['mnation'];
									$mreligion= $_POST['mreligion'];
									$moccupation= $_POST['moccupation'];
									$maddress= $_POST['maddress'];
									$mtel= $_POST['mtel'];
								
									$fatherfullname= $_POST['fatherfullname'];
									$fage= $_POST['fage'];
									$fnation= $_POST['fnation'];
									$freligion= $_POST['freligion'];
									$foccupation= $_POST['foccupation'];
									$faddress= $_POST['faddress'];
									$ftel= $_POST['ftel'];
									
									$datereg= $_POST['datereg'];
									$approvedby= $_POST['approvedby'];
									
									
								mysql_query("insert into birth (childfullname,sex,dateofbirth,placeofbirth,typeofbirth,motherfullname,mage,mnation,mreligion,moccupation,maddress,mtel,
								fatherfullname,fage,fnation,freligion,foccupation,faddress,ftel,datereg,approvedby) 
						values('$childfullname','$sex','$dateofbirth','$placeofbirth','$typeofbirth','$motherfullname','$mage','$mnation','$mreligion','$moccupation'
						,'$maddress','$mtel','$fatherfullname','$fage','$fnation','$freligion','$foccupation','$faddress','$ftel','$datereg','$approvedby')")or die(mysql_error());

					
						?>					
					
					<script>
						window.alert('Birth Given successfully !');
				window.location.href='birthindex1.php';
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
		
