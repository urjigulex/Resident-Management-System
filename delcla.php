<?php 

include('db.php');

$get_id=$_GET['phone'];

mysql_query("delete from clark_account where phone= '$get_id' ")or die(mysql_error());
header('location:mancla.php');

?>

