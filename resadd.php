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
									
									$sex= $_POST['sex'];
									$dateofbirth= $_POST['dateofbirth'];
									$placeofbirth= $_POST['placeofbirth'];
									$region= $_POST['region'];
									$zone= $_POST['zone'];
									$religion= $_POST['religion'];
									$martial= $_POST['martial'];
									$language= $_POST['language'];
								$woreda= $_POST['woreda'];
									$nationality= $_POST['nationality'];
									$houseno= $_POST['houseno'];
									$occupation= $_POST['occupation'];
									$phone= $_POST['phone'];
									$dateofreg= $_POST['dateofreg'];
									$approve= $_POST['approve'];																	$kebele= $_POST['kebele'];
									$type= $_POST['type'];
                                           $reason= $_POST['reason'];
           $age= $_POST['age'];

									
								mysql_query("insert into resident (fname,mname,lname,sex,age,dateofbirth,placeofbirth,region,religion,martial,language,zone,woreda,kebele,nationality,houseno,type,occupation,phone,dateofreg,plocation,reason,approve) 
						values('$fname','$mname','$lname','$sex','$age','$dateofbirth','$placeofbirth','$region','$religion','$martial','$language','$zone','$woreda','$kebele','$nationality','$houseno','$type','$occupation','$phone','$dateofreg','$plocation','$reason','$approve')")or die(mysql_error());
									
														
					?>					
					<script>
					window.alert('Resident Registered Successfully');
					window.location.href='resindex.php';
				</script>
					
					<?php
					}	}}
					?>		
								
							
		