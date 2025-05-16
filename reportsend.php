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
  $query=mysql_query("select * from report where no='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
  <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>report</h4></legend>
                                
                                
																	<label class="control-label" for="inputPassword">report_type:: </label>
                                    <div class="controls">
                                        <input type="text" name="report_type" required value=<?php echo $row['report_type']; ?>>
                                    </div>
									<label class="control-label" for="inputPassword">report:: </label>
                                    <div class="controls">
                                        <input type="text" name="report" required value=<?php echo $row['report']; ?>>
                                    </div>
								
                                    
								 
								
                                
								<br/>
								 <div class="control-group">
                                    <div class="controls">

										<a href="comreport.php" class="btn">Back</a>
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
								