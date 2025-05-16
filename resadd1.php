<?php
	include('db.php');
							
							if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

									move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
									$plocation=$_FILES["image"]["name"];
									
									$fname= $_POST['fname'];
									$mname= $_POST['mname'];
									$lname=$_POST['lname'];
	$age=$_POST['age'];
									
									$sex= $_POST['sex'];
									$dateofbirth= $_POST['dateofbirth'];
									$placeofbirth= $_POST['placeofbirth'];
									$region= $_POST['region'];
									$zone= $_POST['zone'];
									$woreda= $_POST['woreda'];
									$nationality= $_POST['nationality'];
									$houseno= $_POST['houseno'];
									$occupation= $_POST['occupation'];
									$phone= $_POST['phone'];
									$reason= $_POST['reason'];
		$approve= $_POST['approve'];
$dateofreg= $_POST['dateofreg'];
									
									mysql_query("insert into resident (fname,mname,lname,age,sex,dateofbirth,placeofbirth,region,zone,woreda,nationality,houseno,occupation,phone,plocation,reason,dateofreg,approve) 
						values('$fname','$mname','$lname','$age','$sex','$dateofbirth','$placeofbirth','$region','$zone','$woreda','$nationality','$houseno','$occupation','$phone','$plocation','$reason','$dateofreg','$approve')")or die(mysql_error());
									
														
					?>				
					<script>
					window.alert('User Added Successfully');
					window.location.href='searchhouse.php';
				</script>
					
					<?php
					}	}}
					?>	