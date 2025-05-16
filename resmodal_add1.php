	    <!-- Button to trigger modal -->
		<h2>Only for clearance</h2>
		 <a href="#myModal" class="btn btn-primary"data-toggle="modal">Click Here To Add</a>
	
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="resadd1.php"  enctype="multipart/form-data">
					<table class="table1">
					<tr>
							<td><label style="color:#3a87ad; font-size:18px;">First Name:</label></td>
							<td width="30"></td>
							<td><input type="text" name="fname" id="span9001" placeholder="First Name" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Middle Name:</label></td>
							<td width="30"></td>
							<td><input type="text" name="mname" id="span9001" placeholder="Middle Namel" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Last Name:</label></td>
							<td width="30"></td>
							<td><input type="text" name="lname" id="span9001" placeholder="Last Name" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
	<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age:</label></td>
							<td width="30"></td>
							<td><input type="number" min='0' name="age" id="span9001" placeholder="age" required pattern="[0-9]{2,}"/></td>
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
							<td><input type="text" name="placeofbirth" id="span9001" placeholder="Place of Birth" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">region</label></td>
							<td width="30"></td>
							<td><select name="region" style="background-color:#Green;" width="25">
								<option>Tigray</option>
								<option>Oromia</option>
								<option>Afar</option>
								<option>Oromaya</option>
								<option>Somalie</option>
								<option>SNNP</option>
								<option>Benshangul</option>
								<option>Gambela</option>
								<option>Harer</option>
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Zone</label></td>
							<td width="30"></td>
							<td><input type="text" name="zone" placeholder="Zone" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Woreda</label></td>
							<td width="30"></td>
							<td><input type="text" name="woreda" id="span9001" placeholder="Woreda" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
								<tr>
							<td><label style="color:#3a87ad; font-size:18px;">nationality</label></td>
							<td width="15"></td>
							<td><select name="nationality" style="background-color:#Green;" width="15" required>
								
								 <option>Ethiopian  </option>
								<option>America</option>
								<option>Sudan </option>
								<option>Kenya</option>
								<option>other </option>
								</select></td>
							
						</tr>
						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">HouseNo</label></td>
							<td width="30"></td>
							<td><input type="text" name="houseno" id="span9001" placeholder="HouseNo" required pattern="['a-z A-Z 0-9']{2,}" /></td>
						</tr>
		
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Occupation</label></td>
							<td width="30"></td>
							<td><input type="text" name="occupation" id="span9001" placeholder="Occupation " required pattern="[A-Z a-z]{3,}"</td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Phone</label></td>
							<td width="30"></td>
							<td><input type="text" name="phone" id="span9001" placeholder="Phone" required pattern="[0&9]{2}[0-9]{8}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Image</label></td>
							<td width="30"></td>
							<td><input type="file" name="image" required /></td>
						</tr>
						<tr>
						<td><label style="color:#3a87ad; font-size:18px;">reason to reg</label></td>
                         	<td width="30"></td>
						<td><select name="reason" style="background-color:#Green;" width="15">
								<option>By Birth</option>
								<option>By Clerance</option>
								</select></td>
								</tr>
								
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date Of Registration:</label></td>
							<td width="30"></td>
							<td><input type="date" name="dateofreg" placeholder="Date of reg" required /></td>
						</tr>
<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Approved by:</label></td>
							<td width="30"></td>
							<td><input type="text" name="approve" placeholder="approved by" required /></td>
						</tr>


						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			
	