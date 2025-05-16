<?php 

include('db.php');

$get_id=$_GET['no'];

mysql_query("delete from comment where no = '$get_id' ")or die(mysql_error());
header('location:comindex1.php');
?>