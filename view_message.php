
<?php
$opr = "";
$id = "";
$msg = "";
 include("dbcon.php");
 error_reporting(0);
$lng = "";
if (isset($_GET["lng"])) {
    $lng = $_GET["lng"];
}
 if (isset($_GET['opr']))
    $opr = $_GET['opr'];

?><a href="index1.php"><h4>Back</h4></a>
 <html>
 <body>
 <div class="container">
          <div class="col-lg-2"></div>
         <div class="col-lg-9">
                <h3> <?php if ($lng != "amar") echo "View request message";
else echo "የተላቁ መልእክቶችን ማየት"; ?></h3>  
                <div id="style_div" >
                    <form method="post">
                        <br/><b style="margin-left:40px;"> <?php if ($lng != "amar") echo "";
 ?>
                            
                        </b>
                    </form>



                </div><!--- end of style_div -->

                <?php
				$conn=mysql_connect("localhost","root","");
	
      mysql_select_db("onlinekebele",$conn);
                echo '<h4 style="color:red">' . $msg . '</h4>';
                include("dbcon.php");

                $key = "";
                if (isset($_POST['searchtxt']))
                    $key = $_POST['searchtxt'];

                if ($key != "") {
                    $sql_sel = mysql_query("SElECT * FROM messages WHERE fname  like '%$key%' or lname like '%$key%'");
                } else {
                    $sql_sel = mysql_query("SELECT * FROM messages");
                }
                if ($sql_sel) {
                    echo '<div style="overflow:auto; width:620px; height:500px; margin-left:50px">';
                    echo '<table style="" class="table table-striped table-hover table-condensed table-bordered">';
                    echo '<tr>';
                    echo '<th>first name</th>';
                    echo '<th>last name </th>';
                    echo '<th>message </th>';
                    echo '<th> email</th>';
                    echo '<th> message_date</th>';
                    echo '<th>rtype </th>';
                    if ($_SESSION['user_type'] == "Clerk")
                        echo '</tr>';
                    while ($run = mysql_fetch_array($sql_sel)) {
                        $fname = $run['fname'];
                        $lname = $run['lname'];
                        $message = $run['message'];
                        $email = $run['email'];
                        $message_date = $run['message_date'];
                        $rtype = $run['rtype'];

                        echo '<tr>';

                        echo '<td>' . $fname . '</td>';
                        echo '<td>' . $lname . '</td>';
                        echo '<td>' . $message . '</td>';
                        echo '<td>' . $email . '</td>';
                        echo '<td>' . $message_date . '</td>';
                        echo '<td>' . $rtype . '</td>';
                        echo '<tr>';
                    }
                    echo '</table>';
                    echo '</div>';
                }
                ?></div>
            <div class="col-lg-1">
            </div>
        </div>
 </div>
    </body>
</html>


