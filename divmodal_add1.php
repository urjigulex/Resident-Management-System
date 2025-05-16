	    <!-- Button to trigger modal -->
		
		 <a href="#myModal" class="btn btn-primary"data-toggle="modal"><font color="white" size="3">Click Here To Add</font></a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Please Fill Correctly</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="divadd1.php"  enctype="multipart/form-data">
					<table class="table1">
					
						<td><h3 id="myModalLabel">Petitioner Information</h3></td>

<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Petitioner ID No</label></td>
							<td width="30"></td>
							<td><input type="text" name="pid_no" placeholder="petitioner ID_No" required required></td/></td>
						</tr>

						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Full Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="pfullname" id="span9001" placeholder="Full Name" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
							<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age:</label></td>
							<td width="15"></td>
							<td><input type="number" name="page" min='18' placeholder="age" required required pattern="([0-9])+(?:-?\d){1,}"></td/></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Sex</label></td>
							<td width="30"></td>
							<td><select name="psex" style="background-color:#Green;" width="25">
								
								<option>Male</option>
								<option>Female</option>
								</select></td>
						
						
							<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date of Birth</label></td>
							<td width="30"></td>
							<td><input type="date" name="pdateofbirth" placeholder="pdateofbirth" required /></td>
						</tr>
					<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place Of Birth</label></td>
							<td width="15"></td>
							<td><input type="text" name="pplaceofbirth" id="span9001" placeholder="Place of Birth" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td width="15"></td>
							<td><select name="pnation" style="background-color:#Green;" width="15" required>
							
								 <option>Ethiopian  </option>
								<option>America</option>
								<option>Sudan </option>
								<option>Kenya</option>
								<option>other </option>
								</select></td>
							
						</tr>
						<td><p align="center"><h3 id="myModalLabel">Respondent Information</h3></p></td>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">ID No</label></td>
							<td width="15"></td>
							<td><input type="text" name="rid_no" placeholder="Respondent Id No" required></td/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Full Name</label></td>
							<td width="15"></td>
							<td><input type="text" name="rfullname" id="span9001" placeholder="Full Name" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age:</label></td>
							<td width="15"></td>
							<td><input type="number" name="rage" min='18'placeholder="age" required pattern="([0-9])+(?:-?\d){1,}"></td/></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Sex</label></td>
							<td width="15"></td>
							<td><select name="rsex" style="background-color:#Green;" width="25">
								
								<option>Male</option>
								<option>Female</option>
								</select></td>
						
								<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date of Birth</label></td>
							<td width="30"></td>
							<td><input type="date" name="rdateofbirth" placeholder="dateofbirth" required /></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place Of Birth</label></td>
							<td width="15"></td>
							<td><input type="text" name="rplaceofbirth" id="span9001" placeholder="Place of Birth" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td width="15"></td>
							<td><select name="rnationality" style="background-color:#Green;" width="15" required>
								
								 <option>Ethiopia  </option>
								<option>America</option>
								<option>Sudan </option>
								<option>Kenya</option>
								<option>other </option>
								</select></td>
							
						</tr>
<tr>
							<td><label style="color:#3a87ad; font-size:18px;">No of Children</label></td>
							<td width="30"></td>
							<td><input type="text" name="noofchild" id="span9001" placeholder="No of children" required pattern="([1-9])+(?:-?\d){0,}"/></td>
						</tr>			
<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Children under 18</label></td>
							<td width="30"></td>
							<td><input type="text" name="under18" id="span9001" placeholder="Children under 18" required pattern="([1-9])+(?:-?\d){0,}" /></td>
						</tr>	
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date of Separation</label></td>
							<td width="30"></td>
							<td><input type="date" name="dateofsep" placeholder="Date of Separation" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place of Separation</label></td>
							<td width="30"></td>
							<td><input type="text" name="placeofsep" id="span9001" placeholder="Place of Separation" required pattern="[A-Z a-z]{3,}"/></td>
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
							<td><input type="text" name="approvedby" id="span9001" placeholder="Approved By " required pattern="[A-Z a-z]{3,}"/></td>
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