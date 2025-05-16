<?php 
$session_id="";
include('dbcon.php');
include('sessions.php'); 
$result=mysqli_query($con, "select * from res_account where username='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
 ?>
<?php
require("dbcon.php");
error_reporting(0);
?>
<style type="text/css">

div#container
{
   width: 600px;
   position: relative;
   margin-top: 0px;
   margin-left: auto;
   margin-right: auto;
   text-align: left;
}
body
{
   background-color: #FFFFFF;
   background-image:url(images/bg-body.jpg);
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   margin: 0;
   text-align: center;
}
</style>
<html>
    <head>
       <link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
    </head>
	<body>

<div id="tooplate_wrapper">
	<div id="tooplate_header">
	
<div id="site_title">

                    <div >
                        <img src="images/hh.PNG"height="100" width="1100"/>
                    </div>

			</div>
	 
  
	

<div id="tooplate_menu" class="menu1">
<table border="0" bgcolor="" width="160" align="left">

        <ul>
		    <li class="active"><a href="userindex.php">Home</a></li>	 <li>&nbsp; </li>	 <li>&nbsp; </li>

</li>
<li><a href="message.php"> Certificate request</a></li>
                    <li><a href="send_report.php">Send Report</a></li> 	 <li>&nbsp; </li>	 <li>&nbsp; </li>
	 <li>&nbsp; </li>                   <li><a href="message11.php">withdrawal request</a></li>	
														   			


<li><a href="editprofile.php">Edit Profile</a></li>	

			<li><a href="chpas.php">Change password</a>
			<li><a href="newws.php">latest news</a>
 	   <li><a href="#.php">View<img src="images/down.png">
 </a>
			 <ul>
			   							   
                  <li><a href="sermyinfo.php">my information</a></li>
<li><a href="serid.php">Id Certificate</a></li>
<li><a href="serbi.php">Birth Certificate</a></li>
<li><a href="serde.php">Death Certificate</a></li>	                                 
<li><a href="viewclearance1.php">WithdrawalCertificate</a></li>	                                 
										   </ul>
				 </li>
<li><a href=""><font color="white" size="4" face="elephant"><b><?php echo ucfirst($_SESSION['username']); ?>
<img src="images/service.png" width="50" height="30" class="img-circle profile_img" ><font color="black"></font></a>
<ul>
<li class="active"><a href="logout.php"><font color="white" size="4" face="elephant">Logout</font> </a></li>
</ul></li>


			 </ul>	
				</table>
			 </div>
 <div id="tooplate_main" class="shadow">

    <div class="container">
        <div class="row bg-danger">
           
      
			
                <?php
                if (!isset($_SESSION['username'])) {
                    if ($lng != "amar") {
                        $en = "English";
                        $am = "amaregna";
                    } else {
                        $en = "??????";
                        $am = "????";
                    }

                    $english = "<a style='color:#FFFFFF;' href='?p=login&lng=eng'><b>" . $en . "</b></a> &nbsp; ";
                    $amaregna = "<b >|</b> &nbsp; <a style='color:#FFFFFF;' href='?p=login&lng=amar'><b>" . $am . "</b></a>";
                    echo '<script language="javascript" type="text/javascript">';
                    echo 'document.getElementById("lang").innerHTML="' . $english . $amaregna . '";';

                    echo '</script>';
                } 
                ?>
                

                <div class="row">
                    <div class="col-lg-9">
                        <?php include('dbcon.php'); ?>
						<?php
						$conn=mysql_connect("localhost","root","");
	  mysql_select_db("onlinekebele",$conn);
                        if (isset($_POST['submit'])) {
                            $Residents_id = $_POST['Residentsid'];
                            $report_type = $_POST['report_type'];
                            $report = $_POST['report'];
                          $message_date = date('Y-m-d');

                            mysql_query("insert into  report(Residents_id,report_type,report,                     message_date)
                         values		
('$Residents_id','$report_type','$report','$message_date')")or die(mysql_error());
                            ?>
                            <div><font color="blue" size="3"> Successfully send report!. </font></div>
                        <?php }
                        ?>
                        <center>
                            <form action="send_report.php" method="post" name="wale">
                                  <h3> <?php
                                if ($lng != "amar")
                                    echo " send report ";
                                else
                                    echo "  ???? ???";
                                ?> </h3>
                                <?php
                                if ($lng != "amar")
                                    echo " Residents id ";
                                else
                                    echo "??? ??? ";
                                ?> <input type="text" name="Residentsid" required placeholder="Please Enter valid Id Number"/><span id="rsid"></span> <br></br>
                                                                <?php
                                if ($lng != "amar")
                                    echo "  report type ";
                                else
                                    echo " ????? ???? ";
                                ?><input type="text" id="span9001" name="report_type" required pattern="[A-Z a-z]{3,}" placeholder="Please Enter your report type"/><span id="report_type" ></span><br></br>


                                </select><span id="rt"></span>

                                <?php
                                if ($lng != "amar")
                                    echo "Report Message";
                                else
                                    echo "???? ";
                                ?>
                                <textarea name="report" id="span9001" required pattern="[A-Z a-z]{0,}" size="30" placeholder="Please Enter Your Reason"></textarea><span id="rep"></span>
                                <br/>
                                <br/>
                                <input type="submit" name="submit" value="send" onclick="return sendvalidation()"/>
                            </form> 
                        </center>
                    </div>
                    <div class="col-lg-3">
                        <?php
                         ?>
                    </div>
                </div>
           

        </div> 
        

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="css/ie10-viewport-bug-workaround.js" type="text/javascript"></script> 
        <script src="../js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
        </div>
    </div>
<div id="tooplate_footer_wrapper">
	<center>
        
        <div id="tooplate_copyright">
<a href="http://www.google.com" target="_blank"><img src="images/google-map.png" title="Google" width="30" height="25"></a>
		<a href="http://youtube.com"><img src="images/youtube.png" id="youtube" width="30"></a>
		<a href="http://facebook.com"><img src="images/facebook.png" id="facebook" width="40"></a> 
		<a href="http://tweeter.com"><img src="images/tweeter.png" id="tweeter"></a><b><font face="Elephant" color="white"size="3">Copyright &copy; Bate  Kebele Resident Management System  2017/2025  </font></b>	
		</div>
	</div>
	</div> 
            </tr>
          </table></td>
    </tr>
  </table>

</body></center>

</html>

