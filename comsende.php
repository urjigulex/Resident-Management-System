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
  $query=mysql_query("select * from comment where no='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
               <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4 align="center">comment</h4></legend>
                                
                                
							
                                    <label class="control-label" for="inputPassword">From: </label>
                                    <div class="controls">
                                        <input type="text" name="name" required value=<?php echo $row['name']; ?>>
                                    </div>
                               <br>
								<label class="control-label" for="inputPassword">Email: </label>
                                    <div class="controls">
                                        <input type="text" name="email" required value=<?php echo $row['email']; ?>>
                                    </div>
								     <br>
                                    <label class="control-label" for="inputPassword">Kebele: </label>
                                    <div class="controls">
                                        <input type="text" name="Kebele" required value=<?php echo $row['kebele']; ?>>
                                    </div>
                                   <br>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Message:</label>
                                    <div class="controls">
									
                                        <textarea  name="comment"  rows="5" cols="50" required > <?php echo $row['comment'];?></textarea>
			
                                    </div>
                                </div>
								 <div class="control-group">
                                    <div class="controls">

                                       									
                                    </div>
                                </div>
							
                            </form>
							

								</div>
								</div>
								</div>
								</div>							<center>
<a href="comindex1.php"><img src="images/back.jpg" width="90"></a></center>


							
</body>
</html>
								