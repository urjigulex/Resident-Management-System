<?php 
$session_id="";
include('dbcon.php');
include('sessions.php'); 
$result=mysqli_query($con, "select * from res_account where username='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
 ?>
<?php include('db.php'); ?>
<?php include('header2.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head> <link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<body>

<div id="tooplate_wrapper">
	<div id="tooplate_header">
	
<div id="site_title">

                    <div >
                        <img src="images/lo.PNG"height="30" width="1150"/>
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
<li><a href="sema.php">Marriage Certificate</a></li>
<li><a href="serdi.php">Divorce Certificate</a></li>
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
			 </div></div>
 <div id="tooplate_main" class="shadow">

 <tr>
<td>
 <table border="0" bgcolor="blue" cellspacing="0">
   <tr>
  
  
     <td style="margin-left:100px"width="800"  height="600" valign="top" bgcolor="white"><br><br>		
	<table>
			<tr>
				<td>
					<div><b>View divorce information</b></div>
					<hr />
						<form action="serdi.php" onsubmit='return formValidator()' method='POST'>
						<table>
							<tr>
											<tr>
															<td class="search">Enter Your name:</td>
								<td><input type="text" name="name" size="40px" placeholder="Provide Here..." value="<?php echo ucfirst($_SESSION['username']); ?>" readonly="readonly"/></td>
<tr> <td class="search">Enter Petitioner ID No:</td>
<td><input type="text" name="pid_no" size="40px" placeholder="Provide Here..." /></td>

<tr> <td class="search">Enter Respondent id number:</td>
<td><input type="text" name="rid_no" size="40px" placeholder="Provide Here..." /></td>

								<td><input type="submit" value="Submit" name="search" style="cursor:pointer;"/></td>
							</tr>

						</table>
						</form>
					<?php
                                  $conn=mysql_connect("localhost","root","");
	                 mysql_select_db("onlinekebele",$conn);
					if(isset($_POST['search']))
 {
					$idno=$_POST['pid_no'];
					$idn=$_POST['rid_no'];
					$sql= "SELECT * FROM devorce WHERE pid_no='$idno' and rid_no='$idn'";
					$result=mysql_query($sql);
					$count=mysql_num_rows($result);
					if($count<1)
					{
					die('<font color="red">You have not certificate!</font>');		
					}
					else
					{
					echo"<center>";
echo "<table border='1' style='width:350px;border-radius:10px;' align='center'>
<tr bgcolor='#00CCFF'>
<th width='100px'>Reg_NO.</th>
<th width='100px'>Petitioner ID No</th>
<th>P Full Name</th>
<th>P Age</th>
<th>P Sex</th>
<th>P Date of Birth</th>
<th>P Place Of Birth</th>
<th>P Nationality</th>
<th>Respondent ID No</th>
<th>Re Full Name</th>
<th>Age</th>
<th>Sex</th>
<th>Date of Birth</th>
<th>Place Of Birth</th>
<th>R Nationality</th>
<th>No of Children</th>
<th>Children under 18</th>
<th>Date of Separation</th>
<th>Place of Separation</th>
<th>Time of Separation</th>
<th>Date of Registration</th>
<th>Approved by.</th>
<th>Action.</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  $ctrl = $row['reg_no'];
   print ("<tr>");
   print ("<td>" . $row['reg_no'] . "</td>");
   print ("<td>" . $row['pid_no'] . "</td>");	
   print ("<td>" . $row['pfullname'] . "</td>");
   print ("<td>" . $row['page'] . "</td>");
   print ("<td>" . $row['psex'] . "</td>");
   print ("<td>" . $row['pdateofbirth'] . "</td>");
   print ("<td>" . $row['pplaceofbirth'] . "</td>");
   print ("<td>" . $row['pnation'] . "</td>");
   print ("<td>" . $row['rid_no'] . "</td>");
   print ("<td>" . $row['rfullname'] . "</td>");
   print ("<td>" . $row['rage'] . "</td>");
   print ("<td>" . $row['rsex'] . "</td>");
   print ("<td>" . $row['rdateofbirth'] . "</td>");
   print ("<td>" . $row['rplaceofbirth'] . "</td>");
   print ("<td>" . $row['rnationality'] . "</td>");
   print ("<td>" . $row['noofchild'] . "</td>");
   print ("<td>" . $row['under18'] . "</td>");
   print ("<td>" . $row['dateofsep'] . "</td>");
   print ("<td>" . $row['placeofsep'] . "</td>");
   print ("<td>" . $row['timeofsep'] . "</td>");
   print ("<td>" . $row['dateapprove'] . "</td>");
   print ("<td>" . $row['approvedby'] . "</td>");
  print("<td align = 'center' width = '1'> <a href = 'divc1.php?key1=".$ctrl."'><img width='25px' height='25px' src = 'images/search.png'title='view Divorce information'>
<img width='25px' height='25px' src = 'images/user.jpg' title='view Divorce information'></a>
</td>	

		");

  print ("</tr>");
  }
print( "</table>");
echo"</center>";
}
}
mysql_close($conn);
?>
					
								
				</td>
			</tr>
	</table>

</td>
	</tr>
</table>
	
	  </div>
	  <tr>
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
