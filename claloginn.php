
<?php
session_start();

if (isset($_POST['Login'])) {
    $privilege = $_POST["privilege"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $crypt_pass = md5($password); // still using MD5 as in your code

    // Establish a connection with mysqli
    $db = mysqli_connect("localhost", "root", "", "db");

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute query securely using mysqli
    $qry = "SELECT * FROM clark_account WHERE username=? AND password=? AND privilege=?";
    $stmt = mysqli_prepare($db, $qry);
    mysqli_stmt_bind_param($stmt, "sss", $username, $password, $privilege);
    mysqli_stmt_execute($stmt);
    $results = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($results) <= 0) {
        ?>
        <font color="white">
        <script>
            window.alert('Please Enter a valid username and/or password');
            window.location.href = 'clalogin.php';
        </script>
        <?php
    } else {
        while ($row = mysqli_fetch_assoc($results)) {
            $_SESSION['username'] = $row['username'];
            $state = $row['state'];

            if ($state == "active") {
                if ($privilege == "Clark") {
                    echo str_repeat("<br>", 6);
                    ?>
                    <script>
                        window.location.href = 'clarkindex.php';
                    </script>
                    <?php
                }
            } else {
                echo '<script type="text/javascript">
                        alert("You are Deactivated. Please contact the admin!");
                        window.location="clalogin.php";
                      </script>';
            }
        }
    }

    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($db);
}
?>
