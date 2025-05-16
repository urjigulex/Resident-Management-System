<?php
// Start session
session_start();
$access = "";
include('dbcon.php');

// Check whether the session variable 'username' is present
if (!isset($_SESSION['username']) || trim($_SESSION['username']) === '') {
    header("Location: index11.php");
    exit();
}

// Sanitize username to prevent SQL injection
$username = mysqli_real_escape_string($con, $_SESSION['username']);

// Execute SQL query to fetch user data
$qry = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'") or die(mysqli_error($con));

// Check if user exists
if ($row = mysqli_fetch_assoc($qry)) {
    
    // Check if 'access' key exists and its value
    if (isset($row['access']) && $row['access'] != 0) {
        header("Location: ../"); // redirect unauthorized user
        exit();
    }

    // Store user info
    $users = $row['username'];
    $access = isset($row['access']) ? $row['access'] : 0;

} else {
    // If user not found in DB, force logout
    session_destroy();
    header("Location: index11.php");
    exit();
}
?>
