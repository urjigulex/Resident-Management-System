<?php
session_start();

if (isset($_POST['Login'])) {
    $privilege = $_POST["privilege"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Connect to the database
    $db = mysqli_connect("localhost", "root", "", "db");

    if (!$db) {
        die("Error connecting to database.");
    }

    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($db, "SELECT * FROM res_account WHERE username = ? AND password = ? AND privilege = ?");
    mysqli_stmt_bind_param($stmt, "sss", $username, $password, $privilege);
    mysqli_stmt_execute($stmt);
    $results = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($results) <= 0) {
        echo "<script>
                alert('Please Enter a valid username and/or password');
                window.location.href='reslogin.php';
              </script>";
    } else {
        $row = mysqli_fetch_assoc($results);
        $state = $row['state'];

        if ($state == "active") {
            $_SESSION['username'] = $row['username'];

            if ($privilege == "Resident") {
                echo "<script>window.location.href='userindex.php';</script>";
            }
        } else {
            echo "<script>
                    alert('You are Deactivated. Please contact the admin!');
                    window.location.href='reslogin.php';
                  </script>";
        }
    }

    mysqli_close($db);
}
?>
