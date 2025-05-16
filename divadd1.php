<?php
	include('db.php');
		include('divindex1.php');
		
							$pid_no=$_POST['pid_no'];
									$pfullname= $_POST['pfullname'];		
                                                $page=$_POST['page'];
									$psex=$_POST['psex'];
									$pdateofbirth=$_POST['pdateofbirth'];
									$pplaceofbirth= $_POST['pplaceofbirth'];
									$pnation= $_POST['pnation'];
									$rid_no=$_POST['rid_no'];
									$rfullname= $_POST['rfullname'];
									$rage=$_POST['rage'];
									$rsex=$_POST['rsex'];
									$rdateofbirth=$_POST['rdateofbirth'];
									$rplaceofbirth= $_POST['rplaceofbirth'];
									$rnationality= $_POST['rnationality'];
									$noofchild=$_POST['noofchild'];
									$under18=$_POST['under18'];
									$dateofsep= $_POST['dateofsep'];
									$placeofsep= $_POST['placeofsep'];
									$timeofsep= $_POST['timeofsep'];
									$approvedby=$_POST['approvedby'];
									$dateapprove=$_POST['dateapprove'];
									
									
									
									
									
									
								mysql_query("insert into devorce (pid_no,pfullname,page,psex,pdateofbirth,pplaceofbirth,pnation,rid_no,rfullname,rage,rsex,
								rdateofbirth,rplaceofbirth,rnationality,noofchild,under18,dateofsep,placeofsep,timeofsep,approvedby,dateapprove) 
						values('$pid_no','$pfullname','$page','$psex','$pdateofbirth','$pplaceofbirth','$pnation','$rid_no','$rfullname','$rage','$rsex','$rdateofbirth','$rplaceofbirth','$rnationality','$noofchild','$under18','$dateofsep','$placeofsep','$timeofsep','$approvedby','$dateapprove')")or die(mysql_error());
									
									
?>								
					
					
					<script>
						window.alert('Divorce Given successfully !');
				window.location.href='divindex1.php';
				</script>
					
