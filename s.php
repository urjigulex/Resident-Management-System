
<?php	include('db.php');						
						$conn=mysql_connect("localhost","root","");
	  mysql_select_db("onlinekebele",$conn);
						if (isset($_POST['submit'])){
									 $Residents_id = $_POST['Residentsid'];
                            $fname = $_POST['fname'];
                            $lname = $_POST['lname'];
                            $report_type = $_POST['report_type'];
                            $report = $_POST['report'];
                           
                            mysql_query("insert into  report(Residents_id,fname, lname, report_type,report)
                         values		
('$Residents_id','$fname','$lname','$report_type','$report')")or die(mysql_error());
                            
                            
                        }
                        ?>
				
									
									
									
							
