<?php 

include('db.php');

$get_id=$_GET['reg_no'];

mysql_query("delete from resident where reg_no = '$get_id' ")or die(mysql_error());
header('location:searchhouse.php');
?>