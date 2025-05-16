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
  $query=mysql_query("select * from comment where name='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
  <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>comment</h4></legend>
                                
                                
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">From: </label>
                                    <div class="controls">
                                        <input type="text" name="name" required value=<?php echo $row['name']; ?>>
                                    </div>
                                </div>
								<label class="control-label" for="inputPassword">Email:: </label>
                                    <div class="controls">
                                        <input type="text" name="email" required value=<?php echo $row['email']; ?>>
                                    </div>
								 
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Message:</label>
                                    <div class="controls">
									
                                        <textarea  name="comment"  rows="5" cols="50" required > <?php echo $row['comment'];?></textarea>
			
                                    </div>
                                </div>
                                
								<br/>
								 <div class="control-group">
                                    <div class="controls">

                                       <div id="tooplate_copyright">
									   Send Replay via:-<br>
										<a href="http://gmail.com">Gmail.com</a></br>
										<a href="http://yahoo.com">Yahoo.com</a> 
										</div>
										<a href="comindex1.php" class="btn">Back</a>
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
								