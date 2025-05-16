<?php 

include('db.php');

$get_id=$_GET['message_id'];

mysql_query("delete from usermessage where message_id = '$get_id' ")or die(mysql_error());
header('location:comm.php');

?>