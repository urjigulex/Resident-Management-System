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
  $query=mysql_query("select * from usermessage where message_id ='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
  <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>View request</h4></legend>                             
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
                                    								 <br>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword"> message_date:</label>
                                    <div class="controls">
									
                                        <textarea  name="message"  rows="5" cols="50" required > <?php echo $row['message'];?></textarea>
			
                                    </div>
                                </div>
                                
								<br/>
								 <div class="control-group">
                                    <div class="controls">
                                       <div id="tooplate_copyright">
									   <br>
									  <td>
<br>
	</td> 
<td>
										<a href="comm.php" class="btn">Back</a>
					
										 
										</div>
									
                                    </div>
                                </div>
                            </form>
							
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
								