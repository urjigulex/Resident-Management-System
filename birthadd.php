<?php
	include('db.php');
				include('birthindex1.php');		
						               $childfullname= $_POST['childfullname'];
									$chage=$_POST['chage'];									
$sex=$_POST['sex'];
									$dateofbirth=$_POST['dateofbirth'];
									$placeofbirth= $_POST['placeofbirth'];
									$typeofbirth= $_POST['typeofbirth'];
									$motherfullname= $_POST['motherfullname'];
									$mage= $_POST['mage'];
									$mnation= $_POST['mnation'];
									$mreligion= $_POST['mreligion'];
									$moccupation= $_POST['moccupation'];
									$maddress= $_POST['maddress'];
									$mtel= $_POST['mtel'];
								
									$fatherfullname= $_POST['fatherfullname'];
									$fage= $_POST['fage'];
									$fnation= $_POST['fnation'];
									$freligion= $_POST['freligion'];
									$foccupation= $_POST['foccupation'];
									$faddress= $_POST['faddress'];
									$ftel= $_POST['ftel'];
									
									$datereg= $_POST['datereg'];
									$approvedby= $_POST['approvedby'];
									
									
								mysql_query("insert into birth (childfullname,chage,sex,dateofbirth,placeofbirth,typeofbirth,motherfullname,mage,mnation,mreligion,moccupation,maddress,mtel,
								fatherfullname,fage,fnation,freligion,foccupation,faddress,ftel,datereg,approvedby) 
						values('$childfullname','$chage','$sex','$dateofbirth','$placeofbirth','$typeofbirth','$motherfullname','$mage','$mnation','$mreligion','$moccupation'
						,'$maddress','$mtel','$fatherfullname','$fage','$fnation','$freligion','$foccupation','$faddress','$ftel','$datereg','$approvedby')")or die(mysql_error());

					
						?>					
					
					<script>
						window.alert('Birth Given successfully !');
				window.location.href='birthindex1.php';
				</script>
					<?php
				
					
?>									