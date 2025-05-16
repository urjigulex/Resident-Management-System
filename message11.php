<?php 
$session_id="";
include('dbcon.php');
include('sessions.php'); 
$result=mysqli_query($con, "select * from res_account where username='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
 ?>
<?php
include('header1.php'); 
require("dbcon.php");
error_reporting(0);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
  
        <script>
            function validate()
            {
                if (document.myform.email.value == "")
                {
                    alert("Please fill your 's email!");
                    document.myform.email.focus();
                    return false;
                }
                var x = document.forms["myform"]["email"].value;
                var atpos = x.indexOf("@");
                var dotpos = x.lastIndexOf(".");
                if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length)
                {
                    alert("Not a valid e-mail address");
                    document.myform.email.value = "";
                    return false;
                }
                if (document.myform.fname.value == "") {
                    alert("please inter your first name!!");
                    document.myform.fname.focus();
                    return false;
                }
                else if (!letters.test(document.myform.fname.value)) {
                    alert(" Please enter letters only!!");
                    document.myform.fname.focus();
                    return false;
                } else if (document.myform.lname.value == "") {
                    alert("please inter your last name!!");
                    document.myform.lname.focus();
                    return false;
                } else if (!letters.test(document.myform.lname.value)) {
                    alert(" Please enter letters only!!");
                    document.myform.lname.focus();
                    return false;
                }
            }
        </script>
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

<div id="tooplate_wrapper">
	<div id="tooplate_header">
<div id="site_title">

                    <div >
                        <img src="images/hh.PNG"height="30" width="1150"/>
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
    </div> <!-- end of tooplate_menu -->

    <div id="tooplate_main" class="shadow">      

        <div class="container">
            <div class="row bg-info">
              
                    	 <script language="javascript">
  function check()
  {
   if(document.getElementById("first").value =="")
   {
    alert('please enter the First Name!!'); 
    document.getElementById("first").focus();
    return false;
   }
   else if(document.getElementById("em").value =="")
   {
    alert('Please enter the Email!!');
    document.getElementById("em").focus();
    return false;
   }
   else if(document.getElementById("com").value =="")
   {
    alert('Please enter the Comment!!');
    document.getElementById("com").focus();
    return false;
   }
   </script>
					<hr />
	 <fieldset>
					<legend  align="center"> <div class="legend"><b><font color="black" size="3" face="times new roman">Please Enter Your withdrawal request the space provided below</b></div></legend>
					<br>
					<div>
<form  method="post" action="message11.php"name='myform' target="_top"onsubmit='return validate()'>
                        <center>
                                <legend style="color:#0000CC;">
                                    <?php
                                    if ($lng != "amar")
                                        echo " Fill correctly the form  ";
                                    else
                                        echo "???? ?? ";
                                    ?>                        
                                </legend>
								<?php
                                if ($lng != "amar")

                                    echo " Your ID Number:";
                                else
                                    echo " ?? ";
                                ?>  <input type="text"  name="id_no" required placeholder="please enter a valid Id no" /> <br><br>                                                <?php
                                                if ($lng != "amar")
                                                    echo "  request type ";
                                                else
                                                    echo " ?????? ???? ";
                                                ?><select name="rtype" ><br>                                                        <option value="Give_withdrawal">Give withdrawal</option>
                                                        
                                                
                                                </select>
                                                <br></br>
												 
                                                <?php
                                                if ($lng != "amar")
                                                    echo " write message here ";
                                                else
                                                    echo " ";
                                                ?><textarea name="message" required placeholder="please enter Your Reason" ></textarea>
                                                    <br><br>
										
 <input type="submit" name="submit"style="background-color: #3399FF;border-radius: 40px;width: 120px;height: 35px;"  value="send">&nbsp;&nbsp;&nbsp; 		 
         <input type="submit" name="cancel" style="background-color: #3399FF;border-radius: 40px;width: 120px;height: 35px;" value="cancel">                                              
                                                        
                                                            </center>
                                                            </form> 
					</div>	
     <?php
					$conn=mysql_connect("localhost","root","");
	
      mysql_select_db("onlinekebele",$conn);
                    if (!isset($_SESSION['username'])) {
                        if ($lng != "amar") {
                            $en = "English";
                            $am = "amaregna";
                        } else {
                            $en = "??????";
                            $am = "????";
                        }

                       
                    } 
                    ?>	
                    <?php include('dbcon.php'); ?><?php
                    if (isset($_POST['submit'])) {
//$k=rand(1, 10000);
//$uid='user'.$k;
                       
						$reg_no = $_POST['id_no'];
						  $rtype = $_POST['rtype'];
                       
						 $message = $_POST['message'];
						  $message_date = date('Y-m-d');
                        mysql_query("insert into  usermessage(id_no,rtype, message,message_date)
	values
	('$reg_no','$rtype','$message','$message_date')") or die(mysql_error());
                        ?>
                       <Script>alert("Your Request sent successfully !")</script>
                    <?php }
                    ?>

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

