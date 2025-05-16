<?php 
include ('db.php'); 
include ('header1.php'); 
$ID=$_GET['id'];
?>
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
  $query=mysql_query("select * from marriage where reg_no='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
  <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Image</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">
										<?php if($row['hlocation'] != ""): ?>
										<img src="upload/<?php echo $row['hlocation']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
										<?php else: ?>
										<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
										<?php endif; ?>
									</label>
									<div class="controls">
                                        <input type="file" name="image" style="margin-left:27px;">
										<button type="submit" name="image" class="btn btn-success" style="margin-top: 20px; margin-right: 131px;">Update</button>
                                    </div>
									</div>
									
									<div>
									 <label class="control-label" for="inputPassword">
										<?php if($row['wlocation'] != ""): ?>
										<img src="upload/<?php echo $row['wlocation']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
										<?php else: ?>
										<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
										<?php endif; ?>
									</label>
                                    <div class="controls">
                                        <input type="file" name="image1" style="margin-left:27px;">
										<button type="submit" name="image1" class="btn btn-success" style="margin-top: 20px; margin-right: 131px;">Update</button>
                                    </div>
                                </div>
                                <hr>
								
								<table>
								<tr>
								<td><h4>Husband Information	</h4></td>
								<td><h4>Wife Information	</h4></td>
								</tr>
								<tr>
								<td colspan=2><center>Reg_no:<input type="text" name="reg_no" required value=<?php echo $row['reg_no']; ?>></center></td>
								
								</tr>
								<tr>
								<td>HID No:<input type="text" name="hid_no" required value=<?php echo $row['hid_no']; ?>></td>
								<td>WID No:<input type="text" name="wid_no" required value=<?php echo $row['wid_no']; ?>></td>
								</tr>
								<tr>
								<td>First Name: <input type="text" name="hfirstname" required value=<?php echo $row['hfirstname']; ?>></td>
                                <td>First Name: <input type="text" name="wfirstname" required value=<?php echo $row['wfirstname']; ?>></td>   
								</tr>
                                <tr>
								<td>Middle Name: <input type="text" name="hmiddlename" required value=<?php echo $row['hmiddlename']; ?>></td>
                                <td>Middle Name: <input type="text" name="wmiddlename" required value=<?php echo $row['wmiddlename']; ?>></td>   
								</tr>
								<tr>
								<td>Last Name: <input type="text" name="hlastname" required value=<?php echo $row['hlastname']; ?>></td>
                                <td>Last Name: <input type="text" name="wlastname" required value=<?php echo $row['wlastname']; ?>></td>   
								</tr>
								
								<tr>
								<td>Date of Birth: <input type="date" name="hdateofbirth" required value=<?php echo $row['hdateofbirth']; ?>></td>
                                <td>Date of Birth: <input type="date" name="wdateofbirth" required value=<?php echo $row['wdateofbirth']; ?>></td>
								</tr>
								<tr>
								<td>Place of Birth: <input type="text" name="hplaceofbirth" required value=<?php echo $row['hplaceofbirth']; ?>></td>
                                <td>Place of Birth: <input type="text" name="wplaceofbirth" required value=<?php echo $row['wplaceofbirth']; ?>></td>
								</tr>
								<td>Nationality: <input type="text" name="hnation" required value=<?php echo $row['hnation']; ?>></td>
								<td>Nationality: <input type="text" name="wnation" required value=<?php echo $row['wnation']; ?>></td>
								</tr>
								<td>Civil Status: <input type="text" name="hstatus" required value=<?php echo $row['hstatus']; ?>></td>
								<td>Civil Status: <input type="text" name="wstatus" required value=<?php echo $row['wstatus']; ?>></td>
								</tr>
								<td>Mother Name: <input type="text" name="hmothername" required value=<?php echo $row['hmothername']; ?>></td>
								<td>Mother Name: <input type="text" name="wmothername" required value=<?php echo $row['wmothername']; ?>></td>
								</tr>
								<td>Nationality: <input type="text" name="hmothernation" required value=<?php echo $row['hmothernation']; ?>></td>
								<td>Nationality: <input type="text" name="wmothernation" required value=<?php echo $row['wmothernation']; ?>></td>
								</tr>
								<td colspan=2>Date of Marriage: <input type="date" name="datemarriage" required value=<?php echo $row['datemarriage']; ?>></td>
								</tr>
								<tr>
								<td colspan=2>Place of Marriage: <input type="text" name="placemarriage" required value=<?php echo $row['placemarriage']; ?>></td>
								</tr>
								<tr>
								<td colspan=2>Time of Marriage: <input type="time" name="timemarriage" required value=<?php echo $row['timemarriage']; ?>></td>
								</tr>
								<tr>
								<td colspan=2>Approved By: <input type="text" name="approvedby" required value=<?php echo $row['approvedby']; ?>></td>
								</tr>
								<tr>
								<td colspan=2>Date Approved: <input type="date" name="dateapprove" required value=<?php echo $row['dateapprove']; ?>></td>
								</tr>
								<tr>
								<td colspan=2>Wittness1: <input type="text" name="wittness1" required value=<?php echo $row['wittness1']; ?>></td>
								</tr>
								<tr >
								<td colspan=2>Wittness2: <input type="text" name="wittness2" required value=<?php echo $row['wittness2']; ?>></td>
								</tr>
								<tr>
								<td colspan=2>Wittness3: <input type="text" name="wittness3" required value=<?php echo $row['wittness3']; ?>></td>
								</tr>
								<tr>
								<td></td>
								<td>
								
								
                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="marrindex1.php" class="btn">Back</a>

								</td>
								</tr>
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
$hlocation=$_FILES["image"]["name"];
mysql_query(" UPDATE marriage SET hlocation='$hlocation' WHERE reg_no = '$id' ")or die(mysql_error());
}

if (isset($_POST['image1'])) {

							$image = $_FILES["image1"] ["name"];
							$image_name= addslashes($_FILES['image1']['name']);
							$size = $_FILES["image1"] ["size"];

move_uploaded_file($_FILES["image1"]["tmp_name"],"upload/" . $_FILES["image1"]["name"]);			
$wlocation=$_FILES["image1"]["name"];

mysql_query(" UPDATE marriage SET wlocation='$wlocation' WHERE reg_no = '$id' ")or die(mysql_error());
//header('location:deathindex.php');
}
?>
							
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysql_query("SELECT * FROM marriage WHERE reg_no = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
									$hid_no= $test['hid_no'];
									$hfirstname=$test['hfirstname'];
									$hmiddlename=$test['hmiddlename'];
									$hlastname=$test['hlastname'];
									
									$hdateofbirth=$test['hdateofbirth'];
									$hplaceofbirth=$test['hplaceofbirth'];
									$hnation=$test['hnation'];
									$hstatus=$test['hstatus'];
									$hmothername=$test['hmothername'];
									$hmothernation=$test['hmothernation'];
									$wid_no= $test['wid_no'];
									$wfirstname=$test['wfirstname'];
									$wmiddlename=$test['wmiddlename'];
									$wlastname=$test['wlastname'];
									
									$wdateofbirth=$test['wdateofbirth'];
									$wplaceofbirth=$test['wplaceofbirth'];
									$wnation=$test['wnation'];
									$wstatus=$test['wstatus'];
									$wmothername=$test['wmothername'];
									$wmothernation=$test['wmothernation'];
									$datemarriage= $test['datemarriage'];
									$placemarriage= $test['placemarriage'];
									$timemarriage= $test['timemarriage'];
									$approvedby=$test['approvedby'];
									$dateapprove=$test['dateapprove'];
									$wittness1=$test['wittness1'];
									$wittness2=$test['wittness2'];
									$wittness3=$test['wittness3'];
									
				
				
                            
if (isset($_POST['update'])) {
                              
									$hid_no_save= $_POST['hid_no'];
									$hfirstname_save= $_POST['hfirstname'];
									$hmiddlename_save= $_POST['hmiddlename'];
									$hlastname_save=$_POST['hlastname'];
									
									$hdateofbirth_save=$_POST['hdateofbirth'];
									$hplaceofbirth_save= $_POST['hplaceofbirth'];
									$hnation_save= $_POST['hnation'];
									$hstatus_save= $_POST['hstatus'];
									$hmothername_save= $_POST['hmothername'];
									$hmothernation_save= $_POST['hmothernation'];
									$wid_no_save= $_POST['wid_no'];
									$wfirstname_save= $_POST['wfirstname'];
									$wmiddlename_save= $_POST['wmiddlename'];
									$wlastname_save=$_POST['wlastname'];
									
									$wdateofbirth_save=$_POST['wdateofbirth'];
									$wplaceofbirth_save= $_POST['wplaceofbirth'];
									$wnation_save= $_POST['wnation'];
									$wstatus_save= $_POST['wstatus'];
									$wmothername_save= $_POST['wmothername'];
									$wmothernation_save= $_POST['wmothernation'];
									$datemarriage_save= $_POST['datemarriage'];
									$placemarriage_save= $_POST['placemarriage'];
									$timemarriage_save= $_POST['timemarriage'];
									$approvedby_save= $_POST['approvedby'];
									$dateapprove_save= $_POST['dateapprove'];
									$wittness1_save= $_POST['wittness1'];
									$wittness2_save= $_POST['wittness2'];
									$wittness3_save= $_POST['wittness3'];
								
	mysql_query("UPDATE marriage SET hid_no = '$hid_no_save',
									hfirstname = '$hfirstname_save',
									hmiddlename = '$hmiddlename_save',
									hlastname = '$hlastname_save',
									
									hdateofbirth = '$hdateofbirth_save',
									hplaceofbirth = '$hplaceofbirth_save',
									hnation = '$hnation_save',
									hstatus = '$hstatus', 
									hmothername = '$hmothername_save',
									hmothernation = '$hmothernation_save',
									wid_no = '$wid_no_save',
									wfirstname = '$wfirstname_save' ,
									wmiddlename = '$wmiddlename_save' ,
									wlastname = '$wlastname_save',
									
									wdateofbirth = '$wdateofbirth_save',
									wplaceofbirth = '$wplaceofbirth_save',
									wnation = '$wnation_save',
									wstatus = '$wstatus_save',
									wmothername = '$wmothername_save',
									wmothernation = '$wmothernation_save',
									datemarriage = '$datemarriage_save',
									placemarriage = '$placemarriage_save',
									timemarriage = '$timemarriage_save',
									approvedby = '$approvedby_save',
									dateapprove= '$dateapprove_save',
									wittness1 = '$wittness1_save',
									wittness2 = '$wittness2_save',
									wittness3 = '$wittness3_save'
									WHERE reg_no='$id'") or die(mysql_error()); 	

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
								