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
									$location=$_FILES["image"]["name"];
									$reg_no= $_POST['reg_no'];
									$childfullname= $_POST['childfullname'];
									$sex=$_POST['sex'];
									$dateofbirth=$_POST['dateofbirth'];
									$placeofbirth= $_POST['placeofbirth'];
									$tyepofbirth= $_POST['typeofbirth'];
									$motherfullname= $_POST['motherfullname'];
									$mage= $_POST['mage'];
									$mnation= $_POST['mnation'];
									$mreligion= $_POST['mreligion'];
									$moccupation= $_POST['moccupation'];
									$maddress= $_POST['maddress'];
									$mtel= $_POST['mtel'];
									$mmob= $_POST['mmob'];
									$fatherfullname= $_POST['fatherfullname'];
									$fage= $_POST['fage'];
									$fnation= $_POST['fnation'];
									$freligion= $_POST['freligion'];
									$foccupation= $_POST['foccupation'];
									$faddress= $_POST['faddress'];
									$ftel= $_POST['ftel'];
									$fmob= $_POST['fmob'];
									$datereg= $_POST['datereg'];
									$approvedby= $_POST['approvedby'];
									
									
								mysql_query("insert into birth (reg_no,childfullname,sex,dateofbirth,placeofbirth,typeofbirth,motherfullname,mage,mnation,mreligion,moccupation,maddress,mtel,mmob,
								fatherfullname,fage,fnation,freligion,foccupation,faddress,ftel,fmob,datereg,approvedby) 
						values('$reg_no','$childfullname','$sex','$dateofbirth','$placeofbirth','$typeofbirth','$motherfullname','$mage','$mnation','$mreligion','$moccupation'
						,'$maddress','$mtel','$mmob','$fatherfullname','$fage','$fnation','$freligion','$foccupation','$faddress','$ftel','$fmob','$datereg','$approvedby')")or die(mysql_error());
									
									}
									header('location:birthindex1.php');
									}
							}
?>								
