<?php
session_start();

if (isset($_POST['Login'])) {
    $privilege = $_POST["privilege"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $crypt_pass = md5($password); // still using md5, not secure but keeping as-is for now

    // Connect using mysqli
    $db = mysqli_connect("localhost", "root", "", "db");

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Sanitize inputs
    $username = mysqli_real_escape_string($db, $username);
    $privilege = mysqli_real_escape_string($db, $privilege);

    // Build the query (use hashed password here if needed)
    $qry = "SELECT * FROM users WHERE username='$username' AND password='$password' AND privilege='$privilege'";

    $results = mysqli_query($db, $qry);

    if (!$results) {
        die("Query failed: " . mysqli_error($db));
    }

    $count = mysqli_num_rows($results);

    if ($count <= 0) {
        ?>
        <script>
            window.alert('Please enter a valid username and/or password');
            window.location.href = 'index11.php';
        </script>
        <?php
    } else {
        while ($row = mysqli_fetch_assoc($results)) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_type'] = 'admin';  // Set user type to admin
            $state = $row['state'];

            if ($state === "active") {
                if ($privilege === "Admin") {
                    ?>
                    <script>
                        window.location.href = 'index1.php';
                    </script>
                    <?php
                }
            } else {
                // Account is deactivated
                ?>
                <script>
                    alert("This account is deactivated or inactive.");
                    window.location.href = 'index11.php';
                </script>
                <?php
            }
        }
    }

    mysqli_close($db);
}
?>
