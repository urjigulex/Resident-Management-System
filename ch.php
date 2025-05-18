<?php 
$session_id="";
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from clark_account where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
 ?>

<?php
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
<html xmlns="http://www.w3.org/1999/xhtml">
    <head class="noprint">
        <link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title id="Home_title"> Kebele Resident Management System</title> 
         <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
      
        <style>
            .well{background-color:green}
            .container{background-color:blueblack}
        </style>
        <script src="../changepass_validat.js" type="text/javascript"></script>
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
    </head>
    <script src="../validation.js" type="text/javascript"></script>
    <body> 

<div id="tooplate_wrapper">
	<div id="tooplate_header">
	

	  <div id="site_title">

                    <div >
                        <img src="images/lo.PNG"height="100" width="1103"/>
                    </div>

			</div>
  
	
</div>
<div id="tooplate_menu" class="menu1">
<table border="0" bgcolor="" width="160" align="left">

        <ul>
		    	    <li class="active"><a href="clarkindex.php">
Home</a></li>		   							 
			   						
<li><a href="resindex.php">Resident Reg</a></li>
<li><a href="#.php">View <img src="images/down.png"></a>
			 <ul>
<li><a href="vmcl.php"> Message</a></li>	
<li><a href="comm.php"> withdrawal requiest</a></li>	
									
																						   </ul>
			</li>
										<li class="active"><a href="comindex.php"> View feedback</a></li>	   

<li><a href="#.php">Manage Resident<img src="images/down.png"></a>
			 <ul>
	<li class="active"><a href="viewpop1.php">Search residet </a></li><li><a href="viewclearance.php"> Clearance Information</a></li>	
										   
																						   </ul>
			</li>

<li><a href="news.php">Latest New's</a></li>	

			<li class="active"><a href="smad.php"> Send Message</a></li>
				<li class="active"><a href="ch.php">Change password</a></li>
							
			 </li>
<li><a href=""><font color="white" size="4" face="elephant"><b><?php echo ucfirst($_SESSION['username']); ?>
&nbsp; &nbsp; <img src="images/cla.jpg" width="80" height="30" class="img-circle profile_img" ><font color="black"></font></a>
<ul>
	
<li class="active"><a href="logout.php"><font color="white" size="4" face="elephant">Logout</font> </a></li>
</ul></li>



			 </ul>		
				</table>
			 </div>
 <div id="tooplate_main" class="shadow">	

       <div class="container">
        <div class="row bg-danger">
            <div class="noprint"
                    
				
			
				
                    
					
					<legend  align="center"><div class="legend"><b>fill change password</b></div></legend>
					<br>
					<div><center>
                        <form action="ch.php" method="post" name="was">
						
                            <table border="0" cellpadding="15" cellspacing="0" >
                                <tr>
                                    <td> User Name </td>
                                    <td>
                                        <input  type="text" name="username" required /><span id="uname"></span>
                                    </td>
                                </tr>
								<tr>
                                    <td>old Password</td>
                                    <td>
                                        <input type="password" name="password" required /><span id="npass"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>New Password</td>
                                    <td>
                                        <input type="password" name="new_password" required /><span id="npass"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Confirm Password</td>
                                    <td>
                                        <input type="password" name="confirmpassword" required /><span id="cpass"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="2">
                                        <input type="submit" name="change_password"  value="Change Password" onclick=" return chanegpasswordvalidation()" />
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="2">
                                    </td>
                                </tr></center>
                            </table>
                        </form>
					

					
                    <?php include('dbcon.php'); ?>
<?php include('dbcon.php'); ?>
					<?php
						$conn=mysqli_connect("localhost","root","");
	  mysqli_select_db($conn,"onlinekebele");
                    if (isset($_POST['change_password'])) {
                        require("dbcon.php");
                        $username = $_POST['username'];
                        $pass = $_POST['password'];
                        $confirmpassword = $_POST['confirmpassword'];
						
                       $new_password = $_POST['new_password'];
                        $resulsasst = mysql_query("SELECT * FROM clark_account WHERE username = '$username' and password = '$pass'");
                        $counssst = mysql_num_rows($resulsasst);
                        if ($counssst ==0) {

                            echo "user name  and old password is not correctly match Please Insert Correctly ! ";
                            echo '</strong></div>';
                        } else 
{

                            $passw = $_POST['new_password'];
                            if (strlen($passw) <= 3) {
                                echo '<div class="alert alert-dismissable alert-e">';
                                die('<strong>' . "Password Must Be Grater Than 3 Characters !" . '</strong>');
                                echo '</div>';
                            }
                            if (substr($new_password, 0, 5) == substr($username, 0, 5)) {
                                echo '<div class="alert alert-dismissable alert-error"><strong>';
                                die("Your Password Must Have A Big Defferent From Your Your Username, Try Other Password !");
                                echo '</strong></div>';
                            }

                            if ($new_password != $confirmpassword) {
                                echo '<div class="alert alert-dismissable alert-error"><strong>';
                                die("Your New Password is not the Same With Confirm Password,please Enter The same Password");
                                echo '</strong></div>';
                            }
							
                            $sqll = "update clark_account set password='$new_password' where username = '$username' ";
                            $res = mysqli_query($conn,$sqll) or die("unable to change" . mysqli_error($conn));
                            //echo '<script type="text/javascript">alert("You are successfully rest your password please login here");window.location=\'Anti_Corruption.php\';</script>';
                            echo '<font color="red" size="3">' . "Successfully Changed!;" . '</font>';
                            echo '</strong></div>';
                        }
                    }
                    ?>
                                        
						<br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>     
</div>  
                        <div id="tooplate_footer_wrapper">
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




