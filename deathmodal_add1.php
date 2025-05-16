	    <!-- Button to trigger modal -->
		<a href="#myModal" class="btn btn-primary"data-toggle="modal"><font color="white" size="4">Click Here To Add</font></a>
		
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Fill corrcetly</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="deathadd1.php"  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Image</label></td>
							<td width="30"></td>
							<td><input type="file" id="span9001" name="image" required /></td>
						</tr>

<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Full Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="name" id="span9001" placeholder="Full Name" required  pattern="[A-Z a-z]{3,}"/></td>
						</tr>
<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age:</label></td>
							<td width="30"></td>
							<td><input type="text" name="age" id="span9001" placeholder="age" required  pattern="[0-9]{0,}"/></td>
						</tr>

						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Sex</label></td>
							<td width="30"></td>
							<td><select name="sex" style="background-color:#Green;" width="25">
							
								<option>Male</option>
								<option>Female</option>
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date Of Birth</label></td>
							<td width="30"></td>
							<td><input type="date" name="dateofbirth" placeholder="Date of Birth" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place Of Birth</label></td>
							<td width="30"></td>
							<td><input type="text" name="pplaceofbirth" id="span9001" placeholder="Place of Birth" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td width="30"></td>
							<td><input type="text" name="nationality" id="span9001" placeholder="nationality" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date of Death</label></td>
							<td width="30"></td>
							<td><input type="date" name="dateofdeath" placeholder="Date of Death" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place of Death</label></td>
							<td width="30"></td>
							<td><input type="text" name="placeofdeath" id="span9001" placeholder="Place of Death" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Cause of Death</label></td>
							<td width="30"></td>
						
							<td><input type="text" name="causeofdeath" id="span9001" placeholder="causeofdeath" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Time of Death</label></td>
							<td width="30"></td>
							<td><input type="time" name="timeofdeath" placeholder="Time of Death" required /></td>
						</tr>
								<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date of Registration </label></td>
							<td width="30"></td>
							<td><input type="date" name="date" id="span9001" placeholder="date" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
			<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Approved By</label></td>
							<td width="30"></td>
							<td><input type="text" name="approve" id="span9001" placeholder="Approved by" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Remark</label></td>
							<td width="30"></td>
							<td><input type="text" name="remark" id="span9001" placeholder="remark" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
	

							
		
											
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			