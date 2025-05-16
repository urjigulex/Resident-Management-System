	    <!-- Button to trigger modal -->
		
<style type="text/css">

div#container
{
   width: 600px;
   position: relative;
   margin-top: 0px;
   margin-left: auto;
   margin-right: auto;
   text-align: left;
}
body
{
   background-color: light;
   background-image:url(images/bg-body.jpg);
   color: light;
   font-family: Arial;
   font-size: 13px;
   margin: 0;
   text-align: center;
}
</style>
    <a class="btn btn-primary" href="#myModal" data-toggle="modal"><font color="white" size="4">Click Here To Register</font></a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="resadd.php"  enctype="multipart/form-data">
					<table class="table1">
					
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">First Name:</label></td>
							<td width="30"></td>
							<td><input type="text" name="fname" id="span9001" placeholder="First Name" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Middle Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="mname" id="span9001" placeholder="Middle Namel" required pattern="[A-Z a-z]{3,}" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Last Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="lname" id="span9001" placeholder="Last Name" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
	<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Age:</label></td>
							<td width="30"></td>
							<td><input type="number" name="age" id="span9001" placeholder="age" min='0'required pattern="[0-9]{1,}"/></td>
						</tr>

						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Sex</label></td>
							<td width="30"></td>
							<td><select name="sex" style="background-color:#Green;" width="25">
								<option>Male</option>
								<option>Female</option>
								</select></td>
						</tr> <tr>
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
							<td><label style="color:#3a87ad; font-size:18px;">region</label></td>
							<td width="30"></td>
							<td><select name="region" style="background-color:#Green;" width="25">
								<option>Tigray</option>
								<option>Oromia</option>
								<option>Afar</option>
								<option>Oromia</option>
								<option>Somalie</option>
								<option>SNNP</option>
								<option>Benshangul</option>
								<option>Gambela</option>
								<option>Harer</option>
								</select></td>
						</tr>
	<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Religion</label></td>
							<td width="30"></td>
							<td><select name="religion" style="background-color:#Green;" width="25">
								<option>Orthodox </option>
								<option>Protstant</option>
								<option>Islam</option>
								<option>Catholic</option>
						<option>Other</option>
													</select></td>
						</tr>
	<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Martial Status:</label></td>
							<td width="30"></td>
							<td><select name="martial" style="background-color:#Green;" width="25">
	  <option>UnMarried</option>
								  <option>Married</option>
								  <option>Divorced</option>													</select></td>
						</tr>
	<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Mother Tongue:</label></td>
							<td width="30"></td>
							<td><input type="text" name="language" pattern="[A-Za-z]{3,}" required placeholder="language"></td>
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
							<td><label style="color:#3a87ad; font-size:18px;">Kebele:</label></td>
							<td width="30"></td>
							<td><input type="text" name="kebele" id="span9001" placeholder="kebele" required pattern="[A-Z a-z]{3,}"/></td>
						</tr>
<tr>
							<td><label style="color:#3a87ad; font-size:18px;">House type:</label></td>
							<td width="30"></td>
							<td><select name="type" style="background-color:#Green;" width="25">
								<option>Private</option>
								<option>Kebele</option>	<option>Tenants</option>
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
							<td><label style="color:#3a87ad; font-size:18px;">Date Of Regi</label></td>
							<td width="30"></td>
							<td><input type="date" name="dateofreg" placeholder="Date of regis" required /></td>
						</tr>
						<tr>


						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Image</label></td>
							<td width="30"></td>
							<td><input type="file" name="image"  /></td>
						</tr>
					<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Resion to Reg:</label></td>
							<td width="30"></td>
							<td><input type="text" name="reason" placeholder="reason" required /></td>
						</tr>

<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Approved By:</label></td>
							<td width="30"></td>
							<td><input type="text" name="approve" placeholder="approved by Full name" required /></td>
						</tr>
								
						
						</div>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Register</button>
    </div>
	

					</form>
    </div>			