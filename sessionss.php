<?php
// Start the session
session_start();
$access = "";

include('dbcon.php');

// Check if session variable exists
if (!isset($_SESSION['username']) || trim($_SESSION['username']) === '') {
    header("location: index11.php");
    exit();
}

// Sanitize input to prevent SQL injection
$username = mysqli_real_escape_string($con, $_SESSION['username']);

// Run the query safely
$qry = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'") or die(mysqli_error($con));

// Check if a matching user was found
if ($row = mysqli_fetch_array($qry)) {
    if ($row['access'] != 0) {
        header('location: ../');
        exit();
    }

    $users = $row['username'];
    $access = $row['access'];
} else {
    // User not found in DB, force logout
    session_destroy();
    header("location: index11.php");
    exit();
}
?>
