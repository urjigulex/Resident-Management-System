	    <!-- Button to trigger modal -->
		
    <a class="btn btn-primary" href="#myModal" data-toggle="modal"><font color="white" size="3"> Click Here To Add</font></a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
					<form method="post" action="birthadd.php"  enctype="multipart/form-data">
					<table class="table1">
					<tr>
					<td colspan=3> <h4><u>Child Information</u></h4></td>
					</tr>
					
					<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Child Full Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="childfullname" id="span9001" placeholder="Child Full Name" required pattern="[A-Z a-z]{6,}"/></td>
						</tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age:</label></td>
							<td width="30"></td>
							<td><input type="text" name="chage" id="span9001" placeholder="Child Age" required pattern="[0-9]{1,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Sex:</label></td>
							<td width="30"></td>
							<td><select name="sex" style="background-color:#Green;" width="25">
								
								<option>Male</option>
								<option>Female</option>
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date of Birth</label></td>
							<td width="30"></td>
							<td><input type="date" name="dateofbirth" placeholder="Date of Birth" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place of Birth</label></td>
							<td width="30"></td>
							<td><input type="text" name="placeofbirth" id="span9001" placeholder="Place of Birth" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td> <label style="color:#3a87ad; font-size:18px;">Type of Birth</label></td>
							<td width="30"></td>
							<td><select name="typeofbirth" style="background-color:#Green;" width="25" >
								
									<option>Single </option>
									<option>Twin </option>
									<option>Triplets </option>
									</select></td>
						</tr>
						<tr>
						<td colspan=3> <h4><u>Mother Information</u></h4></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Full Name </label></td>
							<td width="30"></td>
							<td><input type="text" name="motherfullname" id="span9001" placeholder="Full Name" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age</label></td>
							<td width="30"></td>
							<td><input type="text" name="mage" id="span9001" placeholder="Age" required pattern="([1-9])+(?:-?\d){0,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">mnation</label></td>
							<td width="30"></td>
							<td><select name="mnation" style="background-color:#Green;" width="25">
								<option>Ethiopian  </option>
								<option>America</option>
								<option>Sudan </option>
								<option>Kenya</option>
								<option>other </option>
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Religion</label></td>
							<td width="30"></td>
							<td><select name="mreligion" style="background-color:#Green;" width="25">
								<option>Religion</option>
								<option>Orthodox  </option>
								<option>Islam</option>
								<option>Protestant </option>
								<option>Catholic</option>
								<option>other </option>
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Occupation</label></td>
							<td width="30"></td>
							<td><input type="text" name="moccupation" id="span9001" placeholder="Occupation" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Address</label></td>
							<td width="30"></td>
							<td><input type="text" name="maddress" id="span9001" placeholder="Address" pattern="[A-Z a-z]{3,}" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Telephone</label></td>
							<td width="30"></td>
							<td><input type="text" name="mtel" id="span9001" placeholder="Telephone"  required pattern="[0&9]{2}[0-9]{8}"/></td>
						</tr>
						<tr>
						<td colspan=3> <h4><u>Father Information</u></h4></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Full Name </label></td>
							<td width="30"></td>
							<td><input type="text" name="fatherfullname" id="span9001" placeholder="Full Name" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age</label></td>
							<td width="30"></td>
							<td><input type="text" name="fage" id="span9001" placeholder="Age" required pattern="([1-9])+(?:-?\d){0,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Natvionality</label></td>
							<td width="30"></td>
							<td><select name="fnation" style="background-color:#Green;" width="25">
								<option>Ethiopian</option>
								<option>American</option>
								<option>Sudan </option>
								<option>Kenya</option>
								<option>other </option>
								</select></td>
							
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Religion</label></td>
							<td width="30"></td>
							<td><select name="freligion" style="background-color:#Green;" width="25">
								<option>Religion</option>
								<option>Orthodox  </option>
								<option>Islam</option>
								<option>Protestant </option>
								<option>Catholic</option>
								<option>other </option>
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Occupation</label></td>
							<td width="30"></td>
							<td><input type="text" name="foccupation" id="span9001" placeholder="Occupation" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Address</label></td>
							<td width="30"></td>
							<td><input type="text" name="faddress" id="span9001" placeholder="Address" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Telephone</label></td>
							<td width="30"></td>
							<td><input type="text" name="ftel" id="span9001" placeholder="Telephone" required pattern="[0&9]{2}[0-9]{8}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date of Registration</label></td>
							<td width="30"></td>
							<td><input type="date" name="datereg" placeholder="Date of Reg" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Approved By</label></td>
							<td width="30"></td>
							<td><input type="text" name="approvedby" id="span9001" placeholder="Approved By" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
									
											
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			