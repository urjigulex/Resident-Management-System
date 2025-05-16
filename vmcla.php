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
<div class="">
<div class="span12">
<div class="row-fluid">


<div class="span6
<center>
<?php
  $query=mysql_query("select * from smcl where no='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
               <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4 align="center">Message</h4></legend>
                                
                                
							
                                    <label class="control-label" for="inputPassword">From: </label>
                                    <div class="controls">
                                        <input type="text" name="name" required value=<?php echo $row['name']; ?>>
                                    </div>
                               <br>
								<label class="control-label" for="inputPassword">Email: </label>
                                    								     <br>
                                    <label class="control-label" for="inputPassword">message_date: </label>
                                    <div class="controls">
                                        <input type="text" name="Kebele" required value=<?php echo $row['message_date']; ?>>
                                    </div>
                                   <br>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Message:</label>
                                    <div class="controls">
									
                                        <textarea  name="message"  rows="5" cols="50" required > <?php echo $row['message'];?></textarea>
			
                                    </div>
                                </div>
								 <div class="control-group">
                                    <div class="controls">

                                       <div id="tooplate_copyright">
										</div>
									
                                    </div>
                                </div>
							
                            </form>
							

								</div>
								</div>
								</div>
								</div>

							
</body>
</html>
								

