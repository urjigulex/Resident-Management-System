
<?php include('db.php'); ?>
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
   background-image:url(img/bg-body.jpg);
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   margin: 0;
   text-align: center;
}
</style>


<html xmlns="http://www.w3.org/1999/xhtml">
<head> <link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>

<div id="tooplate_wrapper">
	<div id="tooplate_header">
	
<div id="site_title">

                    <div >
                        <img src="img/lo.PNG"height="100" width="1100"/>
                    </div>

			</div>
  
	
</div>
<div id="tooplate_menu" class="menu1">
<table border="0" bgcolor="" width="160" align="left">

                <ul>
		   <li><a href="#.php">Services </a>
			 <ul>
			   							   
                     
			   							<li><a href="search_id.php"> Give ID Card </a></li>
											   <li><a href="birthindex1.php"> Give Birth certf </a></li>
											   <li><a href="deathindex1.php"> Give Death  certf</a></li>
											   <li><a href="search_id2.php"> Give Marrieag cert</a></li>		
											   <li><a href="search_id3.php">Give Divorce certf</a></li>		   									
											<li class="active"><a href="viewpop.php">Search residet </a></li>
                                           <li><a href="renew.php">Renew id_card</a></li>					 
                               
																						   
																						   </ul>
			</li>
			<li><a href="#.php">View</a>
			 <ul>
			<li class="active"><a href="comindex1.php">Feedback</a></li>
                         <li class="active"><a href="commessage.php">View_request</a></li>
						 <li class="active"><a href="chat_system/index.php">chat</a></li>
																						   
             </ul>
			</li>
			 <li class="active"><a href="change_password.php">Change password</a></li>
		   <li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</li>

		<li class="active"><a href="logout.php">logout</a></li>
		<li><a href=""><img src="images/me.jpg" width="90" height="32" ><i><font color="black"></font></i></a></li>
			 </ul>		
				</table>
			 </div>
			 
 <div id="tooplate_main" class="shadow"><center>
<center>
<h2>Residence Verification</h2>
<form action="search_id1.php" method="POST" name="form">
<strong>

Enter your Name :</strong>
<input name="searchname" type="text">  <br><br>
<strong>Enter Father Name :</strong>
<input name="searchfname" type="text"> <br><br>
<strong>
Enter Reg No:</strong>

<input name="searchid" type="text"> <br><br>
<strong>
<input type="submit" name="searchres" value="GO"></strong>
 
</form><center>
<?php
$con= mysql_connect("localhost","root","");
mysql_select_db("onlinekebele",$con);
if(isset($_POST['searchres']))
{
$no=$_POST['searchid'];
$fname=$_POST['searchname'];
$mname=$_POST['searchfname'];

$sql = "SELECT * FROM resident where reg_no='$no' and fname='$fname' and mname='$mname'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$myrow = mysql_fetch_array($result);

if ($records==0)
{
echo '<script type="text/javascript">alert("You Are Not Resident!");
window.location=\'search_id1.php\';</script>'.mysql_error();
}
else

echo '<script type="text/javascript">alert("YOU CAN TO GIVE CERTIFICATE!");window.location=\'deathindex1.php\';</script>';

}
mysql_close();
?>
<br><br><br><br><br><br><br><br><br><br><br><br>
</div>
 <?php include('footer.php'); ?>
		
	</div>
