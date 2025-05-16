<?php require_once('dbcon.php');?>
<?php
if(isset($_GET["attempt"]))
{
$attempt=$_GET["attempt"];
}
?>
<html>
<head>
<link rel="stylesheet" href="css/mu.css" type="text/css">
<script language="javascript" src="datetimepicker.js"></script>
<script type="text/JavaScript">

 var count = 0;
  function member() {
    if (parent.count ==0) {
       document.parent.src = "pic/im.jpg";
	 title="evahotel build";
       count = 1;
    }
     else if (parent.count ==1) {

       document.parent.src = "pic/imi.jpg";
       count = 2;
    }
 else if(parent.count ==2) {
       document.parent.src = "pic/5.jpg";
       count = 3;
    }
 else if(parent.count ==3) {
       document.parent.src = "pic/im.jpg";
       count = 4;
    }
 else if(parent.count ==4) {
       document.parent.src = "pic/5.jpg";
       count = 5;
    }
 else if(parent.count ==5) {
       document.parent.src = "pic/5.jpg";
       count = 6;
    }

 else {
 document.parent.src = "pic/im.jpg";
       count = 0;

}
    setTimeout("member()", 3000);
  }
</script>
</head>
<body  onload="parent.member()" onload="noBack();" onpageshow="if(event.persisted) noBack(); ">
<table border="0" width="1000" cellspacing="0">
 <tr> 
  <td colspan="3"><img src="img/lo.png" width="1180" height="100"></td>
 </tr>
 <tr>
  <td id="dropdown" colspan="3">	
<li><b><a href="home.php">Home </a></li>  

<li><a href="abus.php">About Us</a></li>
<li><a href="help.php">Help</a></li>
<li><a href="neww.php">News</a></li>
<li><a href="conus.php">Contact</a></li>
<li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="index11.php">Login</a></li>
 </td>
 </tr>
 <td><img src="pic/3.jpg" width="1180" height="200" name="parent"/></td>
 <tr>
<td>
 <table border="0" bgcolor="" cellspacing="0">
   <tr>
     <td width="200" height="600" valign="top">	
	 <table border="0"  width="200" cellspacing="0">
<tr>
 </tr>
 <tr>
<td id="topnav">
<li><a href="c.php">Feedback</a></li>
</td>
</tr>
 <tr>
<td id="topnav">
<li><a href="sendrequest.php">Send Request</a></li>
</td>
</tr>
<tr>
<td id="topnav">
<li><a href="message11.php">withdrawal reqeust</a></li>
</td>
</tr>
<tr>
<td id="topnav">
<li><a href="regist.php">registration</a></li>
</td>
</tr>
<tr>
<td id="topnav">
<li><a href="chat_system/index.php".php">chat</a></li>
</td>
</tr>
<tr>
<td width="800"  height="418" valign="top" bgcolor="white">

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
     <td width="800"  height="600" valign="top" bgcolor="white"><br><br>
	 	       <?php include('dbcon.php'); ?>
					<?php
				                    if (isset($_POST['change_password'])) {
                       
                        $username = $_POST['username'];
                        $confirmpassword = md5($_POST['confirmpassword']);
						
                        $new_password = md5($_POST['new_password']);
                        $resulsasst = mysql_query("SELECT * FROM users WHERE username = '$username' ");
                        $counssst = mysql_num_rows($resulsasst);
                        if ($counssst == 0) {

                            echo "your user name is not correct Please Insert Your user name Correctly ! ";
                            echo '</strong></div>';
                        } else {

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
							
                            $sqll = "update users set password='$new_password' where username = '$username' ";
                            $res = mysql_query($sqll) or die("unable to change" . mysql_error());
                            //echo '<script type="text/javascript">alert("You are successfully rest your password please login here");window.location=\'Anti_Corruption.php\';</script>';
                            echo '<font color="red" size="3">' . "Successfully Changed!;" . '</font>';
                            echo '</strong></div>';
                        }
                    }
                    ?>	
                    <center>
					
					<legend  align="center"><div class="legend"><b>fill change password</b></div></legend>
					<br>
					<div>
                        <form action="changefo.php" method="post" name="was">
						
                            <table border="0" cellpadding="15" cellspacing="0" >
                                <tr>
                                    <td> User Name </td>
                                    <td>
                                        <input  type="text" name="username" required /><span id="uname"></span>
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
                                </tr>
                            </table>
                        </form>
					
                    </center>
						<br><br><br><br><br><br><br><br>
                </div>
           <td width="200" height="600" valign="top">
	 	 <table border="0" bgcolor="#004080" width="200" height="600" cellspacing="0">
<tr  bgcolor="white">
<td align="center">
<h3><u><font color="black">Advertisment</font></u></h3>
</td>
</tr>
<tr><td bgcolor="white">
<img src="pic/5.jpg" width="200" height="170"/><br>
<img src="pic/y2.jpg" width="200" height="170" name="demo"/><br>
<img src="pic/yy.jpg" width="200" height="170" name="demo"/>
</td></tr>
</table></td>
	</tr>
	 </table>
</td>
 </tr>
 <tr>
 <td colspan="3" height="25"><table border="0"  align="center" width="100%" bgcolor="#004080" cellspacing="0">
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
 </table></body></html>