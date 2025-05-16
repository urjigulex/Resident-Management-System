<?php
session_start();
if (isset($_POST['Login']))
		{
$privilege=$_POST["privilege"];
$username=$_POST["username"];
$password= $_POST["password"];
$crypt_pass = md5($password);
$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db){
echo "no connection established"; 
}
mysql_select_db("onlinekebele",$db) or die("Couldn't select the database.");
$qry= "select * from users res_account username='".$username."' and password='".$password ."' and privilege='".$privilege."' ";
$results = mysql_query($qry,$db) or die(mysql_error());
$count=mysql_num_rows($results);
			
if($count<='0'){
	?>
	<font color="white">
	
<script>
					window.alert('please match privlage,username and password');
					window.location.href='index11.php';
				</script>

<?php }

else
{
     
while ($row = mysql_fetch_array($results)) {

$_SESSION['user_email']=$row['user_email'];	
 
  $state=$row['state'];

  
  if($state=="active")
  {
if($privilege=="Resident"){
$_SESSION['user_email']=$row['user_email'];

echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';?>
<script>
					
					window.location.href='userindex.php';
				</script>

				<?php
}

else if($privilege=="--select_role--"){
 $error= "Select Privilege.";
  }
  }
else
{
	$error="this Account is deactivated or inactive";
	//header('location:index1.php');
	include("index11.php");
	?>
	</font>
	<?php 
}

}}}
?>


