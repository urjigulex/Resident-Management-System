<?php 

include('db.php');

$get_id=$_GET['post_id'];

mysql_query("delete from post where post_id = '$get_id' ")or die(mysql_error());
header('location:posts.php');
?>