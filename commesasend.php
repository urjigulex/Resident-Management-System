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
  $query=mysqli_query($con,"select * from messag where message_id ='$ID'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
  ?>
  <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4> replay message</h4></legend>    
								<label class="control-label" for="inputPassword">reg_no: </label>
                                    <div class="controls">
                                        <input type="text" name="reg_no" required value=<?php echo $row['reg_no']; ?>>
                                    </div>
							
                                    <div class="control-group">
                                    <label class="control-label" for="inputPassword">first name: </label>
                                    <div class="controls">
                                        <input type="text" name="fname" required value=<?php echo $row['fname']; ?>>
                                    </div>
									
                                </div>
								
                                    	
								<label class="control-label" for="inputPassword">lname:: </label>
                                    <div class="controls">
                                        <input type="text" name="lname" required value=<?php echo $row['lname']; ?>>
                                    </div>							
								<div class="control-group">
                                    <label class="control-label" for="inputPassword"> message:</label>
                                    <div class="controls">
									
                                        <textarea  name="message"  rows="5" cols="50" required > <?php echo $row['message'];?></textarea>
			
                                    </div>
                                </div>
                                
								<br/>
								 <div class="control-group">
                                    <div class="controls">                                    
										<a href="commesa.php" class="btn">Back</a>
                                    </div>
                                </div>
                            </form>
							

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
								