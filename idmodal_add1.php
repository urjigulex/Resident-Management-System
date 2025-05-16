	    <!-- Button to trigger modal -->
		 <a href="#myModal" class="btn btn-primary"data-toggle="modal"><font color="white">Click Here To Add</font></a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="idadd1.php"  enctype="multipart/form-data">
					<table class="table1">
					
													<td><label style="color:#3a87ad; font-size:18px;">Please Enter id num:</label></td>
							<td width="30"></td>
							<td><input type="text" name="id_no" id="span9001" placeholder="id num" required /></td>
						</tr>
				<tr>
							<td><label style="color:#3a87ad; font-size:18px;">First Name:</label></td>
							<td width="30"></td>
							<td><input type="text" name="fname" id="span9001" placeholder="FirstName" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Middle Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="mname" id="span9001" placeholder="MiddleNamele" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Last Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="lname" id="span9001" placeholder="LastName" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
	<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age:</label></td>
							<td width="30"></td>
							<td><input type="number" min='18' name="age" id="span9001" placeholder="age" required pattern="[0-9]{2,}" title='ageeee'/></td>
						</tr>
	<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Phone:</label></td>
							<td width="30"></td>
							<td><input type="text" name="phone" id="span9001" placeholder="phone" required pattern="[0-9]{10}"/></td>
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
							<td><input type="text" name="placeofbirth" id="span9001"placeholder="Place of Birth" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td width="30"></td>
							<td><select name="Nationality" style="background-color:#Green;" width="25">
								<option>Ethiopian</option>
									</select></td>
						</tr>
						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">region</label></td>
							<td width="30"></td>
							<td><select name="region" style="background-color:#Green;" width="25">
								
								<option>Tigray</option>
								<option>Afar</option>
								<option>Oromia</option>
								<option>Oromaya</option>
								<option>Somalia</option>
								<option>Benshangul Gumz</option>
								<option>SNNP</option>
								<option>Gambela</option>
								<option>Harer</option>
							
								</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Zone</label></td>
							<td width="30"></td>
							<td><input type="text" name="zone" id="span9001" placeholder="Zone" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Woreda</label></td>
							<td width="30"></td>
							<td><input type="text" name="Woreda" id="span9001" placeholder="Woreda" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">HouseNo</label></td>
							<td width="30"></td>
							<td><input type="number" name="houseno" id="span9001" placeholder="HouseNo" required pattern="['a-z A-Z 0-9']{2,}" /></td>
						</tr>
			<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Occupation</label></td>
							<td width="30"></td>
							<td><input type="text" name="occupation" id="span9001" placeholder="occuopation" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date Given</label></td>
							<td width="30"></td>
							<td><input type="date" name="dategiven" placeholder="Date Given" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Kebele</label></td>
							<td width="30"></td>
							<td><input type="text" name="Kebele" id="span9001" placeholder="Kebele" required pattern="['A-Z a-z']{2,}"/></td>
						</tr>

						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Approved By</label></td>
							<td width="30"></td>
							<td><input type="text" name="approvedby" id="span9001" placeholder="Approved BY" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Image</label></td>
							<td width="30"></td>
							<td><input type="file" id="span9001" name="image" required /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			