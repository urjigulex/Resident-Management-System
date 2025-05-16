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
  $query=mysqli_query($con,"select * from messages where message_id ='$ID'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
  ?>
                 <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>request</h4></legend>                             
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">first name: </label>
                                    <div class="controls">
                                        <input type="text" name="fname" required value=<?php echo $row['fname']; ?>>
                                    </div>
							</div>
							<br>
								<label class="control-label" for="inputPassword">lname:: </label>
                                    <div class="controls">
                                        <input type="text" name="lname" required value=<?php echo $row['lname']; ?>>
                                    </div>
									<br>
									<label class="control-label" for="inputPassword">rtype:: </label>
                                    <div class="controls">
                                        <input type="text" name="rtype" required value=<?php echo $row['rtype']; ?>>
                                    </div>
									<br>
									<label class="control-label" for="inputPassword">message:: </label>
                                    <div class="controls">
                                        <input type="text" name="message" required value=<?php echo $row['message']; ?>>
                                    </div>
									<br>
								<label class="control-label" for="inputPassword">Email:: </label>
                                    <div class="controls">
                                        <input type="text" name="email" required value=<?php echo $row['email']; ?>>
                                    </div>
									
								 <br>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword"> message_date:</label>
                                    <div class="controls">
									
                                        <textarea  name="message"  rows="5" cols="50" required > <?php echo $row['message'];?></textarea>
			
                                    </div>
                                </div>
                                <br>
								<br/>
								 <div class="control-group">
                                    <div class="controls">									
                                    </div>
                                </div>
                            </form>
							

								</div>
								</div>
								</div>
								</div>
								</div>
							<center>
<a href="commessage.php"><img src="images/back.jpg" width="90"></a></center>

								
					
</body>
</html>
								