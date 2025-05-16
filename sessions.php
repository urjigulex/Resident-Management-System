<?php
//Start session
session_start();
$access="";
include('dbcon.php');
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['username']) || (trim($_SESSION['username']) == '')) {
    header("location: reslogin.php");
    exit();
}
$qry=mysqli_query($con, "select * from `res_account` where username='username".$_SESSION['username']."'");
	$row=mysqli_fetch_array($qry);
		
	if ($row['access']!=0){
		header('location:..');
		exit();
	}
	
	$users=$row['password'];
?>
