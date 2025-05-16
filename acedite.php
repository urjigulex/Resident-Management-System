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
  $query=mysql_query("select * from users where phone='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
 <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                									
			
                                <hr>
								
								<table>
<tr><td>Phone Number:<input type="text" name="user_email" required value=<?php echo $row['phone']; ?>></td></tr>
<tr><td>User_email:<input type="text" name="user_email" required value=<?php echo $row['user_email']; ?>></td></tr>
								<tr><td>Privilege:<input type="text" name="privilege" required value=<?php echo $row['privilege']; ?>></td></tr>
<tr><td>User_Name:<input type="text" name="username" required value=<?php echo $row['username']; ?>></td></tr>
<tr><td>Password: <input type="text" name="password" required value=<?php echo $row['password']; ?>></td></tr>  
								</tr><td>State: <input type="text" name="state" required value=<?php echo $row['state']; ?>></td></tr><tr>
						<td></td><td></td>
								<td>
								
                                        <button type="submit" name="update" class="btn btn-success" style="margin-center: 65px;">Save</button></td></tr>		
                            </form>
						</table>	
							
							<?php
						$id=$_REQUEST['id'];

$result = mysql_query("SELECT * from res_account  WHERE phone= '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				                           $user_email=$test['user_email'];
									$privilege=$test['privilege'];
									$username=$test['username'];
									$password=$test['password'];
									$state=$test['state'];				
if (isset($_POST['update'])) {
                               
	          						$user_email_save= $_POST['user_email'];
									$privilege_save=$_POST['privilege'];
									$username_save= $_POST['username'];
									$password_save= $_POST['password'];
							       	$state_save= $_POST['state'];			
mysql_query("UPDATE users SET   user_email='$user_email_save',
							privilege='$privilege_save',
									username='$username_save',
									password='$password_save',
									state='$state_save'	WHERE phone= '$id'") or die(mysql_error());
										
?><script>
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
								

