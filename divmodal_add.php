	    <!-- Button to trigger modal -->
		
		<a href="clarkindex.php">Back to Home</a>
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Click Here To Add</a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="divadd.php"  enctype="multipart/form-data">
					<table class="table1">
					<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Registration No:</label></td>
							<td width="30"></td>
							<td><input type="text" name="reg_no" placeholder=" Registration No" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Petitioner ID No</label></td>
							<td width="30"></td>
							<td><input type="text" name="pid_no" placeholder="petitioner ID_No" required /></td>
						</tr>
						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Petitioner Full Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="pfullname" placeholder="Full Name" required /></td>
						</tr>
						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Sex</label></td>
							<td width="30"></td>
							<td><select name="psex" style="background-color:#Green;" width="25">
								<option>Sex</option>
								<option>Male</option>
								<option>Female</option>
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date Of Birth</label></td>
							<td width="30"></td>
							<td><input type="date" name="pdateofbirth" placeholder="Date of Birth" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place Of Birth</label></td>
							<td width="30"></td>
							<td><input type="text" name="pplaceofbirth" placeholder="Place of Birth" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td width="30"></td>
							<td><input type="text" name="pnation" placeholder="Nationality" required /></td>
						</tr>
						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Respondent ID No</label></td>
							<td width="30"></td>
							<td><input type="text" name="rid_no" placeholder="Respondent Id No" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Respondent Full Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="rfullname" placeholder="Full Name" required /></td>
						</tr>
						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Sex</label></td>
							<td width="30"></td>
							<td><select name="rsex" style="background-color:#Green;" width="25">
								<option>Sex</option>
								<option>Male</option>
								<option>Female</option>
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date Of Birth</label></td>
							<td width="30"></td>
							<td><input type="date" name="rdateofbirth" placeholder="Date of Birth" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place Of Birth</label></td>
							<td width="30"></td>
							<td><input type="text" name="rplaceofbirth" placeholder="Place of Birth" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td width="30"></td>
							<td><input type="text" name="rnationality" placeholder="Nationality"required /></td>
						</tr>	
<tr>
							<td><label style="color:#3a87ad; font-size:18px;">No of Children</label></td>
							<td width="30"></td>
							<td><input type="text" name="noofchild" placeholder="No of children" required /></td>
						</tr>			
<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Children under 18</label></td>
							<td width="30"></td>
							<td><input type="text" name="under18" placeholder="Children under 18" required /></td>
						</tr>	
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date of Separation</label></td>
							<td width="30"></td>
							<td><input type="date" name="dateofsep" placeholder="Date of Separation" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place of Separation</label></td>
							<td width="30"></td>
							<td><input type="text" name="placeofsep" placeholder="Place of Separation" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Time of Separation</label></td>
							<td width="30"></td>
							<td><input type="time" name="timeofsep" placeholder="Time of Separation" required /></td>
						</tr>
						</tr>
							<tr>
							<td><label style="color:#3a87ad; font-size:18px;"> Approved By</label></td>
							<td width="30"></td>
							<td><input type="text" name="approvedby" placeholder="Approved By " required /></td>
						</tr>
							<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date Approved</label></td>
							<td width="30"></td>
							<td><input type="date" name="dateapprove" placeholder="Date Approved" required /></td>
						</tr>
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			