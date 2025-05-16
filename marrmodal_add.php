	    <!-- Button to trigger modal -->
		
    <a class="btn btn-primary" href="#myModal,#myModal" data-toggle="modal">Click here to Add </a>
	
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="marradd.php"  enctype="multipart/form-data">
					<table class="table1" width="1000">
					<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Registration No:</label></td>
							<td width="30"></td>
							<td><input type="text" name="reg_no" placeholder=" Registration No" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Husband ID No:</label></td>
							<td width="30"></td>
							<td><input type="text" name="hid_no" placeholder=" ID No" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">First Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="hfirstname" placeholder="First Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Middle Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="hmiddlename" placeholder="Middle Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Last Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="hlastname" placeholder="Last Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age</label></td>
							<td width="30"></td>
							<td><input type="text" name="hage" placeholder="Age" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date Of Birth</label></td>
							<td width="30"></td>
							<td><input type="date" name="hdateofbirth" placeholder="Date of Birth" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place Of Birth</label></td>
							<td width="30"></td>
							<td><input type="text" name="hplaceofbirth" placeholder="Place of Birth" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td width="30"></td>
							<td><input type="text" name="hnation" placeholder="Nationality" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Civil Status</label></td>
							<td width="30"></td>
							<td><select name="hstatus" style="background-color:#Green;" width="25" required>
								<option></option>
								  <option>Single</option>
								  <option>Separated</option>
								  <option>Widow</option>
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Mother Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="hmothername" placeholder="Mother Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td width="30"></td>
							<td><input type="text" name="hmothernation" placeholder="Mother nationality" required /></td>
						</tr>
							<tr>
							<td><label style="color:#3a87ad; font-size:18px;">HImage</label></td>
							<td width="30"></td>
							<td><input type="file" name="image" required /></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;"> Wife ID No:</label></td>
							<td width="30"></td>
							<td><input type="text" name="wid_no" placeholder=" ID No" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">First Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="wfirstname" placeholder="First Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Middle Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="wmiddlename" placeholder="Middle Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Last Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="wlastname" placeholder="Last Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age</label></td>
							<td width="30"></td>
							<td><input type="text" name="wage" placeholder="Age" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date Of Birth</label></td>
							<td width="30"></td>
							<td><input type="date" name="wdateofbirth" placeholder="Date of Birth" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place Of Birth</label></td>
							<td width="30"></td>
							<td><input type="text" name="wplaceofbirth" placeholder="Place of Birth" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td width="30"></td>
							<td><input type="text" name="wnation" placeholder="Nationality" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Civil Status</label></td>
							<td width="30"></td>
							<td><select name="wstatus" style="background-color:#Green;" width="25" required>
								<option></option>
								  <option>Single</option>
								  <option>Separated</option>
								  <option>Widow</option>
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Mother Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="wmothername" placeholder="Mother Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td width="30"></td>
							<td><input type="text" name="wmothernation" placeholder="Mother nationality" required /></td>
						</tr>
<tr>
							<td><label style="color:#3a87ad; font-size:18px;">WImage</label></td>
							<td width="30"></td>
							<td><input type="file" name="image1" required /></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date of Marriage:</label></td>
							<td width="30"></td>
							<td><input type="date" name="datemarriage" placeholder=" Date Of Marriage" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place of Marriage</label></td>
							<td width="30"></td>
							<td><input type="text" name="placemarriage" placeholder="Place Of Marriage" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Time of Marriage</label></td>
							<td width="30"></td>
							<td><input type="time" name="timemarriage" placeholder="Time of Marriage" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Approved By</label></td>
							<td width="30"></td>
							<td><input type="text" name="approvedby" placeholder="Approved By" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date Approved</label></td>
							<td width="30"></td>
							<td><input type="date" name="dateapprove" placeholder="Date Approved" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">witness 1</label></td>
							<td width="30"></td>
							<td><input type="text" name="wittness1" placeholder="witness1 name" required /></td>
						</tr>
							<td><label style="color:#3a87ad; font-size:18px;">witness 2</label></td>
							<td width="30"></td>
							<td><input type="text" name="wittness2" placeholder="witness2 name" required /></td>
						</tr>
							<td><label style="color:#3a87ad; font-size:18px;">witness 3</label></td>
							<td width="30"></td>
							<td><input type="text" name="wittness3" placeholder="witness3 name" required /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>	