<?php
//Start session
session_start();

include('dbcon.php');
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['username']) || (trim($_SESSION['username']) == '')) {
    header("location: home.php");
    exit();
}

  

$qry=mysqli_query($con, "select * from `users` where username='username".$_SESSION['username']."'");
	$row=mysqli_fetch_array($qry);
		
	if ($row['access']!=0){
		header('location: clarkindex.php');
		exit();
	}
	
	$users=$row['username'];
?>