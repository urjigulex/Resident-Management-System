<?php include('db.php'); ?>
<?php include('header1.php'); ?>
<html><head>
<body>

    <div class="row-fluid">
        <div class="span12">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
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
	<th style="text-align:center;">house no</td
                                    
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

											
								<?php } ?>
                            </tbody>
                        </table>


          


