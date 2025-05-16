<?php 

include('db.php');

$get_id=$_GET['reg_no'];

mysql_query("delete from smad where reg_no= '$get_id' ")or die(mysql_error());
header('location:viewmessage.php');

?>
