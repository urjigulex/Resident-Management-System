<?php
	include('db.php');
	include('deathindex1.php');

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
			
									$name= $_POST['name'];					
									$age=
$_POST['age'];		
							           $sex=$_POST['sex'];
									$dateofbirth=$_POST['dateofbirth'];
									$placeofbirth= $_POST['pplaceofbirth'];
										                             $nation= $_POST['nationality'];
									$dateofdeath= $_POST['dateofdeath'];
									$placeofdeath= $_POST['placeofdeath'];
									$causeofdeath= $_POST['causeofdeath'];
									$timeofdeath= $_POST['timeofdeath'];
	$date= $_POST['date'];
		$approve= $_POST['approve'];
	
									$remark= $_POST['remark'];				
mysql_query("insert into death (name,age,sex,dateofbirth,pplaceofbirth,nationality,dateofdeath,placeofdeath,causeofdeath,timeofdeath,date,approve,remark,location) 
						values('$name','$age','$sex','$dateofbirth','$placeofbirth','$nation','$dateofdeath','$placeofdeath','$causeofdeath','$timeofdeath','$date','$approve','$remark','$location')")or die(mysql_error());
?>
		<script>
						window.alert('Death Given successfully !');
				window.location.href='deathindex1.php';
				</script>

	<?php
					}	}}
					?>
					