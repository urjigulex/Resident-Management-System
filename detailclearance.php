
<?php 
include ('db.php'); 
include ('header1.php'); 
?>
<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="row-fluid">
<div class="span3"></div>
<div class="span6">


<div class="hero-unit-3">
<center>
	
		
<?php
if(isset($_GET["attempt"]))
{
$attempt=$_GET["attempt"];
}
?>
<?php 
$session_email="";

include('TestSession.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_email'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<center> 


 
 
 
     

					
					
					<?php
					 $conn=mysql_connect("localhost","root","");
	  mysql_select_db("onlinekebele",$conn);

$ctrl = $_REQUEST['key1'];
$query="SELECT * FROM withdrawal where IdNumber='{$ctrl}'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==1){
while($row=mysql_fetch_array($result)){
$row1=$row[1];
$row2=$row[2];
$row3=$row[3];
$row4=$row[4];
$row5=$row[5];
$row6=$row[6];
$row7=$row[7];
$row0=$row[8];
}
?>
						<div><b> Withdrawal Certeficate</b></div>
<center>
 <table valign='top' align="center" style="width:360px; height:300px;border-radius:16px;border:2px solid #686868">

<form>
<td><font face="times new roman" color="#000000" size="3"><b>IdNumber:</b></font></td><td><?php echo $row1?></td>
</tr>
<tr>
<td><font face="times new roman" color="#000000" size="3"><b>FirstName:</b></td><td><?php echo $row2?></td>
</tr>
<tr>
<td><font face="times new roman" color="#000000" size="3"><b>MiddleName:</b></td><td><?php echo $row3?></td>
</tr>
<tr>
<td><font face="times new roman" color="#000000" size="3"><b>LastName:</b></td><td><?php echo $row4?></td>
</tr>
<tr>
<td><font face="times new roman" color="#000000" size="3"><b>Age:</b></td><td><?php echo $row5?></td>
</tr>
<tr>
<td><font face="times new roman" color="#000000" size="3"><b>Sex:</b></td><td><?php echo $row6?></td>
</tr>
<tr>
<td><font face="times new roman" color="#000000" size="3"><b>Reason_Of_Clearance:</b></td><td><?php echo $row7?></td>
</tr>
<div class="row">
		<div class="col-md-15">
<tr>
<td><font face="times new roman" color="#000000" size="3"><b>DateOfTaken:</b></td><td><?php echo date('Y-m-d');?></td>
</tr>
<tr><td></td><td>Chairman signature:<img src="images/Capturss.png"></td>
</table></center>
</td></tr>

<!--<td><input name="" type="submit" style="cursor:pointer;" value="Print IdCard" id="" /></td>--></tr>
<tr></tr>
</form>
<div class="pull-right">
								<button onclick="window.print()" id="btnPrint" class="btn btn-primary btn-m " >
										Print 
									</button>
										
									</div>
							<center>
<a href="viewclearance1.php"><img src="images/back.jpg" width="90"></a></center>
<?php
}	  
else{
echo"<h4><font color=red>Not Found!!!</font></h4>";

}

?>
		


 </div> </center> 
 