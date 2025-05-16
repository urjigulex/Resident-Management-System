<?php 

include('db.php');

$get_id=$_GET['phone'];

mysqli_query($con,"delete from res_account where phone= '$get_id' ")or die(mysqli_error($con));
header('location:manres.php');

?>
