<?php
	include('db.php');
	include('marrindex1.php');						
						if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];
                    if (!isset($_FILES['image1']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image1']['tmp_name'];
							$image = $_FILES["image1"] ["name"];
							$image_name= addslashes($_FILES['image1']['name']);
							$size = $_FILES["image1"] ["size"];
							$error = $_FILES["image1"] ["error"];

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
									$hlocation=$_FILES["image"]["name"];
									$wlocation=$_FILES["image1"]["name"];
									$hid_no= $_POST['hid_no'];
									$hfirstname= $_POST['hfirstname'];
									$hmiddlename= $_POST['hmiddlename'];
									$hlastname=$_POST['hlastname'];											                                           $hage=$_POST['hage'];
									$hdateofbirth=$_POST['hdateofbirth'];
									$hplaceofbirth= $_POST['hplaceofbirth'];
									$hnation= $_POST['hnation'];
									$hstatus= $_POST['hstatus'];
                                                  $hreligion= $_POST['hreligion'];
									$hfathernation= $_POST['hfathernation'];									                                            $hmothername= $_POST['hmothername'];
									$hmothernation= $_POST['hmothernation'];
									$wid_no= $_POST['wid_no'];
									$wfirstname= $_POST['wfirstname'];
									$wmiddlename= $_POST['wmiddlename'];
									$wlastname=$_POST['wlastname'];								
						                 $wage=$_POST['wage'];
									$wdateofbirth=$_POST['wdateofbirth'];
									$wplaceofbirth= $_POST['wplaceofbirth'];
									$wnation= $_POST['wnation'];
									$wstatus= $_POST['wstatus'];
									$wreligion	= $_POST['wreligion'];
									$wfathernation= $_POST['wfathernation'];						
                                                $wmothername= $_POST['wmothername'];
									$wmothernation= $_POST['wmothernation'];
									$datemarriage= $_POST['datemarriage'];
									$placemarriage= $_POST['placemarriage'];
									$timemarriage= $_POST['timemarriage'];
									$approvedby= $_POST['approvedby'];
									$dateapprove= $_POST['dateapprove'];
									$wittness1= $_POST['wittness1'];
									$wittness2= $_POST['wittness2'];
									$wittness3= $_POST['wittness3'];
									
								
									
									
								mysql_query("insert into marriage  (hid_no,hfirstname,hmiddlename,hlastname,hage,hdateofbirth,hplaceofbirth,hnation,
								hstatus,hreligion,hfathernation,hmothername,hmothernation,wid_no,wfirstname,wmiddlename,wlastname,wage,wdateofbirth,wplaceofbirth,wnation,
								wstatus,wreligion,wfathernation,wmothername,wmothernation, hlocation,wlocation,datemarriage,placemarriage,timemarriage,approvedby,dateapprove,wittness1,wittness2,wittness3) 
								
						values('$hid_no','$hfirstname','$hmiddlename','$hlastname','$hage','$hdateofbirth','$hplaceofbirth',
						'$hnation','$hstatus','$hreligion','$hfathernation','$hmothername','$hmothernation','$wid_no','$wfirstname','$wmiddlename','$wlastname','$wage',
						'$wdateofbirth','$wplaceofbirth','$wnation','$wstatus','$wreligion','$wfathernation','$wmothername','$wmothernation','$hlocation','$wlocation',
						'$datemarriage','$placemarriage','$timemarriage','$approvedby','$dateapprove','$wittness1','$wittness2','$wittness3')")or die(mysql_error());
									
									}
										
									?>					
					
					<script>
						window.alert('Marriege Given successfully !');
				window.location.href='marrindex1.php';
				</script>
					<?php
					}	}}
					?>

