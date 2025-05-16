
<?php
include('db.php');
$ctrl=$_REQUEST['key1'];
$result=mysqli_query($con,"delete from withdrawal where  IdNumber = '$ctrl'");
echo "<script>location.href='viewclearance.php'</script>"

?> 