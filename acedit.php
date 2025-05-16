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
  $query=mysqli_query($con,"select * from res_account where phone='$ID'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
  ?>
 <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                									
			
                                <hr>
								
								<table>
<tr><td>Phone Number:<input type="text" name="user_email" readonly="readonly" required value=<?php echo $row['phone'];?>></td></tr>
<tr><td>User_ID:<input type="text" name="user_id"readonly="readonly"  required value=<?php echo $row['user_id']; ?>></td></tr>
								<tr><td>Privilege:<input type="text" name="privilege" required value=<?php echo $row['privilege']; ?>></td></tr>
<tr><td>User_Name:<input type="text" name="username" required value=<?php echo $row['username']; ?>></td></tr>
<tr><td>Password: <input type="text" name="password" required value=<?php echo $row['password']; ?>></td></tr>  
								</tr><td>State: <input type="text" name="state" required value=<?php echo $row['state']; ?>></td></tr><tr>
						<td></td><td></td>
								<td>
								
                                        <button type="submit" name="update" class="btn btn-success" style="margin-center: 65px;">Save</button><button name="Back" class="btn btn-default" style="margin-center: 65px;"><a href="manres.php">Back</button></td></tr>		
                            </form>
						</table>	
							
							<?php
						$id=$_REQUEST['id'];

$result = mysqli_query($con,"SELECT * from res_account  WHERE phone= '$ID'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}

									$privilege=$test['privilege'];
									$username=$test['username'];
									$password=$test['password'];
									$state=$test['state'];				
if (isset($_POST['update'])) {
                               
									$privilege_save=$_POST['privilege'];
									$username_save= $_POST['username'];
									$password_save= $_POST['password'];
							       	$state_save= $_POST['state'];			
mysqli_query($con,"UPDATE res_account SET
							privilege='$privilege_save',
									username='$username_save',
									password='$password_save',
									state='$state_save'	WHERE phone= '$id'") or die(mysqli_error($con));
										
?> <script>
alert("This account is Updated Successfully!");
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
								
