<?php
$dbuser = "root";
$dbpass = "";
$host = "localhost";
$db = "db";
$con = new mysqli($host, $dbuser, $dbpass, $db); // renamed from $mysqli to $con

// Optional: check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
