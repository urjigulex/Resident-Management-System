<?php 

include('db.php');

$get_id=$_GET['message_id'];

mysqli_query($con,"delete from messages where message_id = '$get_id' ")or die(mysqli_error($con));
header('location:commessage.php');

?>