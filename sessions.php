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

// Fix the SQL query syntax
$qry = mysqli_query($con, "SELECT * FROM `res_account` WHERE username = '".$_SESSION['username']."'");
$row = mysqli_fetch_array($qry);

// Check if user exists in database
if (!$row) {
    // User not found in database, clear session and redirect to login
    session_destroy();
    header("location: reslogin.php");
    exit();
}

// Check access level if it exists
if (isset($row['access']) && $row['access'] != 0) {
    header('location:..');
    exit();
}

$users = $row['password'];
?>
