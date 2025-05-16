<?php 
$session_id = "";
include('dbcon.php');
include('session.php'); 

// Get user session info
$result = mysqli_query($con, "SELECT * FROM clark_account WHERE user_id='$session_id'") or die('Error In Session');
$row = mysqli_fetch_assoc($result);
?>

<?php include('db.php'); ?>
<?php include('header1.php'); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
    <link href="tooplate_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        div#container {
            width: 600px;
            position: relative;
            margin: 0 auto;
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
    </style>
</head>

<body>
<center>
    <img src="images/lo.PNG" height="100" width="1100"/>
</center>

<div id="tooplate_wrapper">
    <div id="tooplate_menu" class="menu1">
        <ul>
            <li class="active"><a href="clarkindex.php">Home</a></li>
            <li><a href="resindex.php">Resident Reg</a></li>
            <li><a href="#">View <img src="images/down.png"></a>
                <ul>
                    <li><a href="vmcl.php">Message</a></li>	
                    <li><a href="comm.php">Withdrawal Request</a></li>
                </ul>
            </li>
            <li class="active"><a href="comindex.php">View Feedback</a></li>
            <li><a href="#">Manage Resident<img src="images/down.png"></a>
                <ul>
                    <li><a href="viewpop1.php">Search Resident</a></li>
                    <li><a href="viewclearance.php">Clearance Information</a></li>
                </ul>
            </li>
            <li><a href="news.php">Latest News</a></li>
            <li><a href="smad.php">Send Message</a></li>
            <li><a href="ch.php">Change Password</a></li>
            <li>
                <a href="#"><b><?php echo ucfirst($_SESSION['username']); ?></b>
                    <img src="images/cla.jpg" width="80" height="30" class="img-circle profile_img">
                </a>
                <ul>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>	
    </div>

    <div id="tooplate_main" class="shadow">
        <div class="row-fluid">
            <div class="span12">
                <div class="container">
                    <div class="alert alert-info">
                        <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                    </div>

                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                                <th style="text-align:center;">No</th>
                                <th style="text-align:center;">Date of Post</th>
                                <th style="text-align:center;">Name</th>
                                <th style="text-align:center;">Message</th>
                                <th style="text-align:center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $result = mysqli_query($con, "SELECT * FROM smcl ORDER BY no DESC") or die(mysqli_error($con));
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['no'];
                        ?>
                            <tr>
                                <td style="text-align:center;"><?php echo $row['no']; ?></td>
                                <td style="text-align:center;"><?php echo $row['message_date']; ?></td>
                                <td style="text-align:center;"><?php echo $row['name']; ?></td>
                                <td style="text-align:center;"><?php echo $row['message']; ?></td>
                                <td style="text-align:center;">
                                    <a href="vmcla.php?id=<?php echo $id; ?>" class="btn btn-info">View</a>
                                    <a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                            <!-- Modal for delete confirmation -->
                            <div id="delete<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                    <h3 id="myModalLabel">Delete</h3>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-danger">Are you sure you want to delete?</div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
                                    <a href="delete3.php?no=<?php echo $id; ?>" class="btn btn-danger">Yes</a>
                                </div>
                            </div>
                        <?php } ?>
                        </tbody>
                    </table>

                    <br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>

    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
            <a href="http://www.google.com" target="_blank"><img src="images/google-map.png" width="30" height="25" title="Google"></a>
            <a href="http://youtube.com"><img src="images/youtube.png" width="30"></a>
            <a href="http://facebook.com"><img src="images/facebook.png" width="40"></a>
            <a href="http://twitter.com"><img src="images/tweeter.png"></a>
            <b><font face="Elephant" color="white" size="3">Copyright &copy; Bate Kebele Resident Management System 2017/2025</font></b>
        </div>
    </div>
</div>

</body>
</html>
