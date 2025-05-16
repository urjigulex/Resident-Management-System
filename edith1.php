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
 <table border="0" bgcolor="blue" cellspacing="0" align="center">
   <tr>
  
  
     <td style="margin-left:100px"width="800"  height="600" valign="top" bgcolor="white"><br><br>		
	<table>
			<tr>
				<td>
<div><b>Edit/Update House Information</b></div>
<form id="form1" name="form1" method="post" action="edith.php" onSubmit="return isReady(this)">
<table border="0" bgcolor="blue" cellspacing="0" align="center">
<tr>
 <td align="center"><label>OwnerId:</label></td>
  <td><input type="text" name="OwnerId"  title="enter ID" id="ID" required placeholder="OwnerId"/></td>
 </tr>
  <label><br />
  <br />
  <tr>
 <td align="center">HouseNumber:</td>
  <td><input type="text" name="HouseNumber"  title="HouseNumber" id="HouseNumber" required placeholder="HouseNumber"  pattern="([0-9])+(?:-?\d){1,}"></td>
  </tr>
  <br/>
  <tr>
  <td align="center">Kebele:</td>
  <td><input type="text" name="Kebele"  title="enter your Kebele" id="Kebele" required placeholder="Kebele" /></td>
  </tr>
  <br />
  <tr>
  <td align="center">Region:</td>
  <td><input type="text" name="Region"  title="enter Region" id="Region" required placeholder="Region" /></td>
  </tr>
<tr>
   <td  align="center">House_Type:</td>
    <td><input type="text" name="House_Type"  title="enter House_Type" id="email" required placeholder="House_Type"> </td>
   </tr>
<tr>
   <td  align="center">DateOfRegistration:</td>
    <td><input type="date" name="DateOfRegistration"  title="enter DateOfRegistration" id="sallary" required placeholder="DateOfRegistration"> </td>
  
  </tr>
<tr>
   <td  align="center">Approved By:</td>
    <td><input type="text" name="approve"  title="enter your name" id="approve" required placeholder="approved by"> </td>
   </tr>

  </label>
    
 <div class="controls">

                                        <tr>
   <td  align="right"><button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="viewhouse.php" class="btn">Back</a>
                                    </div>
</td>
   </tr>

  </label></table>

</form></center></td>
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




