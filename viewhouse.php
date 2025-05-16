<?php include('db.php'); ?>
<?php include('header1.php'); ?>
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
                        <img src="images/lo.PNG"height="50" width="1150" alt="left"/>
                    </div>
              
			</div>
<div id="tooplate_menu" class="menu1">
	<table border="0" bgcolor="" width="160" align="left">

        <ul>
		   
			
               <li class="active"><a href="clarkindex.php">
Home</a></li>		   							 
			   							 <li><a href="housee.php">register house </a></li>
<li><a href="searchhouse.php">Resident Reg</a></li>
<li><a href="#.php">View <img src="images/down.png"></a>
			 <ul>
<li><a href="vmcl.php"> Message</a></li>	
<li><a href="comm.php"> withdrawal requiest</a></li>	
										<li class="active"><a href="comindex.php"> View feedback</a></li>	   
																						   </ul>
			</li>
<li><a href="cheackid.php">Give Withdrawal </a></li>		<li class="active"><a href="viewpop1.php">Search residet </a></li>

			<li class="active"><a href="smad.php"> Send Message</a></li>
				<li class="active"><a href="ch.php">Change password</a></li>
							<li class="active"><a href="logout.php">Logout</a></li>
			 <li><a href=""><img src="images/ca.jpg" width="80" height="40" ><i><font color="black"></font></i></a></li>
			 </ul>	
				</table>
			 </div>
 <div id="tooplate_main" class="shadow">

 <tr>
<td>
 <table border="0" bgcolor="blue" cellspacing="0">
   <tr>
  
  
     <td style="margin-left:100px"width="800"  height="600" valign="top" bgcolor="white"><br><br>		
	<table>
			<tr>
				<td>
<div><b>View House Form</b></div>
					<hr />
						<form action="viewhouse.php" onsubmit='return formValidator()' method='POST'>
						
							<tr>
								<td class="search">Enter IdNumber:</td>
								<td><input type="text" name="searchs" size="40px" placeholder="Provide Here..." /></td>
								<td><input type="submit" value="Search" name="search" style="cursor:pointer;"/></td>
							</tr>
							
						
					
                            
					</form>
										<?php
$conn=mysql_connect("localhost","root","");
	
      mysql_select_db("onlinekebele",$conn);
					if(isset($_POST['search']))
 {
					$idno=$_POST['searchs'];
					$sql= "SELECT * FROM house WHERE OwnerId='{$idno}'";
					$result=mysql_query($sql);
					$count=mysql_num_rows($result);
					if($count<1)
					{
					die('<font color="red">This ID number is not found</font>');		
					}
					else
					{
					echo"<center>";
echo "<table border='1' style='width:650px;border-radius:10px;' align='center'>
<tr>
<th width='150px'>Id NO.</th>
<th>Nationality</th>
<th>Region</th>
<th>Zone</th>
<th>Woreda</th>
<th>Kebele.</th>
<th>House No</th>
<th>Status.</th>
<th>House_Type</th>
<th>DateOfRegistration</th>
<th>Approved by</th>
<th>View</th>
<th>Delete</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  $ctrl = $row['HouseNumber'];
  print ("<tr>");
    print ("<td>" . $row['OwnerId'] . "</td>");
  print ("<td>" . $row['nation'] . "</td>");
  print ("<td>" . $row['Region'] . "</td>");
  print ("<td>" . $row['zone'] . "</td>");
  print ("<td>" . $row['woreda'] . "</td>");
   print ("<td>" . $row['Kebele'] . "</td>");
  print ("<td>" . $row['HouseNumber'] . "</td>");
   print ("<td>" . $row['status'] . "</td>");
    print ("<td>" . $row['House_Type'] . "</td>");
  print ("<td>" . $row['DateOfRegistration'] . "</td>");
  print ("<td>" . $row['approve'] . "</td>");
  print("<td align = 'center' width = '1'><a href = 'edith1.php? key1=".$ctrl."'><img src = 'images/Edit.png' width='25px' height='25px' title='Edit' ></a></td>
         
		<td align = 'center' width = '1'><a href = 'deletehouse.php?key1=".$ctrl."'><img width='25px' height='25px' src = 'images/Delete.png' title='Delete'></img></a></td>
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


