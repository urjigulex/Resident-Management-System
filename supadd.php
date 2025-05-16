<?php
	include('db.php');
						
									$username= $_POST['username'];
									$password= $_POST['password'];
									$confirm=$_POST['confirm'];
								
									if($password==$confirm)
									{
								mysql_query("insert into users (username,password) 
						values('$username','$password')")or die(mysql_error());
				
									
									header('location:userindex.php');
									}
									else 
									{
										header('location:pass.php');
									}
							
?>								
