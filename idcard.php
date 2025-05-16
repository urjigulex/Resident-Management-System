<?php 
include ('db.php'); 
include ('header1.php'); 
$ID=$_GET['id'];
?>
<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->




<div >
<?php
  $query=mysql_query("select * from id_card where id_no='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
//$row = $query->fetch();
													
  ?>
<img src="images/ETHP0001.gif" width="100"><font face="elephant" size="3" color="blue"> Bale Haramaya Zone Sinana woreda Bate  Kebele Residents Identification Card</font>
<img src="images/or.png" width="100">
   <div class="row">
		<div class="col-md-10">
										
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full Name:<input type="text" name="fname" style="width: 10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;" required value=<?php echo $row['fname']; ?>></u>
					<input type="text" name="mname" style="width: 10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;" required value=<?php echo $row['mname']; ?>></u>
					<input type="text" name="lname" style="width: 10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;" required value=<?php echo $row['lname']; ?>></u>
					
  
			<?php if($row['location'] != ""): ?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="upload/<?php echo $row['location']; ?>" width="80px" height="80px" style="border:1px solid #333333;">
			<?php else: ?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/default.png" width="80px" height="80px" style="border:1px solid #333333;">
			<?php endif; ?>
</div></div>

	    <div class="row">
		<div class="col-md-15">
			&nbsp;&nbsp;&nbsp;&nbsp;Sex:
			<u><input type="text" name="sex" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['sex']; ?>></u>
&nbsp;&nbsp;&nbsp;&nbsp;Age:
			<u><input type="text" name="age" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['age']; ?>></u>
&nbsp;&nbsp;&nbsp;&nbsp;kebele:
			<u><input type="text" name="kebele" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['Kebele']; ?>></u>

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			ID Card No:	<input type="text" name="id_no" style="width: 15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;" required value=<?php echo $row['id_no']; ?>></u>
	    </div>
		</div>
		<div class="row">
		<div class="col-md-15">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nationality:											
			<u><input type="text" name="nationality" style="width:25%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['nationality']; ?>></u>
phone:	<u><input type="text" name="phone" style="width:25%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['phone']; ?>></u>

			

								</div>
								</div>
								
		<div class="row">
		<div class="col-md-15">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Date of Birth:<u><input type="text" name="dateofbirth" style="width:30%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['dateofbirth']; ?>></u>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<u>Renewal Year:</u> 
		</div>
		</div>
		<div class="row">
		<div class="col-md-15">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Place of Birth:<u><input type="text" name="placeofbirth" style="width:30%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['placeofbirth']; ?>></u>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
			20_________________________ 
		</div>
		</div>
								
		<div class="row">
		<div class="col-md-15">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Region:<u><input type="text" name="rigion" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['region']; ?>></u>
			 Zone:<u><input type="text" name="zone" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['zone']; ?>></u>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
			20_________________________ 				
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
		</div>
		<div class="row">
		<div class="col-md-15">
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Woreda:<u><input type="text" name="woreda" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['woreda']; ?>></u>
			House No:<u><input type="text" name="houseno" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['houseno']; ?>></u>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
			20_________________________ 					
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
						</div>
						</div>
	<div class="row">
		<div class="col-md-15">
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Occupation:<u><input type="text" name="woreda" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['occupation']; ?>></u>

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Date Given:<u><input type="text" name="woreda" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['dategiven']; ?>></u>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	
	
			20_________________________ 
	<div class="row">
		<div class="col-md-15">

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
			Approved By:<u><input type="text" name="approvedby" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['approvedby']; ?>></u>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signiture:&nbsp;&nbsp;&nbsp;<u><img src="images/Capturs.png" alt="1" title=" " /></u>
									
	
						</div>
						</div>
						
							

								</div>
								</div>
								</div>
								</div>
							
								<div class="pull-right">
								<button onclick="window.print()" id="btnPrint" class="btn btn-primary btn-m " >
										Print 
									</button>
										
									</div>							<center>
<a href="idindex1.php"><img src="images/back.jpg" width="90"></a></center>

</body>
</html>
								