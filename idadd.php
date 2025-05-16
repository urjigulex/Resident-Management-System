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
									$id_no=$_POST['id_no'];
									$fname=$_POST['fname'];
									$mname=$_POST['mname'];
									$lname=$_POST['lname'];
									$age=$_POST['age'];
									$sex=$_POST['sex'];
									$dateofbirth= $_POST['dateofbirth'];
									$placeofbirth= $_POST['placeofbirth'];
									$nationality= $_POST['nationality'];
									$region= $_POST['region'];
									$zone= $_POST['zone'];
									$woreda= $_POST['woreda'];
									$houseno= $_POST['houseno'];
									$dategiven= $_POST['dategiven'];
									$approvedby= $_POST['approvedby'];


	mysql_query("insert into id_card (id_no,fname,mname,lname,sex,dateofbirth,placeofbirth,nationality,region,zone,woreda,houseno,dategiven,approvedby,location) 
						values('$id_no','$fname','$mname','$lname','$sex','$dateofbirth','$placeofbirth','$nationality','$region','$zone','$woreda','$houseno','$dategiven','$approvedby','$location')")or die(mysql_error());
							header("location:idindex.php");		
	}}}?>
			<script>
			alert("User Added successfully !");
			</script>
	
						