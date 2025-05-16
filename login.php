
    
	<?php
session_start();
include('dbcon.php'); // Make sure $con is defined in this file

if (isset($_POST['submitMain'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($con, "SELECT * FROM admin WHERE username='$username' AND password='$password'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($query);
    $num_row = mysqli_num_rows($query);

    if ($num_row > 0) {
        $_SESSION['user_id'] = $row['user_id'];
        header('Location: index1.php');
        exit();
    } else {
        echo "<script>alert('Invalid Username and Password Combination');</script>";
    }
}
?>

<!-- HTML Form -->
<td width="600" height="600" valign="top" bgcolor="#FFF8DC">
    <br><br>
    <center>
        <div id="loginform">
            <h1>LOGIN FORM</h1>
            <form action="login.php" method="post" name="frm_login" id="frm_login">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" size="25" required></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" size="25" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="add">
                            <input type="submit" value="Login" name="submitMain" style="cursor:pointer;"> 
                            <a href="home.php">
                                <input type="button" name="cancel" value="Cancel" style="cursor:pointer;">
                            </a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</td>
