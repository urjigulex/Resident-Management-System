<?php include('dbcon.php'); ?>
<?php include('header1.php'); 

?>
<html>
<head>
<title>Create New User </title>
</head>
<body>
	  
	  <div id="site_title"><h3 id="hheader"style="margin-left:50px;margin-top:60px;font-size:30px;font-family: Black;">
	  <b><span style="font-size:50px;color:w"></b><p align="center">Online Kebele Residence Managment System </h3></div>
			</div>
			
			
    <div >
	
					<form method="post" action="supadd.php"  enctype="multipart/form-data">
					 <br/>
					 <br/>
					 <br/>
					 <br/>
					<table class="table1">
					<tr>
					<td colspan=3><h4>Create Account</h4>
					<br/>
					 <br/></td></tr>
					
					<tr>
							<td><label style="color:#3a87ad; font-size:18px;">User Name:</label></td>
							
							<td><input type="text" name="username" placeholder=" username" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Password</label></td>
							
							<td><input type="password" name="password" placeholder="password" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Confirm</label></td>
							
							<td><input type="password" name="confirm" placeholder="confirm" required /></td>
						</tr>
						<tr>
						<td></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="Submit" class="btn btn-primary">Create</button>
						&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="loginindex.php">Close</button></td>
						</table>
						
						
    </div>
    <div>
    

    </div>
	

					</form>
    </div>			