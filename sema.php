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
					<div><b>View Marriage information</b></div>
					<hr />
						<form action="sema.php" onsubmit='return formValidator()' method='POST'>
						<table>
							<tr>
															<td class="search">Enter Your name:</td>
								<td><input type="text" name="name" size="40px" placeholder="Provide Here..." value="<?php echo ucfirst($_SESSION['username']); ?>" readonly="readonly" /></td>
<tr> <td class="search">Enter Husband id number:</td>
<td><input type="text" name="hid_no" size="40px" placeholder="Provide Here..." /></td>

<tr> <td class="search">Enter Wife id number:</td>
<td><input type="text" name="wid_no" size="40px" placeholder="Provide Here..." /></td>

								<td><input type="submit" value="Submit" name="search" style="cursor:pointer;"/></td>
							</tr>
						</table>
						</form>
					<?php
                                  $conn=mysql_connect("localhost","root","");
	                 mysql_select_db("onlinekebele",$conn);
					if(isset($_POST['search']))
 {
					$idno=$_POST['hid_no'];
					$idn=$_POST['wid_no'];
		$sql= "SELECT * FROM marriage WHERE hid_no='$idno' and wid_no='$idn' ";
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
<th>Hu FullNames</th>
<th>Hu Date of Birth</th>
<th>HU Nationality</th>
<th>HU Religion</th>
<th>Hu Civil Status</th>
<th>Hu Place of birth</th>
<th>WiFullNames</th>
<th>Wi Date of Birth</th>
<th>Wi Nationality</th>
<th>Wi Religion</th>
<th>Wi Civil Status</th>
<th>Wi Place of birth</th>
<th>Place of Marriage</th>
<th>Date of Marriage</th>
<th>Witness</th>
<th>Hu id_no</th>
<th>Wi id_no</th>
<th>Date of Registration</th>
<th>Approved by.</th>
<th>View</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  $ctrl = $row['reg_no'];
   print ("<tr>");
   print ("<td>" . $row['reg_no'] . "</td>");
  print ("<td>" . $row['hfirstname'] .'&nbsp;'.$row['hmiddlename'].'&nbsp;'.$row['hlastname']. "</td>");	
   print ("<td>" . $row['hdateofbirth'] . "</td>");
   print ("<td>" . $row['hnation'] . "</td>");
   print ("<td>" . $row['hreligion'] . "</td>");
   print ("<td>" . $row['hstatus'] . "</td>");
   print ("<td>" . $row['hplaceofbirth'] . "</td>");
   print ("<td>" . $row['wfirstname'] .'&nbsp;'.                   $row['wmiddlename'].'&nbsp;'.$row['wlastname']. "</td>");
   print ("<td>" . $row['wdateofbirth'] . "</td>");
   print ("<td>" . $row['wnation'] . "</td>");
   print ("<td>" . $row['wreligion'] . "</td>");
   print ("<td>" . $row['wstatus'] . "</td>");
   print ("<td>" . $row['wplaceofbirth'] . "</td>");
   print ("<td>" . $row['placemarriage'] . "</td>");
   print ("<td>" . $row['datemarriage'] . "</td>");
   print ("<td>" . $row['wittness1'] . "</td>");
   print ("<td>" . $row['hid_no'] . "</td>");
   print ("<td>" . $row['wid_no'] . "</td>");   
   print ("<td>" . $row['dateapprove'] . "</td>");
   print ("<td>" . $row['approvedby'] . "</td>");
  print("<td align = 'center' width = '1'> <a href = 'marrc1.php?key1=".$ctrl."'><img width='25px' height='25px' src = 'images/search.png'title='view Birth information'>
<img width='25px' height='25px' src = 'images/user.jpg' title='view birth information'></a>
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
	  <tr><div id="tooplate_footer_wrapper">
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





