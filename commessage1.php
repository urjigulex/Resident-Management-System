<?php include('db.php'); ?>
<?php include('header1.php'); ?>
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
   background-image:url(images/y3.jpg);
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   margin: 0;
   text-align: center;
}
</style>


<body>

    <div class="row-fluid">
        <div class="span12">


 

            <div class="container">

        


                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>						         
									<th style="text-align:center;" >first name</th>
                                    <th style="text-align:center;">lastname</th>
                                    <th style="text-align:center;">message</th>
									<th style="text-align:center;">email</th>
									<th style="text-align:center;">message_date</th>
									<th style="text-align:center;">rtype</td
                                    
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("select * from messages order by  message_id " ) or die (mysql_error());
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['message_id'];
								?>
								
								<tr>
								
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['fname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['lname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['message']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['email']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['message_date']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['rtype']; ?></td>

								
								
								<td style="text-align:center; width:350px;">
									<a href="messagesend.php<?php echo '?id='.$id; ?>" class="btn btn-info">View</a>
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
								<a href="deletee.php<?php echo '?message_id='.$id; ?>" class="btn btn-danger">Yes</a>
								</div>
								</div>
								</div>
								</tr>

								<!-- Modal Bigger Image -->
								<div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								
								
								<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
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


