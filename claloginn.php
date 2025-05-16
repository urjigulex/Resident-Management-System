<?php
session_start();
include('dbcon.php');

if (isset($_POST['Login'])) {
    $privilege = $_POST["privilege"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Debug
    error_log("Login attempt - Username: " . $username . ", Privilege: " . $privilege);

    // First check if username exists
    $check_query = mysqli_query($con, "SELECT * FROM clark_account WHERE username='$username'") or die(mysqli_error($con));
    
    if (mysqli_num_rows($check_query) == 0) {
        echo "<script>
            alert('Username not found');
            window.location.href = 'clalogin.php';
        </script>";
        exit();
    }

    // Then check password and privilege
    $query = mysqli_query($con, "SELECT * FROM clark_account WHERE username='$username' AND password='$password' AND privilege='$privilege'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($query);
    $num_row = mysqli_num_rows($query);

    if ($num_row > 0) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_type'] = 'clark';
        
        if ($row['state'] == "active") {
            // Use JavaScript for redirection
            echo "<script>
                window.location.href = 'clarkindex.php';
            </script>";
            exit();
        } else {
            echo "<script>
                alert('Your account is deactivated. Please contact the administrator.');
                window.location.href = 'clalogin.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('Invalid password or privilege level');
            window.location.href = 'clalogin.php';
        </script>";
    }
} else {
    // If someone tries to access this file directly
    echo "<script>window.location.href = 'clalogin.php';</script>";
    exit();
}
?>
