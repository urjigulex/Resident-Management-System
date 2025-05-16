<?php
session_start();

require("dbcon.php");
error_reporting(0);
$lng = "";
if (isset($_GET["lng"])) {
    $lng = $_GET["lng"];
}
$path = "";
if (isset($_GET["pg"]))
    $path = $_GET["pg"];
?>
<?php include('header1.php'); 

?>

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
                        <img src="img/hh.PNG"height="30" width="1150"/>
                    </div>

			</div>
	 
  
	

<div id="tooplate_menu" class="menu1">
<table border="0" bgcolor="" width="160" align="left">

        <ul>
		 <ul>
           <li class="active"><a href="clarkindex.php">Home</a></li>
		   <li><a href="#.php">Services </a>
			 <ul>
			   							   
                     <li><a href="resindex.php">Resident Reg</a></li>
			   							 <li><a href="housee.php">register house </a></li>
				
											   <li><a href="comm.php">view withdrawal</a></li>											
											    <li><a href="send_report.php">send report</a></li>
											   <li class="active"><a href="viewpop1.php">search residet info</a></li>
                                               <li><a href=""> report</a></li>				 
                               
																						   
																						   </ul>
			</li>
			
			<li><a href="contact.php">Contact us</a>
			<li><a href="comindex.php">Feedback</a>
			
			
			<li><a href="ch.php">chang pass</a>
			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</li>
			<li class="active"><a href="logout.php">Logout</a></li>
			
			
			
			
			</li>
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
                            $fname = $_POST['fname'];
                            $lname = $_POST['lname'];
                            $report_type = $_POST['report_type'];
                            $report = $_POST['report'];
                           
                            mysql_query("insert into  report(Residents_id,fname, lname, report_type,report)
                         values		
('$Residents_id','$fname','$lname','$report_type','$report')")or die(mysql_error());
                            ?>
                            <div><font color="blue" size="3"> Successfully send report!. </font></div>
                        <?php }
                        ?>
                        <center>
                            <form action="send_report.php" method="post" name="wale">
                                  
                                <?php
                                if ($lng != "amar")
                                    echo " Residents id ";
                                else
                                    echo "??? ??? ";
                                ?> <input type="text" name="Residentsid" required /><span id="rsid"></span> <br></br>
                                <?php
                                if ($lng != "amar")
                                    echo " First name ";
                                else
                                    echo " ?? ";
                                ?>  <input type="text" id="span9001"name="fname" required pattern="[A-Z a-z]{3,}"/><span id="name"></span>
                                <br><br>
                                <?php
                                if ($lng != "amar")
                                    echo " Last name ";
                                else
                                    echo " ???? ?? ";
                                ?><input type="text" id="span9001" name="lname" required pattern="[A-Z a-z]{3,}"/><span id="lname"></span><br></br>
                                <?php
                                if ($lng != "amar")
                                    echo "  report type ";
                                else
                                    echo " ????? ???? ";
                                ?><select name="report_type" required><br></br>
                                    <option value="aa">--select--</option>
                                    <option value="health related">health related</option>
                                    <option value="sport">sport</option>
                                    <option value="education">education</option>
                                    <option value="ICT">ICT</option>
                                    <option value="Agriculcture">Agriculture</option>
                                </select><span id="rt"></span>
                                <br></br>

                                <?php
                                if ($lng != "amar")
                                    echo " report ";
                                else
                                    echo "???? ";
                                ?><br>
                                <textarea name="report" id="span9001" required pattern="[A-Z a-z]{0,}"></textarea><span id="rep"></span>
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
		<a href="http://youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © Online Kebele Management System 2010/2018</b>	
		</div>
		</center>
	</div>
</div>
		
	</div>

</body>
</html>

