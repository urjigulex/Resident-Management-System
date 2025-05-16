<?php 
$session_id = "";

include('session.php'); 

$result = mysqli_query($con, "SELECT * FROM users WHERE username = '$session_id'") or die('Error In Session');
$row = mysqli_fetch_array($result);
?>
<?php include('db.php'); ?>
<?php include('header1.php'); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="tooplate_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        div#container {
            width: 600px;
            position: relative;
            margin-top: 0px;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
        }
        body {
            background-color: #FFFFFF;
            background-image: url(images/bg-body.jpg);
            color: #000000;
            font-family: Arial;
            font-size: 13px;
            margin: 0;
            text-align: center;
        }
        a:link {
            text-decoration: none;
        }
        a:visited {
            text-decoration: none;
        }
        a:hover {
            text-decoration: none;
        }
        a:active {
            text-decoration: none;
        }
    </style>
</head>
<body><center>
    <img src="images/lo.PNG" height="100" width="1100"/>
    <div id="tooplate_wrapper"></div>
</div>
<div id="tooplate_menu" class="menu1">
    <table border="0" bgcolor="" width="160" align="left">
        <ul>   
            <li class="active"><a href="index1.php">Home</a></li>
            <li class="active"><a href="#">Create Account<img src="images/down.png"></a>
                <ul>
                    <li class="active"><a href="cre.php">Admin</a></li>
                    <li class="active"><a href="create.php">Resident</a></li>
                    <li class="active"><a href="creat.php">Clark</a></li>
                </ul>
            </li>
            <li>
                <a href="#.php">Manage Users<img src="images/down.png"></a>
                <ul>
                    <li class="active"><a href="mancla.php">Clark</a></li>
                    <li class="active"><a href="manres.php">Resident</a></li>
                </ul>
            </li>
            <li>
                <a href="#.php">View <img src="images/down.png"></a>
                <ul>
                    <li class="active"><a href="viewmessage.php">Message</a></li>
                    <li class="active"><a href="commessage.php">View Request</a></li>
                    <li class="active"><a href="comreport.php">View Report</a></li>
                    <li class="active"><a href="comindex1.php">View Feedback</a></li>
                    <li class="active"><a href="viewpop.php">View Resident info</a></li>
                </ul>
            </li>
            <li class="active"><a href="smcl.php">Send Message</a></li>
            <li class="active"><a href="change_password.php">Change Password</a></li>
            <li><a href="posts.php">Post Announcement</a></li>
            <li><a href="#.php">
                <img src="images/service.png"> Services <img src="images/down.png"></a>
                <ul>
                    <li><a href="idindex1.php">Manage ID Card Info</a></li>
                    <li><a href="birthindex1.php">Manage Birth Info</a></li>
                    <li><a href="deathindex1.php">Manage Death Info</a></li>
                    <li><a href="renew.php">Renew ID Card</a></li>
                </ul>
            </li>
            <li><a href=""><font color="white" size="4" face="elephant"><b><?php echo ucfirst($_SESSION['username']); ?>
                &nbsp; <img src="images/admin.jpg" width="60" height="33" class="img-circle profile_img" ></a>
                <ul>
                    <li class="active"><a href="logout.php"><font color="white" size="4" face="elephant">Logout</font> </a></li>
                </ul>
            </li>
        </ul>
    </table>
</div>

<div id="tooplate_main" class="shadow">
    <div class="row-fluid">
        <div class="span12">
            <div class="container">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><i class="icon-user icon-large"></i>&nbsp;<b>Manage Account</b></strong>
                    </div>
                    <thead>
                        <tr>
                            <th style="text-align:center;">User_ID</th>
                            <th style="text-align:center;">Privilege</th>
                            <th style="text-align:center;">User_Name</th>
                            <th style="text-align:center;">Phone</th>
                            <th style="text-align:center;">State</th>
                            <th style="text-align:center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // Replace mysql_query() with mysqli_query()
                            $result = mysqli_query($con, "SELECT * FROM res_account ORDER BY phone") or die(mysqli_error($con));
                            while ($row = mysqli_fetch_array($result)) {
                                $id = $row['phone'];
                        ?>
                        <tr>
                            <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row['user_id']; ?></td>
                            <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row['privilege']; ?></td>
                            <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row['username']; ?></td>
                            <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row['phone']; ?></td>
                            <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row['state']; ?></td>
                            <td style="text-align:center; width:350px;">
                                <a href="acedit.php<?php echo '?id=' . $id; ?>" class="btn btn-info"><font color="white" size="4">Edit</a>
                                <a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-danger"><font color="white" size="4">Delete</a>
                            </td>
                            <!-- Modal -->
                            <div id="delete<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                    <h3 id="myModalLabel">Delete</h3>
                                </div>
                                <div class="modal-body">
                                    <p><div class="alert alert-danger">Are you Sure you want Delete?</div></p>
                                </div>
                                <hr>
                                <div class="modal-footer">
                                    <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
                                    <a href="delacres.php<?php echo '?phone=' . $id; ?>" class="btn btn-danger">Yes</a>
                                </div>
                            </div>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="tooplate_footer_wrapper">
    <div id="tooplate_copyright">
        <a href="http://www.google.com" target="_blank"><img src="images/google-map.png" title="Google" width="30" height="25"></a>
        <a href="http://youtube.com"><img src="images/youtube.png" id="youtube" width="30"></a>
        <a href="http://facebook.com"><img src="images/facebook.png" id="facebook" width="40"></a> 
        <a href="http://tweeter.com"><img src="images/tweeter.png" id="tweeter"></a><b><font face="Elephant" color="white" size="3">Copyright &copy; Bate  Kebele Resident Management System  2017/2025</font></b>
    </div>
</div>

</body>
</center>
</html>
