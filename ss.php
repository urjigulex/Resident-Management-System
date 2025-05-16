<?php include('dbcon.php'); ?>
<?php include('header1.php'); 

?>
<html>
<head>
<title>send report </title>
</head>
<body>
	  
	  <div id="site_title"><h3 id="hheader"style="margin-left:50px;margin-top:60px;font-size:30px;font-family: Black;">
	  <b><span style="font-size:50px;color:w"></b><p align="center">Online Kebele Residence Managment System </h3></div>
			</div>
			
			
    <div >
	
					<form method="post" action="send_report.php"  enctype="multipart/form-data">
					 <br/>
					 <br/>
					 <br/>
					 <br/>
					<table class="table1">
					<tr>
					<td colspan=3><h4>send report</h4>
					<br/>
					 <br/></td></tr>
					
					<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Residents id:</label></td>
							
							<td><input type="text" name="Residents id" placeholder=" Residents id" required /></td>
						</tr>
						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">first name:</label></td>
							
							<td><input type="text" name="first name" placeholder=" first name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">last name:</label></td>
							<td><input type="text" name="last name" placeholder=" last name" required /></td>
							
							
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">report_type</label></td>
							<td width="0"></td>
							<td><select name="report_type" style="background-color:#Green;" width="0">
								<option>health related</option>
								<option>sport</option>
								<option>education</option>
						<option>ICT</option>
								<option>population</option>
								<option>agricalture</option>
								</select></td>
						</tr>
								<tr>
							<td><label style="color:#3a87ad; font-size:18px;">report:</label></td>
							
							<td><input type="text" name="report" placeholder="report" required /></td>
						</tr>
						<td></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="Submit" class="btn btn-primary">send</button>
						&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="clarkindex.php">Close</button></td>
						</table>
						
						
    </div>
    <div>
    

    </div>
	

					</form>
    </div>		