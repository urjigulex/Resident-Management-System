<?php include('header1.php'); 

?>
<?php
if(isset($_GET["attempt"]))
{
$attempt=$_GET["attempt"];
}
?>

</style>
<?php 
$session_id="";

include('TestSession.php'); 

$result=mysqli_query($con, "select * from users where username='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
<?php include('db.php'); ?>

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

                    <div class="col-lg-3 ">
                        <img src="images/hh.PNG"height="100" width="1100" alt="left"/>
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
<table border="0" width="1000" cellspacing="0">
 <tr>
<td>

 
     <td width="800"  height="600" valign="top" bgcolor="white"><br><br>		
	<table>
			<tr>
				<td>
					<div><b>View withdrawal Form</b><br/></div>
					<hr/>
						<form action="viewclearance1.php" onsubmit='return formValidator()' method='POST'>
						<table>
						
							<tr>
								<td class="search">Enter IdNumber:</td>
								<td><input type="text" name="searchs" size="40px" placeholder="Provide Here..." /></td>
								<td><input type="submit" value="Search" name="search" style="cursor:pointer;"/></td>
							</tr>
						</table>
						</form>
					<?php
                                  $conn = mysqli_connect("localhost", "root", "", "db");
                                  if (!$conn) {
                                      die("Connection failed: " . mysqli_connect_error());
                                  }
					if(isset($_POST['search']))
 {
					$idno = $_POST['searchs'];
					$sql = "SELECT * FROM withdrawal WHERE IdNumber=?";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "s", $idno);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
					$count = mysqli_num_rows($result);
					if($count < 1)
					{
					die('<font color="red">This Id Number is not found</font>');		
					}
					else
					{
					echo"<center>";
echo "<table border='1' style='width:650px;border-radius:10px;' align='center'>
<tr bgcolor='#00CCFF'>
<th width='150px'>ID NO.</th>
<th>FULLNames</th>
<th>View</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  $ctrl = $row['IdNumber'];
  print ("<tr>");
  print ("<td>" . $row['IdNumber'] . "</td>");
  print ("<td>" . $row['FirstName'] .'&nbsp;'.$row['middleName'].'&nbsp;'.$row['LastName']. "</td>");	
  print("<td align = 'center' width = '1'><a href = 'detailclearance.php?key1=".$ctrl."'><img width='25px' height='25px' src = 'images/search.png' title='View Detail'></a></td>
         
		");
  print ("</tr>");
  }
print( "</table>");
echo"</center>";
}
}
mysqli_close($conn);
?>
					
								
				</td>
			</tr>
	</table>
</td>
	</tr>
	 </table>


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

