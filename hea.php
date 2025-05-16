<?php
	$view = "";
	$s_id = "";
	if (isset($_GET['view'])) {
		$view = $_GET['view'];
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title></title>

</head>
	
	<div id="header_wrapper">
		<div id="header">    	
			<div id="site_title">        
				 <br/><h1 style="font-family:'Times New Roman', Times, serif ">
					<?php if ($lng != "tig") echo "kebele Management System"; else echo "??? ?????? ????"; ?>
					</h1>          
			</div> <!-- end of site_title -->          
			<div> <span id="lang">this is the language display</span>
				
				<?php if (!isset($_SESSION["username"])) { 					 
				 ?>

				<?php }  else { ?>
					<a style="color:#FFFFFF; font-weight:bold; text-decoration:none; float:right; " 
						href="index.php?pg=logout&lng=<?php echo $lng;?>"><br/> <br/> 
						<img height="20px;" width="20px;" src="images/Capture.PNG"/> 
						<?php if ($lng != "tig" ) echo "Logut"; else echo "????"; } ?></a>

			</div>
		</div>
	</div>
	
	<div id="menu">
	<!--<a href="signup.php">create account</a>-->
     
    <ul  >
                <?php if ($lng == "tig" and isset($_SESSION["username"])) { ?> 

                    <?php if (isset($_SESSION["username"]) and $_SESSION["user_type"] == "Clerk"  ) { ?>  

                        <li><a href="index.php?pg=register_r&lng=tig">???? ?????</a></li>
                        <li><a href="index.php?pg=view_resident&lng=tig">???? ????</a></li>
                        <li><a href="index.php?pg=give_withdraw&lng=tig">???? ???? ???</a></li>
                        <li><a href="index.php?pg=view_withdraw&lng=tig">???? ???? ?????? ???? </a></li>
                    <?php } ?>

                    <?php if (isset($_SESSION["username"]) and $_SESSION["user_type"] == "manager"  ) { ?>				
                    
                        <li><a href="index.php?pg=give_id&lng=tig">????? ???</a></li>
                        <li><a href="index.php?pg=renew_id&lng=tig">????? ????</a></li>
                        <li><a href="index.php?pg=view_givenID&lng=tig">????? ????? ???? ????</a></li>
                        <li><a href="index.php?pg=give_certi&lng=tig">???? ???? ??? </a></li>
        				<li><a href="index.php?pg=view_certi&lng=tig">???? ???? ????? ????</a></li>
        				<li><a href="index.php?pg=view_certi&lng=tig">???? ???? ????</a></li>
    				<?php } ?>

                    <?php if (isset($_SESSION["username"]) and $_SESSION["user_type"] == "User"  ) { ?>
                        <li><a href="index.php?pg=view_certi&lng=tig">???? ???? ????</a></li>
                        <li><a href="index.php?pg=view_resident&lng=tig">???? ????</a></li>
                    <?php } ?>
					<?php if (isset($_SESSION["username"]) and $_SESSION["user_type"] == "Admin"  ) { ?>
                        <li><a href="index.php?pg=singup_sing&lng=tig">????? ????</a></li>
                    <?php } ?>
                    
				<?php } else if(isset($_SESSION["username"])) {?>

                    <?php if (isset($_SESSION["username"]) and $_SESSION["user_type"] == "Clerk" ) { ?>

                        <li><a href="index.php?pg=register_r">Register Resident</a></li>
                        <li><a href="index.php?pg=view_resident">View Resident</a></li>
                        <li><a href="index.php?pg=give_withdraw">Give Withdrawal</a></li>
                        <li><a href="index.php?pg=view_withdraw">View Withdrawals</a></li>
                    <?php } ?>
                    
                    <?php if (isset($_SESSION["username"]) and $_SESSION["user_type"] == "manager"  ) { ?>
                        <li><a href="index.php?pg=give_id">Give ID Number</a></li>
                        <li><a href="index.php?pg=renew_id">Renew ID Number</a></li>
                        <li><a href="index.php?pg=view_givenID">View Residents ID Given </a></li>
                        <li><a href="index.php?pg=give_certi">Give Certificate </a></li>
                        <li><a href="index.php?pg=view_certi">View Certificate</a></li>
                        <li><a href="index.php?pg=view_certi">Update Certificate</a></li>

                    <?php } ?>

                    <?php if (isset($_SESSION["username"])  and $_SESSION["user_type"] == "User" ) { ?>
                        <li><a href="index.php?pg=view_resident">View Resident</a></li>
                        <li><a href="index.php?pg=view_certi">View Certificate</a></li>
						<li><a href="update.php">change password</a></li>
                    <?php } ?>
					
                    
                <?php }  ?>
				<?php if (isset($_SESSION["username"]) and $_SESSION["user_type"] == "Admin"  ) { ?>
                        <li><a href="index.php?pg=singup_sing&lng=tig">create account</a></li>
						<li><a href="index.php?pg=singup_sing&lng=tig">create account</a></li>
                    <?php } ?>

                   


                 <?php if ($lng != "tig") {
	        	if ($path == "view_givenID" and $view == "singleID") { ?>
	        	
	        	<a style="color:#FF00FF; text-decoration:none;" href="javascript:window.print();"> 
	        		<img src="images/print.png" alt="print" title="print page">Print ID</a> 
	        	<?php } }?>


            </ul>
    

</div> <!-- end of menu -->

	
<body>
</body>
</html>
