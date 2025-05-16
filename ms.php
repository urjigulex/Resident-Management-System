<?php require_once('dbcon.php');?>
<?php
if(isset($_GET["attempt"]))
{
$attempt=$_GET["attempt"];

 $lng="";
?>
<html>
<head>
<link rel="stylesheet" href="css/mu.css" type="text/css">
<script language="javascript" src="datetimepicker.js"></script>
<script type="text/JavaScript">

 var count = 0;
  function member() {
    if (parent.count ==0) {
       document.parent.src = "pic/DSC06368.jpg";
	 title="evahotel build";
       count = 1;
    }
     else if (parent.count ==1) {

       document.parent.src = "pic/3.jpg";
       count = 2;
    }
 else if(parent.count ==2) {
       document.parent.src = "pic/DSC06361.jpg";
       count = 3;
    }
 else if(parent.count ==3) {
       document.parent.src = "pic/DSC06359.jpg";
       count = 4;
    }
 else if(parent.count ==4) {
       document.parent.src = "pic/4.jpg";
       count = 5;
    }
 else if(parent.count ==5) {
       document.parent.src = "pic/5.jpg";
       count = 6;
    }

 else {
 document.parent.src = "pic/DSC06368.jpg";
       count = 0;

}
    setTimeout("member()", 3000);
  }
</script>
</head>
<body  onload="parent.member()" onload="noBack();" onpageshow="if(event.persisted) noBack(); ">
<table border="0" width="1000" cellspacing="0">
 <tr> 
  <td colspan="3"><img src="image/logo.png" width="1000" height="80"></td>
 </tr>
 <tr>
  <td id="dropdown" colspan="3">	
<li><b><a href="home.php">Home </a></li>  
<li><a href="services.php">Services </a></li> 
<li><a href="about.php">About Us</a></li>
<li><a href="news.php">News</a></li>
<li><a href="contact.php">Contact</a></li>
<li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
</li>
<li><a href="Login.php">Login</a></li>
 </td>
 </tr>
 <td><img src="pic/DSC06368.jpg" width="1000" height="200" name="parent"/></td>
 <tr>
<td>
 <table border="0" bgcolor="#0B0B0B" cellspacing="0">
   <tr>
     <td width="200" height="600" valign="top">	
	 <table border="0"  width="200" cellspacing="0">
<tr>
 <td bgcolor="#CC6633"><center><b>Home Page</b></center></td>
 </tr>
 <tr>
<td id="topnav">
<li><a href="comment.php">Comment</a></li>
</td>
</tr>
 <tr>
<td id="topnav">
<li><a href="sendrequest.php">Send Request</a></li>
</td>
</tr>

<td>
<br><br>
</td>
<tr>
<td>
<script language="JavaScript">
<!-- hide code
// this array gives the weekday names
	var Weekday = new Array();
	Weekday[0] = "Sunday";
	Weekday[1] = "Monday";
	Weekday[2] = "Tuesday";
	Weekday[3] = "Wednesday";
	Weekday[4] = "Thursday";
	Weekday[5] = "Friday";
	Weekday[6] = "Saturday";
// this array gives month names
	var MonthA = new Array();
	MonthA[0] = "January";
	MonthA[1] = "February";
	MonthA[2] = "March";
	MonthA[3] = "April";
	MonthA[4] = "May";
	MonthA[5] = "June";
	MonthA[6] = "July";
	MonthA[7] = "August";
	MonthA[8] = "September";
	MonthA[9] = "October";
	MonthA[10] = "November";
	MonthA[11] = "December";
// this array gives the number of days in each month
	var Mdays = new Array();
	Mdays[0] = 31;
	Mdays[1] = 28;
	Mdays[2] = 31;
	Mdays[3] = 30;
	Mdays[4] = 31;
	Mdays[5] = 30;
	Mdays[6] = 31;
	Mdays[7] = 31;
	Mdays[8] = 30;
	Mdays[9] = 31;
	Mdays[10] = 30;
	Mdays[11] = 31;
// this code gets current date information
	var Today = new Date();
	var Date = Today.getDate();
	var Month = Today.getMonth();
	var dow = Today.getDay();
	var Year = Today.getYear();
// these are variables for 
	var day = 1;
	var i, j;
// adjust year for browser differences
	if (Year < 2000) {
		Year += 1900;
	}
// account for leap year
	if ((Year % 400 == 0) || ((Year % 4 == 0) && (Year % 100 !=0)))
		Mdays[1] = 29;
// determine day of week for first day of the month
	var Mfirst = Today;
	Mfirst.setDate(1);
	var dow1 = Mfirst.getDay();
// write out current date
	document.write("Today is " + Weekday[dow] + ", " + MonthA[Month]);
	document.write(" " + Date + ", " + Year);
// construct calendar for current month
	document.write("<BR><BR><TABLE BORDER=1 BORDERCOLOR=INDIGO>" +
		"<TR><TH COLSPAN=7 ALIGN=CENTER>" + MonthA[Month] + " " + Year + "</TH></TR>");
	document.write("<TR><TH>Sun</TH><TH>Mon</TH><TH>Tue</TH><TH>Wed</TH>" +
		"<TH>Thu</TH><TH>Fri</TH><TH>Sat</TH></TR>");
	for (i = 0; i < 6; i++) {
// this loop writes one row of days Sun-Sat
		document.write("<TR>");
		for (j = 0; j < 7; j++) {
// this loop determines which dates to display and in which column
			if ((i == 0 && j < dow1) || (day > Mdays[Month])) {
// this puts in blank cells at the beginning an end of the month
				document.write("<TD><BR></TD>");
			} else {
				if (day == Date) {
// highlight the current day and display the date for this cell
					document.write("<TD><FONT COLOR=red>" + day + "</FONT></TD>");
				} else {
// display the date for this cell
					document.write("<TD>" + day + "</TD>");
				}
// increment day counter
				day++;
			}
		}
// end of row; determine if more rows needed
		document.write("</TR>");
		if (day > Mdays[Month]) {
			i = 6;
		}
	}
// end of table
	document.write("</TABLE>");
// end hiding -->
</script>
</td>
</tr>
</table></td> 
     <td width="600"  height="600" valign="top" bgcolor="#FFF8DC"><br><br>
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
<div><b>Request Form</b></div>
					<hr />
	 <fieldset>
					<legend  align="center"><div class="legend"><b>Please Enter Your request the space provided below</b></div></legend>
					<br>
					<div>						
                                
                                <?php
                                if ($lng != "amar")
                               
                                    echo " First name ";
                                
                                ?>  <input type="text" id="span9001" name="fname" required pattern="[A-Z a-z]{3,}" /> 
                                <br><br>
                                        <?php
                                        if ($lng != "amar")
                                            echo " Last name ";
                                        
                                        ?>
										<input type="text" id="span9001" name="lname" required pattern="[A-Z a-z]{3,}"/>                                        <br><br>
                                                <?php
                                                if ($lng != "amar")
                                                    echo " email ";
                                               

                                                ?> <input type="text" name="email" required /> 
							
                                                <br></br>
                                                <?php
                                                if ($lng != "amar")
                                                    echo "  request type ";
                                                else
                                                    echo " ?????? ???? ";
                                                ?><select name="rtype" required><br>
                                                        <option value="">--select--</option>
                                                        <option value="give_id">give_id</option>
                                                        <option value="give_certificate">give Birth certificate</option>
														<option value="give_certificate">give merraige certificate</option>
														<option value="give_certificate">give Divorce certificate</option>
														<option value="give_certificate">give Death certificate</option>
                                                        <option value="renew_id">renew_id</option>
                                                
                                                </select>
                                                <br></br>
												 
                                                <?php
                                                if ($lng != "amar")
                                                    echo " write message here ";
                                                else
                                                    echo " ";
                                                ?><br><textarea name="message" required></textarea>
                                                    <br><br>
										
 <input type="submit" name="submit"style="background-color: #3399FF;border-radius: 40px;width: 120px;height: 35px;"  value="send">&nbsp;&nbsp;&nbsp; 		 
         <input type="submit" name="cancel" style="background-color: #3399FF;border-radius: 40px;width: 120px;height: 35px;" value="cancel">                                              
                                                            </fieldset>
                                                            </center>
                                                            </form> 
					</div>
				</fieldset>	
</body></html>				
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

                        $english = "<a style='color:#FFFFFF;' href='?p=login&lng=eng'><b>" . $en . "</b></a> &nbsp; ";
                        $amaregna = "<b >|</b> &nbsp; <a style='color:#FFFFFF;' href='?p=login&lng=amar'><b>" . $am . "</b></a>";
                        echo '<script language="javascript" type="text/javascript">';
                        echo 'document.getElementById("lang").innerHTML="' . $english . $amaregna . '";';

                        echo '</script>';
                    } 
                    ?>	
                    <?php include('dbcon.php'); ?><?php
                    if (isset($_POST['submit'])) {
//$k=rand(1, 10000);
//$uid='user'.$k;
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $rtype = $_POST['rtype'];
                        $message = $_POST['message'];
                        $email = $_POST['email'];
                        $message_date = date('Y-m-d');
                        mysql_query("insert into  messages(fname, lname, rtype, message,email,message_date)
	values
	('$fname','$lname', '$rtype', '$message','$email','$message_date')") or die(mysql_error());
                        ?>
                        <div>successfully sent</div>
                    <?php }
                    ?>



</td>
     <td width="200" height="600" valign="top">
	 	 <table border="0" bgcolor="#336666" width="200" height="600" cellspacing="0">
<tr  bgcolor="black">
<td align="center">
<h3><u><font color="#336666">Advertisment</font></u></h3>
</td>
</tr>
<tr><td bgcolor="white">
<img src="pic/DSC06355.jpg" width="200" height="170"/><br>
<img src="pic/DSC06366.jpg" width="200" height="170" name="demo"/><br>
<img src="pic/DSC06374.jpg" width="200" height="170" name="demo"/>
</td></tr>
</table></td>
	</tr>
	 </table>
</td>
 </tr>
 <tr>
 <td colspan="3" height="25"><table border="0"  align="center" width="100%" bgcolor="black" cellspacing="0">
<tr>
<td>
<a href="http://www.facebook.com" target="_blank"><img src="image/facebook.png" title="Facebook" width="40" height="30"></a>
<a href="http://www.google.com" target="_blank"><img src="image/google-map.png" title="Google" width="30" height="25"></a>
<a href="http://twitter.com/2merkato" target="_blank"><img src="image/twitter.gif" title="Twitter" width="40" height="30"></a>
<a href="youtube.html" target="_blank"><img src="image/youtube.png" title="YouTube" width="40" height="30"></a>
</td>
<td>
<font face="Times New Roman" color="white"><b> KEBELE RESIDENCE MANAGMENT SYSTEM &copy; 2018 COPY RIGHT RESERVED !!!</b>
</font>
</td>
</tr>
</table></td>
 </tr>
