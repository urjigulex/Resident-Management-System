<?php 

include('db.php');

$get_id=$_GET['id_no'];

mysql_query("delete from id_card where id_no = '$get_id' ")or die(mysql_error());
header('location:idindex.php');
?>
<script>
alert("User Deleted successfully !")
			 
				</script>