<?php include('db.php'); ?>
<?php include('header1.php'); ?>


<body>


    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">


<?php include('supmodal_add.php'); ?>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
									<th style="text-align:center;" >Reg No</th>
								    <th style="text-align:center;" >Petitioner ID_No</th>
									<th style="text-align:center;" >Full Name</th>
                                    <th style="text-align:center;">Sex</th>
                                    <th style="text-align:center;">Respondent ID_No</th>
                                    <th style="text-align:center;">Full Name</th>
									<th style="text-align:center;">Sex</th>
									<th style="text-align:center;">No of Children </th>
									<th style="text-align:center;">No of Children<18 </th>
									<th style="text-align:center;">Action</td>
                                    
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("select * from devorce order by reg_no ASC" ) or die (mysql_error());
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['reg_no'];
								?>
								
							
								
								<tr>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['reg_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['pid_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['pfullname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['psex']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['rid_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['rfullname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['rsex']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['noofchild']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['under18']; ?></td>
							
								
								
								<td style="text-align:center; width:350px;">
									<a href="divedit.php<?php echo '?id='.$id; ?>" class="btn btn-info">Edit</a>
									 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" >Delete </a>
									 
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
								<a href="divdelete.php<?php echo '?reg_no='.$id; ?>" class="btn btn-danger">Yes</a>
								</div>
								</div>
								</div>
								</tr>

								<!-- Modal Bigger Image -->
								<!-- Modal Bigger Image -->
								<div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">

								<h3 id="myModalLabel"><b><?php echo $row['pfullname']." ".$row['page']; ?></b></h3>
								</div>
								
</div>
								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>


</body>
</html>


