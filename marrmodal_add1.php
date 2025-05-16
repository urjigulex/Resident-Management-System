	    <!-- Button to trigger modal -->
		 <a href="#myModal" class="btn btn-primary"data-toggle="modal"> <font color="white" size="3"> Click Here To Add</font></a>
	
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="marradd1.php"  enctype="multipart/form-data">
					<table class="table1" width="500">
					<tr>
					<td colspan=2><label style ="font-size:18px;"><center>Husband Information</center></label></td>
					</tr>
					<tr>
					<td colspan=2><hr></td>
					</tr>
	<tr>
							<td><label style="color:#3a87ad; font-size:18px;">HU ID-NO</label></td>
							
							<td><input type="text" name="hid_no" id="span9001" placeholder="hu id_no" required /></td>
						</tr>

						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">First Name</label></td>
							
							<td><input type="text" name="hfirstname" id="span9001" placeholder="First Name" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Middle Name</label></td>
							
							<td><input type="text" name="hmiddlename" id="span9001" placeholder="Middle Name" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Last Name</label></td>
							
							<td><input type="text" name="hlastname" id="span9001" placeholder="Last Name" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age:</label></td>
							
							<td><input type="number" min='18' name="hage" id="span9001" placeholder="hage" required pattern="([0-9])+(?:-?\d){0,}"></td
						</tr>

<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date of Birth:</label></td>
							
							<td><input type="date" name="hdateofbirth" placeholder=" Date Of Marriage" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place Of Birth</label></td>
							
							<td><input type="text" name="hplaceofbirth" id="span9001" placeholder="Place of Birth" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td><select name="hnation" style="background-color:#Green;" width="25">
								<option>Ethiopian  </option>
								<option>America</option>
								<option>Sudan </option>
								<option>Kenya</option>
								<option>Brazil </option>
								</select></td>
							
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Civil Status</label></td>
							
							<td><select name="hstatus" style="background-color:#Green;" width="25" required>
							
								  <option>Single</option>
								  <option>Separated</option>
								  <option>Widow</option>
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Religion</label></td>
							
							<td><input type="text" name="hreligion" id="span9001" placeholder="hreligion" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Father Nationality</label></td>
							<td><select name="hfathernation" style="background-color:#Green;" width="25">
								<option>Ethiopian  </option>
								<option>America</option>
								<option>Sudan </option>
								<option>Kenya</option>
								<option>Brazil </option>
								</select></td>							
						</tr>
<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Mother Name</label></td>
							
							<td><input type="text" name="hmothername" id="span9001" placeholder="Mother Name" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td><select name="hmothernation" style="background-color:#Green;" width="25">
								<option>Ethiopian  </option>
								<option>America</option>
								<option>Sudan </option>
								<option>Kenya</option>
								<option>Brazil </option>
								</select></td>							
						</tr>

							<tr>
							<td><label style="color:#3a87ad; font-size:18px;">HImage</label></td>
							
							<td><input type="file" name="image" required /></td>
						</tr>
					
					<tr>
			
					<td colspan=2 style="height:10px"><label style ="font-size:18px;"><center>Wife Information</center></label></td>
					</tr>
					<tr>
					<td colspan=2><hr></td>
					</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;"> Wi ID-NO</label></td>
							
							<td><input type="text" name="wid_no" id="span9001" placeholder="wu id_no" required /></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">First Name</label></td>
							
							<td><input type="text" name="wfirstname" id="span9001" placeholder="First Name" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Middle Name</label></td>
							
							<td><input type="text" name="wmiddlename" id="span9001" placeholder="Middle Name" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Last Name</label></td>
							
							<td><input type="text" name="wlastname" id="span9001" placeholder="Last Name" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age:</label></td>
							
							<td><input type="number" min='18' name="wage" id="span9001" placeholder="wage" required pattern="([0-9])+(?:-?\d){1,}"></td
						</tr>

					<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date of Birth:</label></td>
							
							<td><input type="date" name="wdateofbirth"placeholder=" Date Of Birth" required /></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place Of Birth</label></td>
							
							<td><input type="text" name="wplaceofbirth" id="span9001" placeholder="Place of Birth" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td><select name="wnation" style="background-color:#Green;" width="25">
								<option>Ethiopian  </option>
								<option>America</option>
								<option>Sudan </option>
								<option>Kenya</option>
								<option>other </option>
								</select></td>							
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Civil Status</label></td>
							
							<td><select name="wstatus" style="background-color:#Green;" width="25" required>
								
								  <option>Single</option>
								  <option>Separated</option>
								  <option>Widow</option>
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Religion</label></td>
							
							<td><input type="text" name="wreligion" id="span9001" placeholder="wreligion" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Fther Nationality</label></td>
							<td><select name="wfathernation" style="background-color:#Green;" width="25">
								<option>Ethiopian  </option>
								<option>America</option>
								<option>Sudan </option>
								<option>Kenya</option>
								<option>other </option>
								</select></td>							
						</tr>

<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Mother Name</label></td>
							
							<td><input type="text" name="wmothername" id="span9001" placeholder="Mother Name" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td><select name="wmothernation" style="background-color:#Green;" width="25">
								<option>Ethiopian  </option>
								<option>America</option>
								<option>Sudan </option>
								<option>Kenya</option>
								<option>Brazil </option>
								</select></td>
						</tr>
<tr>
							<td><label style="color:#3a87ad; font-size:18px;">WImage</label></td>
							
							<td><input type="file" name="image1" required /></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date of Marriage:</label></td>
							
							<td><input type="date" name="datemarriage" placeholder=" Date Of Marriage" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place of Marriage</label></td>
							
							<td><input type="text" name="placemarriage" id="span9001" placeholder="Place Of Marriage" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Time of Marriage</label></td>
							
							<td><input type="time" name="timemarriage" placeholder="Time of Marriage" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Approved By</label></td>
							
							<td><input type="text" name="approvedby" id="span9001" placeholder="Approved By" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date Approved</label></td>
							
							<td><input type="date" name="dateapprove" placeholder="Date Approved" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">witness 1</label></td>
							
							<td><input type="text" name="wittness1" id="span9001" placeholder="witness1 name" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
							<td><label style="color:#3a87ad; font-size:18px;">witness 2</label></td>
							
							<td><input type="text" name="wittness2" id="span9001" placeholder="witness2 name" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
							<td><label style="color:#3a87ad; font-size:18px;">witness 3</label></td>
							
							<td><input type="text" name="wittness3" placeholder="witness3 name" id="span9001" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>	

