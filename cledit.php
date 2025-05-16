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


<div class="span6">

<center>
<?php
  $query=mysql_query("select * from withdrawal where IdNumber='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
               <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4 align="center">Edit this Information</h4></legend>
                                
                                
							                                    <label class="control-label" for="inputPassword">Id Number: </label>
                                    <div class="controls">
                                        <input type="text" name="IdNumber" required value=<?php echo $row['IdNumber']; ?>>
                                    </div>
                                   <br>
															                                    <label class="control-label" for="inputPassword">FirstName: </label>
                                    <div class="controls">
                                        <input type="text" name="FirstName" required value=<?php echo $row['FirstName']; ?>>
                                    </div>
                                  <br>		                             <label class="control-label" for="inputPassword">middleName: </label>
                                    <div class="controls">
                                        <input type="text" name="middleName" required value=<?php echo $row['middleName']; ?>>
                                    </div>
                                   <br>
							                                    <label class="control-label" for="inputPassword">LastName: </label>
                                    <div class="controls">
                                        <input type="text" name="LastName" required value=<?php echo $row['LastName']; ?>>
                                    </div>
                                   <br>
							                                    <label class="control-label" for="inputPassword">Age: </label>
                                    <div class="controls">
                                        <input type="text" name="age" required value=<?php echo $row['age']; ?>>
                                    </div>
                                   <br>
							                                    <label class="control-label" for="inputPassword">Sex: </label>
                                    <div class="controls">
                                        <input type="text" name="sex" required value=<?php echo $row['sex']; ?>>
                                    </div>
                                   <br>                                    <label class="control-label" for="inputPassword">Reason_Of_Clearance: </label>
                                    <div class="controls">
                                        <input type="text" name="Reason_Of_Clearance" required value=<?php echo $row['Reason_Of_Clearance']; ?>>
                                    </div>
                                   <br>
							                                    <label class="control-label" for="inputPassword">Date_Of_Taken: </label>
                                    <div class="controls">
                                        <input type="text" name="Date_Of_Taken" required value=<?php echo $row['Date_Of_Taken']; ?>>
                                    </div>
                                   <br>
							                                    <label class="control-label" for="inputPassword">Approve By: </label>
                                    <div class="controls">
                                        <input type="text" name="approve" required value=<?php echo $row['approve']; ?>>
                                    </div>
                                   <br>

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="viewclearance.php" class="btn">Back</a>
                                    </div>

                                </div>
								 <div class="control-group">
                                    <div class="controls">

                                       									
                                    </div>
                                </div>
							
                            </form>						
							<?php
							
							
							$id=$_REQUEST['id'];
$result = mysql_query("SELECT * FROM withdrawal WHERE IdNumber= '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
$FirstName= $test['FirstName'];
$approve= $test['approve'];
$middleName= $test['middleName'];	
$LastName= $test['LastName'];	
$middleName= $test['middleName'];	
$age= $test['age'];	
$Date_Of_Taken= $test['Date_Of_Taken'];	
$sex= $test['sex'];	
$Reason_Of_Clearance= $test['Reason_Of_Clearance'];	
if (isset($_POST['update'])) {
      $FirstName_save= $_POST['FirstName'];				      $approve_save= $_POST['approve'];					$middleName_save= $_POST['middleName'];					$LastName_save= $_POST['LastName'];					$age_save= $_POST['age'];					
      $sex_save= $_POST['sex'];					$Reason_Of_Clearance_save= $_POST['Reason_Of_Clearance'];		$Date_Of_Taken_save= $_POST['Date_Of_Taken'];								
mysql_query("UPDATE withdrawal SET FirstName = '$FirstName_save' ,middleName = '$middleName_save',LastName='$LastName_save',age='$age_save',sex='$sex_save',Reason_Of_Clearance='$Reason_Of_Clearance_save',Date_Of_Taken='$Date_Of_Taken_save',approve='$approve_save' WHERE IdNumber= '$id'") or die(mysql_error()); 	
?><script>
alert("Updated Successfully!");
</script><?php

					
								}
								?>

							

								</div>
								</div>
								</div>
								</div>

							
</body>
</html>
								

