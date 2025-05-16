<?php 
include ('db.php'); 
include ('header1.php'); 
?>

<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->
<div >
<?php
$ctrl = $_REQUEST['key1'];
												$query=mysql_query("select * from death where reg_no='{$ctrl}'")or die(mysql_error());

$row=mysql_fetch_array($query);
//$row = $query->fetch();
														
  ?>


 
								<div>
									<center>
													

														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/death.jpg"  width="870"alt="1" title=" " />
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.
														
														<br/><br/>
									
									</center>
								</div>
			
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<?php if($row['location'] != ""): ?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="upload/<?php echo $row['location']; ?>" width="80px" height="80px" style="border:1px solid #333333;">
			<?php else: ?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/default.png" width="80px" height="80px" style="border:1px solid #333333;">
			<?php endif; ?>
</div></div>
<br>
<br>														Death Reg No:<input type="text" name="reg_no" style="width: 15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;" required value=<?php echo $row['reg_no']; ?>></u>

							    <div class="row">
											<div class="col-md-3">
											
											
											<br/>&nbsp;&nbsp;&nbsp;&nbsp;Decident Full Name:
											<u><input type="text" name="name" style="width:40%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['name']; ?>></u>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Age:<u><input type="text" name="Age" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['age']; ?>></u>
									</div>
														</div>
								<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;&nbsp;Sex<u><input type="text" name="sex" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['sex']; ?>></u>
											
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth:
											<u><input type="text" name="dateofBirth" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['dateofbirth']; ?>></u>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											Place of birth:
												<u><input type="text" name="placeofbirth" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['pplaceofbirth']; ?>></u>
												
								</div>
								</div>
								<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;&nbsp;Nationality:<u><input type="text" name="sex" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['nationality']; ?>></u>
											
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth:
											<u><input type="text" name="dateofBirth" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['dateofbirth']; ?>></u>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											Place of birth:
												<u><input type="text" name="placeofbirth" style="width:15%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['pplaceofbirth']; ?>></u>
												
								</div>
								</div>
								
								<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;
								Date of Death :<u><input type="text" name="dateofdeath" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['dateofdeath']; ?>></u>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Place of Death :<u><input type="text" name="placeofdeath" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['placeofdeath']; ?>></u>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

Cause of Death :<u><input type="text" name="placeofdeath" style="width:25%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;" value=<?php echo $row['causeofdeath']; ?>></u>

								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</u>
						
								
								</div>
								</div>
								
								
								<div class="row">
								<div class="col-md-15">
								&nbsp;&nbsp;&nbsp;		Registered Date :<u><input type="text" name="dateofdeath" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['date']; ?>></u>
		&nbsp;&nbsp;&nbsp;		Registered By :<u><input type="text" name="dateofdeath" style="width:10%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['approve']; ?>></u>		&nbsp;&nbsp;&nbsp;		&nbsp;&nbsp;&nbsp;
	Remark:<u><input type="text" name="dateofdeath" style="width:20%;border-top: none; border-left: none;border-right: none;border-bottom: 1px solid;"value=<?php echo $row['remark']; ?>></u>
									
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<u>Signiture:</u>
												<u><img src="images/Capturs.png" alt="1" title=" " /></u>
										
												
								</div>
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
							<center>
<a href="serde.php"><img src="images/back.jpg" width="90"></a>
</body>
</html>
								
