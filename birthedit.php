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
  $query=mysql_query("select * from birth where reg_no='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
 <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Image</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">
																			</div>
			
                                <hr>
								
								<table>
								<tr>
								<td><h4>Child Information	</h4></td>
								<td><h4>Mother Information	</h4></td>
								<td><h4>Father Information	</h4></td>
								</tr>
								<tr>
								<td colspan=3><center>Reg_no:<input type="text" name="reg_no" required value=<?php echo $row['reg_no']; ?>></center></td>
								</tr>
								<tr>
								<td colspan=3><hr></hr></td>
								</tr>
								<tr>
								<td>Full Name:<input type="text" name="childfullname" required value=<?php echo $row['childfullname']; ?>></td>
								<td>Full Name:<input type="text" name="motherfullname" required value=<?php echo $row['motherfullname']; ?>></td>
								<td>Full Name:<input type="text" name="fatherfullname" required value=<?php echo $row['fatherfullname']; ?>></td>
								</tr>
								<tr>
								<td>Sex: <select name="sex" style="background-color:#Green;" width="25">
											<option>Sex</option>
											<option>Male</option>
											<option>Female</option>
											</select></td>
                                <td>Age: <input type="text" name="mage" required value=<?php echo $row['mage']; ?>></td>  
								<td>Age: <input type="text" name="fage" required value=<?php echo $row['fage']; ?>></td> 								
								</tr>
                                <tr>
								<td>Date of Birth: <input type="date" name="dateofbirth" required value=<?php echo $row['dateofbirth']; ?>></td>
								<td>Nationality: <input type="text" name="mnation" required value=<?php echo $row['mnation']; ?>></td>
								<td>Nationality: <input type="text" name="fnation" required value=<?php echo $row['fnation']; ?>></td>
                                
								</tr>
								<tr>
								<td>Place of Birth <input type="text" name="placeofbirth" required value=<?php echo $row['placeofbirth']; ?>></td>
                                <td>Religion: <select name="freligion" style="background-color:#Green;" width="25">
								<option>Religion</option>
								<option>Orthodox  </option>
								<option>Islam</option>
								<option>Protestant </option>
								<option>Catholic</option>
								<option>other </option>
								</select></td>
								<td>Religion: <select name="mreligion" style="background-color:#Green;" width="25">
								<option>Religion</option>
								<option>Orthodox  </option>
								<option>Islam</option>
								<option>Protestant </option>
								<option>Catholic</option>
								<option>other </option>
								</select></td>      
								</tr>

								<tr>
								
								<td>Type of Birth: <select name="typeofbirth" style="background-color:#Green;" width="25" >
								<option>Type of Birth</option>
									<option>Single </option>
									<option>Twin </option>
									<option>Triplets </option>
									</select></td>
								<td>Occupation: <input type="text" name="moccupation" required value=<?php echo $row['moccupation']; ?>></td>
                                <td>Occupation: <input type="text" name="foccupation" required value=<?php echo $row['foccupation']; ?>></td>
								</tr>
								<tr>
								<td></td>
								<td>Address: <input type="text" name="maddress" required value=<?php echo $row['maddress']; ?>></td>
                                <td>Address: <input type="text" name="faddress" required value=<?php echo $row['faddress']; ?>></td>
								</tr>
								
								<tr>
								<td></td>
								<td>Telephone: <input type="text" name="mtel" required value=<?php echo $row['mtel']; ?>></td>
                                <td>Telephone: <input type="text" name="ftel" required value=<?php echo $row['ftel']; ?>></td>
								</tr>
								
																
								<td colspan=3>Date of Registration: <input type="date" name="datereg" required value=<?php echo $row['datereg']; ?>></td>
								</tr>
								<tr>
								<td colspan=3>Approved By: <input type="text" name="approvedby" required value=<?php echo $row['approvedby']; ?>></td>
								</tr>
					
								<tr>
								<td></td><td></td>
								<td>
								
								
                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>

   <button name="update" class="btn btn-" style="margin-right: 65px;"><a href="birthindex1.php">Back</a></button> 

										

								</td>
								</tr>
								
							
                            </form>
							
							
<?php
$id=$_REQUEST['id'];
if (isset($_POST['image'])) {

//image
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];

move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];

mysql_query(" UPDATE death SET location='$location' WHERE reg_no = '$id' ")or die(mysql_error());
//header('location:deathindex.php');
}
?>
							
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysql_query("SELECT * FROM birth WHERE reg_no = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
									$childfullname= $test['childfullname'];
									$sex=$test['sex'];
									$dateofbirth=$test['dateofbirth'];
									$placeofbirth=$test['placeofbirth'];
									$typeofbirth=$test['typeofbirth'];
									$motherfullname=$test['motherfullname'];
									$mage=$test['mage'];
									$mnation=$test['mnation'];
									$mreligion=$test['mreligion'];
									$moccupation=$test['moccupation'];
									$maddress=$test['maddress'];
									$mtel=$test['mtel'];
																		$fatherfullname=$test['fatherfullname'];
									$fage=$test['fage'];
									$fnation=$test['fnation'];
									$freligion=$test['freligion'];
									$foccupation=$test['foccupation'];
									$faddress=$test['faddress'];
									$ftel=$test['ftel'];

									$datereg=$test['datereg'];
									$approvedby=$test['approvedby'];
				
                            
if (isset($_POST['update'])) {
                               
									$childfullname_save= $_POST['childfullname'];
									$sex_save=$_POST['sex'];
									$dateofbirth_save= $_POST['dateofbirth'];
									$placeofbirth_save= $_POST['placeofbirth'];
									$typeofbirth_save= $_POST['typeofbirth'];
									$motherfullname_save= $_POST['motherfullname'];
									$mage_save= $_POST['mage'];
									$mnation_save= $_POST['mnation'];
									$mreligion_save= $_POST['mreligion'];
									$moccupation_save= $_POST['moccupation'];
									$maddress_save= $_POST['maddress'];
									$mtel_save= $_POST['mtel'];

									$fatherfullname_save= $_POST['fatherfullname'];
									$fage_save= $_POST['fage'];
									$fnation_save= $_POST['fnation'];
									$freligion_save= $_POST['freligion'];
									$foccupation_save= $_POST['foccupation'];
									$faddress_save= $_POST['faddress'];
									$ftel_save= $_POST['ftel'];
																	$datereg_save=$_POST['datereg'];
									$approvedby_save=$_POST['approvedby'];
			
mysql_query("UPDATE birth SET childfullname='$childfullname_save',
									sex='$sex_save',
									dateofbirth='$dateofbirth_save',
									placeofbirth='$placeofbirth_save',
									typeofbirth='$typeofbirth_save',
									motherfullname='$motherfullname_save',
									mage='$mage_save',
									mnation='$mnation_save',
									mreligion='$mreligion_save',
									moccupation='$moccupation_save',
									maddress='$maddress_save',
									mtel='$mtel_save',
									
									fatherfullname='$fatherfullname_save',
									fage='$fage_save',
									fnation='$fnation_save',
									freligion='$freligion_save',
									foccupation='$foccupation_save',
									faddress='$faddress_save',
									ftel='$ftel_save',
									
									datereg='$datereg_save',
									approvedby='$approvedby_save' WHERE reg_no = '$id'") or die(mysql_error());
						
					
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
								