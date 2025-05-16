<?php 

include('db.php');

$get_id=$_GET['name'];

mysql_query("delete from comment where name = '$get_id' ")or die(mysql_error());
header('location:comindex1.php');
?>