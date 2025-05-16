
<?php
session_start();
include("dbcon.php");

$username=$_POST['username'];
$password=$_POST['password'];

if(!empty($username) && !empty($password))
	{

		$command="select * from admin WHERE  username = '".$username."' and password='".$password."'";
		$result1=mysql_query($command);
		$count=mysql_num_rows($result1);
		
		
		if($count==0)
		{
			header("location:login.php?attempt=fail");
		}
		else{
			$sql="select * from admin WHERE username='".$username."'";
			$result=mysql_query($sql);
			while($row=mysql_fetch_row($result)){
				
					$_SESSION["id"]=$row[0];
					$_SESSION["username"]=$row[4];
										
				switch($result3[0]){

                        case '1':
							header("location: index1.php");
                        break;
						
						case '2':
							header("location: clarkindex.php");
                        break;
						
						
					
                        default:
							header("location:home.php?attempt=unauthorized");
                        break;

                    }
			}
		}
	}
else
	{
		header("location:login.php?attempt=null");
	}
?>