	    <!-- Button to trigger modal -->
		
    <a href="#myModal" class="btn btn-primary"data-toggle="modal">Click Here To Add</a>
	<a class="btn btn-primary pull-right" href="index1.php">Back to Home</a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="birthadd1.php"  enctype="multipart/form-data">
					<table class="table1">
					<tr>
					<td colspan=3> <h4><u>Child Information</u></h4></td>
					</tr>
					<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Registration No:</label></td>
							<td width="30"></td>
							<td><input type="text" name="reg_no" placeholder=" Registration No" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Child Full Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="childfullname" placeholder="Child Full Name" required /></td>
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
							<td><label style="color:#3a87ad; font-size:18px;">Date of Birth</label></td>
							<td width="30"></td>
							<td><input type="date" name="dateofbirth" placeholder="Date of Birth" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Place of Birth</label></td>
							<td width="30"></td>
							<td><input type="text" name="placeofbirth" placeholder="Place of Birth" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Type of Birth</label></td>
							<td width="30"></td>
							<td><select name="typeofbirth" style="background-color:#Green;" width="25" >
								<option>Type of Birth</option>
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
							<td><input type="text" name="motherfullname" placeholder="Full Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age</label></td>
							<td width="30"></td>
							<td><input type="text" name="mage" placeholder="Age" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td width="30"></td>
							<td><input type="text" name="mnation" placeholder="Nationality" required /></td>
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
							<td><input type="text" name="moccupation" placeholder="Occupation"  /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Address</label></td>
							<td width="30"></td>
							<td><input type="text" name="maddress" placeholder="Address"  /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Telephone</label></td>
							<td width="30"></td>
							<td><input type="text" name="mtel" placeholder="Telephone"  /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Mobile</label></td>
							<td width="30"></td>
							<td><input type="text" name="mmob" placeholder="Mobile"  /></td>
						</tr>
						<tr>
						<td colspan=3> <h4><u>Father Information</u></h4></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Full Name </label></td>
							<td width="30"></td>
							<td><input type="text" name="fatherfullname" placeholder="Full Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age</label></td>
							<td width="30"></td>
							<td><input type="text" name="fage" placeholder="Age" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Nationality</label></td>
							<td width="30"></td>
							<td><input type="text" name="fnation" placeholder="Nationality" required /></td>
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
							<td><input type="text" name="foccupation" placeholder="Occupation"  /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Address</label></td>
							<td width="30"></td>
							<td><input type="text" name="faddress" placeholder="Address"  /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Telephone</label></td>
							<td width="30"></td>
							<td><input type="text" name="ftel" placeholder="Telephone"  /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Mobile</label></td>
							<td width="30"></td>
							<td><input type="text" name="fmob" placeholder="Mobile"  /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date of Registration</label></td>
							<td width="30"></td>
							<td><input type="date" name="datereg" placeholder="Date of Reg"  /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Approved By</label></td>
							<td width="30"></td>
							<td><input type="text" name="approvedby" placeholder="Approved By"  /></td>
						</tr>
							<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Image</label></td>
							<td width="30"></td>
							<td><input type="file" name="image" /></td>
						</tr>
		
											
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			