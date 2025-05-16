
<?php
include('db.php');
$ctrl=$_REQUEST['key1'];
$result=mysql_query("delete from house where  HouseNumber = '$ctrl'");
echo "<script>location.href='housee.php'</script>"

?> 