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
	
					<form method="post" action="idadd.php"  enctype="multipart/form-data">
					<table class="table1">
					<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Id_No:</label></td>
							<td width="30"></td>
							<td><input type="text" name="id_no" placeholder="id_no" equired /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">First Name:</label></td>
							<td width="30"></td>
							<td><input type="text" name="fname" placeholder="FirstName" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Middle Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="mname" placeholder="MiddleNamele" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Last Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="lname" placeholder="LastName" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age</label></td>
							<td width="30"></td>
							<td><input type="text" name="age" placeholder="Age" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Sex</label></td>
							<td width="30"></td>
							<td><select name="sex" style="background-color:#Green;" width="25">
								<option>Sex</option>
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
							<td><input type="text" name="placeofbirth" placeholder="Place of Birth" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td width="30"></td>
							<td><input type="text" name="nationality" placeholder="Nationality" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Region</label></td>
							<td width="30"></td>
							<td><input type="text" name="region" placeholder="Region" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Zone</label></td>
							<td width="30"></td>
							<td><input type="text" name="zone" placeholder="Zone" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Woreda</label></td>
							<td width="30"></td>
							<td><input type="text" name="woreda" placeholder="Woreda" required /></td>
						</tr>
						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">HouseNo</label></td>
							<td width="30"></td>
							<td><input type="text" name="houseno" placeholder="HouseNo" required /></td>
						</tr>
		
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date Given</label></td>
							<td width="30"></td>
							<td><input type="date" name="dategiven" placeholder="Date Given" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Approvedby</label></td>
							<td width="30"></td>
							<td><input type="text" name="approvedby" placeholder="Approved BY" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Image</label></td>
							<td width="30"></td>
							<td><input type="file" name="image" required /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			