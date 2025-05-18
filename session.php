<?php
// Start session
session_start();
$access = "";
include('dbcon.php');

// Check whether the session variables are present
if (!isset($_SESSION['username']) || !isset($_SESSION['user_type'])) {
    header("Location: index11.php");
    exit();
}

// Sanitize username to prevent SQL injection
$username = mysqli_real_escape_string($con, $_SESSION['username']);

// Check user type and query appropriate table
if ($_SESSION['user_type'] === 'admin') {
    $qry = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'") or die(mysqli_error($con));
} else if ($_SESSION['user_type'] === 'clark') {
    $qry = mysqli_query($con, "SELECT * FROM clark_account WHERE username = '$username'") or die(mysqli_error($con));
} else {
    // Invalid user type
    session_destroy();
    header("Location: index11.php");
    exit();
}

// Check if user exists
if ($row = mysqli_fetch_assoc($qry)) {
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
