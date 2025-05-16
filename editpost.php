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
  $query=mysql_query("select * from post where post_id='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
               <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4 align="center">Edit your Post</h4></legend>
                                
                                
							                                    <label class="control-label" for="inputPassword">Title: </label>
                                    <div class="controls">
                                        <input type="text" name="title" required value=<?php echo $row['title']; ?>>
                                    </div>
                                   <br>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Message:</label>
                                    <div class="controls">
									
                                        <textarea  name="news"  rows="5" cols="50" required > <?php echo $row['news'];?></textarea>
			
                                    </div>

                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="posts.php" class="btn">Back</a>
                                    </div>

                                </div>
								 <div class="control-group">
                                    <div class="controls">

                                       									
                                    </div>
                                </div>
							
                            </form>						
							<?php
							
							
							$id=$_REQUEST['id'];
$result = mysql_query("SELECT * FROM post WHERE post_id = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
									$title= $test['title'];
									$news= $test['news'];	

if (isset($_POST['update'])) {
                               
									$title_save= $_POST['title'];
									$news_save= $_POST['news'];								
mysql_query("UPDATE post SET title = '$title_save' , news = '$news_save' WHERE post_id= '$id'") or die(mysql_error()); 	
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
								
