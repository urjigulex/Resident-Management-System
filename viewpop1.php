<?php
$session_id="";
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from clark_account where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
 ?>
<?php
require("dbcon.php");
?>
<?php
require("header2.php");

?>

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
   background-color: light;
   background-image:url(images/bg-body.jpg);
   color: light;
   font-family: Arial;
   font-size: 13px;
   margin: 0;
   text-align: center;
}
</style>
<html>
    <head>
       <link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
    </head>
	<body>

<div id="tooplate_wrapper">
	<div id="tooplate_header">
	
  	
<div id="site_title">

                    <div >
                        <img src="images/lo.PNG"height="100" width="1100"/>
                    </div>

			</div>
<div id="tooplate_menu" class="menu1">
	<table border="0" bgcolor="" width="160" align="left">

        <ul><li class="active"><a href="clarkindex.php">
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


				</table>
			 </div>
 <div id="tooplate_main" class="shadow">
<div id="cc" style="margin-left: 0px">
<table align="center" bgcolor="red" >

<center><font size="5"><b>List Of Registered population</b></font></h1>

</center>
<center>
<ul>
<form action="<?php $_SERVER['PHP_SELF']; ?>"method="post">
		 <tr>
		 <td>
View Population By:<select name="by" required>
    <option ></OPTION>
    <option >Sex</OPTION>
    <option >Age</OPTION>
    <option >Religion</OPTION>
    <option >Marital Status </OPTION>
    <option >house Type</OPTION>
</select>
<button class="submit" name="search">Search Population</button>
</td>
</tr>
</table>
</form>

 <?php       #########################// By Sex
include('db.php');
if(isset($_POST['search'])){
$region="oromia";
$by=$_POST['by'];
$query=mysql_query("select COUNT(*) from resident where sex='female' AND region='$region'")or die(mysql_error());
while($row=mysql_fetch_array($query)){
		 $female=$row['COUNT(*)'];
		 }
$query=mysql_query("select COUNT(*) from resident where sex='male'AND region='$region'")or die(mysql_error());
while($row=mysql_fetch_array($query)){
		 $male=$row['COUNT(*)'];
		 }
 if($by=="Sex"){
	?>
	<table class="hovertable" align="center" border="15" width="500">
	<tr bgcolor="#33CCFF"><th colspan="4"><p align="center">Total population by Sex</p><br> </th></tr>
<?php
//#############
include('db.php');
 //$q=mysql_query("select COUNT(*) from resident where sex='sex' ")or die(mysql_error());
	//$row=mysql_fetch_array($q)
	 //$T=$row['COUNT(*)'];
//############
$resul = mysql_query("select count(*) FROM resident ");
$row = mysql_fetch_array($resul);
$you = $row[0];
$result = mysql_query("select count(*) FROM resident where Sex='male' and region='oromia'  ");
$row = mysql_fetch_array($result);
$total = $row[0];
//######
$res = mysql_query("select count(*) FROM resident where Sex='female' and region='oromia'  ");
$rw = mysql_fetch_array($res);
$tot = $rw[0];
//@@@@@@@
//######
echo"<tr>";
echo"<th>";
echo 'male:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$total;
echo"</td>";
//
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$total/$you*100;
echo"</td>";
//
echo"</tr>";
echo"<tr>";
echo"<th>";
echo 'female:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tot;
echo"</td>";
//@@@@@@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tot/$you*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@@
echo"</tr>";
echo"<tr>";
echo"<th>";
echo 'total:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.($total+$tot);
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.($total+$tot)/$you*100;
echo"</td>";
echo"</tr>";}}
//@@@@@@@@@@@@@
?>
</table>
<?php
error_reporting(0);
$region="oromia";
$by=$_POST['by'];
 if($by=="Age"){
	?>
   <table class="hovertable" align="center" border="15" width="500">
	<tr bgcolor="#33CCFF"><th colspan="4"><p align="center">Total population by Age</p><br> </th></tr>
<?php
//#############
 //$q=mysql_query("select COUNT(*) from resident where sex='sex' ")or die(mysql_error());
	//$row=mysql_fetch_array($q)
	 //$T=$row['COUNT(*)'];
//############


//@@@@@@@@@@@
$result = mysql_query("select count(*) FROM resident where Age<='20'  ");
$row = mysql_fetch_array($result);
$totall = $row[0];
//######
$res = mysql_query("select count(*) FROM resident where Age>='20' and Age<='30' ");
$rw = mysql_fetch_array($res);
$tot = $rw[0];
//@@@@@@@
$resa = mysql_query("select count(*) FROM resident where  Age>='30' and Age<='40' ");
$rw = mysql_fetch_array($resa);
$tota = $rw[0];
//######
$yal = mysql_query("select count(*) FROM resident where Age>='40' and Age<='50' ");
$rw = mysql_fetch_array($yal);
$to = $rw[0];
//
$ab = mysql_query("select count(*) FROM resident where Age>='51' ");
$rw = mysql_fetch_array($ab);
$abi = $rw[0];
//@@@@@@@@@@@
$yy = mysql_query("select count(*) FROM resident ");
$rw = mysql_fetch_array($yy);
$yyy = $rw[0];

// mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
$get= @mysql_query("SELECT * FROM resident")or die(mysql_error());
   $num= @mysql_num_rows($get);
   $total=0.0;
   for($i=0;$i<$num;$i++)
   {
   $qn=@mysql_result($get,$i,'sons');
   $total+=$qn;
   }
   //vvvvvvvvvvvvvvvvvvv

 //@@@@@@@@@@@@@@@@@@@




//@@@@@@@@@@@@@@

//@@@@@@@@@@@@@

echo"<tr>";
echo"<th>";
echo 'Age<=20:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$totall;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$totall/$yyy*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
echo"<tr>";
echo"<th>";
echo 'Age from 20-30:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tot;
echo"</td>";
//@@@@@
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tot/$yyy*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
echo"<tr>";
echo"<th>";
echo 'Age from 30-40:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tota;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tota/$yyy*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
echo"</tr>";
echo"<tr>";
echo"<th>";
echo 'Age from 40-50:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$to;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$to/$yyy*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
echo"</tr>";
//@@@@
echo"<tr>";
echo"<th>";
echo 'Age above 50:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$abi;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$abi/$yyy*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
//@@@@@@@@@@@@
echo"</tr>";
echo"<tr>";
echo"<th>";
echo 'Total:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.($totall+$tot+$to+$abi+$tota);
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.($totall+$tot+$to+$abi+$tota)/$yyy*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
echo"</tr>";}
?>
</table>
        <?php

 $region="oromia";
$by=$_POST['by'];
 if($by=="Religion"){
	?>
   <table class="hovertable" align="center" border="15" width="500">
	<tr bgcolor="#33CCFF"><th colspan="4"><p align="center">Total population by Religion</p><br> </th></tr>
<?php
$result = mysql_query("select count(*) FROM resident where religion='Orthodox' ");
$row = mysql_fetch_array($result);
$total = $row[0];
//######
$res = mysql_query("select count(*) FROM resident where  religion='Protestant' ");
$rw = mysql_fetch_array($res);
$tot = $rw[0];
//@@@@@@@
$resa = mysql_query("select count(*) FROM resident where   religion='Islam' ");
$rw = mysql_fetch_array($resa);
$tota = $rw[0];
//@@@@@@@@@@@
//@@@@@@@
$cat = mysql_query("select count(*) FROM resident where   religion='catholic' ");
$rw = mysql_fetch_array($cat);
$catt = $rw[0];
//@@@@@@@@@@@
$yy = mysql_query("select count(*) FROM resident ");
$rw = mysql_fetch_array($yy);
$y = $rw[0];
//@@@@@@@@@@@@@
echo"<tr>";
echo"<th>";
echo 'Orthodox:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$total;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$total/$y*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
echo"</tr>";
echo"<tr>";
echo"<th>";
echo 'Protestant:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tot;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tot/$y*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
echo"</tr>";


/////////////
echo"<tr>";
echo"<th>";
echo 'Islam:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tota;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tota/$y*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
/////////////
echo"<tr>";
echo"<th>";
echo 'catholic:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$catt;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$catt/$y*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@

echo"</tr>";
echo"<tr>";
echo"<th>";
echo 'Total:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$y;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$y/$y*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
echo"</tr>"; }
?>
</table>
         <?php
  $region="oromia";
$by=$_POST['by'];
 if($by=="Marital Status"){
	?>
	<table class="hovertable" align="center" border="15" width="500">
	<tr bgcolor="#33CCFF"><th colspan="4"><p align="center">Total population by Martial Status </p><br> </th></tr>
<?php
$result = mysql_query("select count(*) FROM resident where martial='Married' ");
$row = mysql_fetch_array($result);
$total = $row[0];
//######
$res = mysql_query("select count(*) FROM resident where  martial='UnMarried' ");
$rw = mysql_fetch_array($res);
$tot = $rw[0];
//@@@@@@@
$resa = mysql_query("select count(*) FROM resident where   martial='Divorced' ");
$rw = mysql_fetch_array($resa);
$tota = $rw[0];

//@@@@@@@@@@@
$yy = mysql_query("select count(*) FROM resident ");
$rw = mysql_fetch_array($yy);
$yyy = $rw[0];
//@@@@@@@@@@@@@
echo"<tr>";
echo"<th>";
echo 'Married:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$total;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$total/$yyy*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
echo"<tr>";
echo"<th>";
echo 'UnMarried:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tot;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tot/$yyy*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
echo"</tr>";


/////////////
echo"<tr>";
echo"<th>";
echo 'Divorced:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tota;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tota/$yyy*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@

//@@@@@@@@@@@@
echo"</tr>";
echo"<tr>";
echo"<th>";
echo 'Total:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$yyy;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$yyy/$yyy*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
echo"</tr>"; }
?>
</table>
       <?php
  $region="oromia";
$by=$_POST['by'];
 if($by=="house Type"){
	?>
	<table class="hovertable" align="center" border="15" width="500">
	<tr bgcolor="#33CCFF"><th colspan="4"><p align="center">Total population by house Type </p><br> </th></tr>
<?php
$result = mysql_query("select count(*) FROM resident where type='Private' ");
$row = mysql_fetch_array($result);
$total = $row[0];
//######
$res = mysql_query("select count(*) FROM resident where  type='Kebele' ");
$rw = mysql_fetch_array($res);
$tot = $rw[0];
//@@@@@@@
$resa = mysql_query("select count(*) FROM resident where   type='Tenants' ");
$rw = mysql_fetch_array($resa);
$tota = $rw[0];

//@@@@@@@@@@@
$yy = mysql_query("select count(*) FROM resident ");
$rw = mysql_fetch_array($yy);
$yyy = $rw[0];
//@@@@@@@@@@@@@
echo"<tr>";
echo"<th>";
echo 'Private:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$total;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$total/$yyy*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
echo"<tr>";
echo"<th>";
echo 'Kebele:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tot;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tot/$yyy*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
echo"</tr>";


/////////////
echo"<tr>";
echo"<th>";
echo 'Tenants:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tota;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$tota/$yyy*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@

//@@@@@@@@@@@@
echo"</tr>";
echo"<tr>";
echo"<th>";
echo 'Total:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$yyy;
echo"</td>";
//@@@@@@@@@
echo"<th>";
echo 'percent:';
echo"</th>";
echo"<td>";
echo '<font color="#FF0000">'.$yyy/$yyy*100;
echo"</td>";
echo"</tr>";
//@@@@@@@@@@
echo"</tr>"; }
?>
</table>
</ul>
	<?php include('db.php'); ?>
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;List of Population</strong>
                            </div>
                            <thead>
                                <tr>
 <th style="text-align:center;" >Image</th>
<th style="text-align:center;">Reg_no</th>
<th style="text-align:center;">First Name</th>
<th style="text-align:center;">Middle Name</th>
<th style="text-align:center;">Last Name</th>
      <th style="text-align:center;">Age</th>
      <th style="text-align:center;">Sex</th>
      <th style="text-align:center;">DateofBirth</th>
	<th style="text-align:center;">PlaceofBirth</th>
	<th style="text-align:center;">Nationality</th>
	<th style="text-align:center;">Region</th>
	<th style="text-align:center;">Zone</th>
	<th style="text-align:center;">woreda</th>
	<th style="text-align:center;">kebele</th>
	<th style="text-align:center;">house no</th>
     <th style="text-align:center;">Action</td

                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("select * from resident order by reg_no ASC" ) or die (mysql_error());
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['reg_no'];
								?>
								<tr>
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;"><a href="#<?php  echo $id;?>" data-toggle="modal">
									<?php if($row['plocation'] != ""): ?>
									<img src="upload/<?php echo $row['plocation']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?>
									</a>
								</td>
                                           <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['reg_no']; ?></td>

								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['fname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['mname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['lname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['age']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['sex']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['dateofbirth']; ?></td>  
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['placeofbirth']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['nationality']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['region']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['zone']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['woreda']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['kebele']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['houseno']; ?></td>
			<td style="text-align:center; width:350px;">
									<a href="resedit.php<?php echo '?id='.$id; ?>" class="btn btn-info"><font color="white" size="3"> Edit</a>
									 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" ><font color="white" size="3"> Delete </a>
									 <a href="suppl.php<?php echo '?id='.$id; ?>" class="btn btn-info"><font color="white" size="3"> View</a>
								</td>

										<!-- Modal -->
								<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<h3 id="myModalLabel">Delete</h3>
								</div>
								<div class="modal-body">
								<p><div class="alert alert-danger">Are you Sure you want Delete?</p>
								</div>
								<hr>
								<div class="modal-footer">
								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
								<a href="resdelete.php<?php echo '?reg_no='.$id; ?>" class="btn btn-danger">Yes</a>
								</div>
								</div>
								</div>
								</tr>

								<!-- Modal Bigger Image -->
								<div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">

								<h3 id="myModalLabel"><b><?php echo $row['fname']." ".$row['mname']; ?></b></h3>
								</div>
								<div class="modal-body">
								<?php if($row['plocation'] != ""): ?>
								<img src="upload/<?php echo $row['plocation']; ?>" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php else: ?>
								<img src="images/default.png" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php endif; ?>
								</div>
								<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
								</div>


											
								<?php } ?>
                            </tbody>
                        </table>

	</center>
</table>
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
