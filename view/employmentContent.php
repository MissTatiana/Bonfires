<div id="content">
		
	<h2>Application for Employment</h2>
	
	<form action="apply">
		
		<div id="general">
			
			<h3>General Information</h3>
			
			<label for="applyFor">*Applying For:</label>
			<select name="applyFor" id="applyFor">
				<option vlaue="cook">Cook</option>
				<option value="waitress">Waitress</option>
				<option value="bussing">Bussing</option>
				<option value="bar">Bar Tender</option>
				<!-- need to ask what are the actual positions -->
			</select>
			
			<label for="genStart">*Start Date:</label>
			<!-- need a date selects with jq -->
			<input type="date" name="genStart" id="genStart" />
			<br />
			<label for="availability">*Availability</label><br />
			<textarea name="availability" id="availability"></textarea>
			
		</div><!-- general -->
		
		<div id="personal">
			
			<h3>Personal Information</h3>
			
			<div id="wholeName">
				<div id="fName">
					<label for="firstName">*First Name:</label>
					<input type="text" name="firstName" id="firstName"  required="required"/>
				</div><!-- fName -->
				
				<div id="mName">
					<label for="mi">*M.I:</label>
					<input type="text" name="mi" id="mi"  required="required"/>
				</div><!-- mName -->
				
				<div id="lName">
					<label for="lastName">*Last Name:</label>
					<input type="text" name="lastName" id="lastName"  required="required"/>
				</div><!-- lName -->
			</div><!-- wholename -->
			
			<div id="streetAdd">
				<label for="street">*Address:</label>
				<input type="text" name="street" id="street"  required="required"/>
				
				<label for="city">*City:</label>
				<input type="text" name="city" id="city"  required="required"/>
				
				<label for="state">*State:</label>
				<input type="text" name="state" id="state"  required="required"/>
				
				<label for="zip">*Zip Code:</label>
				<input type="number" name="zip" id="zip"  required="required"/>
			</div><!-- streetAdd -->
			
			<div id="contactInfo">
				<label for="phone">*Phone Number:</label>
				<input type="number" name="phone" id="phone" required="required" />
				
				<label for="appEmail">*Email Address:</label>
				<input type="text" name="appEmail" id="appEmail"  required="required"/>
			</div><!-- contactInfo -->
			
		</div><!-- personal -->
		
		<div id="experience">
			
			<h3>Work Experience</h3>
			
			<div id="current">
				<label for="currently">Currently Employed?</label>
				<input type="checkbox" name="currently" value="yes">yes<br />
				<input type="checkbox" name="currently" value="no">no<br />
				
				<div class="position">
					<label for="currentEmp">Current Employer:</label>
					<input type="text" name="currentEmp" id="currentEmp" />
					
					<label for="currentPos">Position:</label>
					<input type="text" name="currentPos" id="currentPos" />
				</div><!-- position -->
				
				<div class="since">
					<label for="empSince">Employed Since:</label>
					<input type="text" name="empSince" id="empSince" />
					<!-- need a date picket -->
					
					<label for="supervisor">Supervisor:</label>
					<input type="text" name="supervisor" id="supervisor" />
				</div><!-- since -->
				
				<div class="currentAdd">
					<label for="currentCity">City:</label>
					<input type="text" name="currentCity" id="currentCity" />
					
					<label for="currentSt">Sate:</label>
					<input type="text" name="currentSt" id="currentSt" />
					
					<label for="currentPhone">Phone Number:</label>
					<input type="number" name="currentPhone" id="currentPhone" />
				</div><!-- currentAdd -->
				
				<label for="currentRate">Rate of Pay:</label>
				<input type="text" name="currentRate" id="currentRate" />
			</div><!-- current -->
			
			<div id="previous">
				<div class="position">
					<label for="previousEmp">Current Employer:</label>
					<input type="text" name="previousEmp" id="previousEmp" />
					
					<label for="previousPos">Position:</label>
					<input type="text" name="previousPos" id="previousPos" />
				</div><!-- position -->
				
				<div class="since">
					<label for="empFrom">Employed From:</label>
					<input type="text" name="empFrom" id="empFrom" />
					<!-- need a date picker -->
					
					<label for="empPrev">Employed Till:</label>
					<input type="text" name="empPrev" id="empPrev" />
					<!-- need a date picket -->
					
					<label for="supervisorPrev">Supervisor:</label>
					<input type="text" name="supervisorPrev" id="supervisorPrev" />
				</div><!-- since -->
				
				<div class="previousAdd">
					<label for="currentCity">City:</label>
					<input type="text" name="previousAdd" id="previousAdd" />
					
					<label for="previousSt">Sate:</label>
					<input type="text" name="previousSt" id="previousSt" />
					
					<label for="previousPhone">Phone Number:</label>
					<input type="number" name="previousPhone" id="previousPhone" />
				</div><!-- currentAdd -->
				
				<div id="rateLeave">
					<label for="prevousRate">Rate of Pay:</label>
					<input type="text" name="prevousRate" id="prevousRate" />
					
					<label for="leaving">Reasoning for Leaving:</label>
					<input type="text" name="leaving" id="leaving" />
				</div><!-- rateLeave -->
			</div><!-- previous -->
			
			<div id="previousTwo">
				<div class="position">
					<label for="previousTwoEmp">Current Employer:</label>
					<input type="text" name="previousTwoEmp" id="previousTwoEmp" />
					
					<label for="previousTwoPos">Position:</label>
					<input type="text" name="previousTwoPos" id="previousTwoPos" />
				</div><!-- position -->
				
				<div class="since">
					<label for="empFromTwo">Employed From:</label>
					<input type="text" name="empFromTwo" id="empFromTwo" />
					<!-- need a date picker -->
					
					<label for="empPrevTwo">Employed Till:</label>
					<input type="text" name="empPrevTwo" id="empPrevTwo" />
					<!-- need a date picket -->
					
					<label for="supervisorPrevTwo">Supervisor:</label>
					<input type="text" name="supervisorPrevTwo" id="supervisorPrevTwo" />
				</div><!-- since -->
				
				<div class="previousTwoAdd">
					<label for="currentCity">City:</label>
					<input type="text" name="previousTwoAdd" id="previousTwoAdd" />
					
					<label for="previousTwoSt">Sate:</label>
					<input type="text" name="previousTwoSt" id="previousTwoSt" />
					
					<label for="previousTwoPhone">Phone Number:</label>
					<input type="number" name="previousTwoPhone" id="previousTwoPhone" />
				</div><!-- currentAdd -->
				
				<div id="rateLeave">
					<label for="prevousTwoRate">Rate of Pay:</label>
					<input type="text" name="prevousTwoRate" id="prevousTwoRate" />
					
					<label for="leavingTwo">Reasoning for Leaving:</label>
					<input type="text" name="leavingTwo" id="leavingTwo" />
				</div><!-- rateLeave -->
			</div><!-- previous -->
		</div><!-- experience -->
			
		<div id="military">
			
			<h3>U.S. Military Service</h3>
			
			<label for="served">Have you ever served in the military</label>
			<input type="checkbox" name="served" value="yes">yes<br />
			<input type="checkbox" name="served" value="no">no<br />
			
			<div id="detail">
				<label for="branch">Branch of Service:</label>
				<input type="text" name="branch" id="branch" />
				
				<label for="special">Technical Specialization:</label>
				<input type="text" name="special" id="special" />
				
				<label for="rank">Rank Attained:</label>
				<input type="text" name="rank" id="rank" />
			</div><!-- detai -->l
			
		</div><!-- military -->
			
		<div id="legal">
			
			<label for="citizen">Are you a U.S. citizen and have the necessary documents to work in the U.S.</label>
			<input type="checkbox" name="citizen" value="yes">yes<br />
			<input type="checkbox" name="citizen" value="no">no<br />
			
			<label for="discharge">Have you ever been discharged by a company</label>
			<input type="checkbox" name="discharge" value="yes">yes<br />
			<input type="checkbox" name="discharge" value="no">no<br />
			
			<label for="reason">If yes, please give reason for discharge:</label>
			<input type="text" name="reason" id="reason" />
			
			<label for="convicted">Have you ever been convicted of a crime</label>
			<input type="checkbox" name="convicted" value="yes">yes<br />
			<input type="checkbox" name="convicted" value="no">no<br />
			
			<label for="crime">If yes, please explain:</label>
			<input type="text" name="crime" id="crime" />
			
		</div><!-- legal -->
		
		<input type="submit" id="empSubmitBtn" value="Submit" />
		<!-- this needs to go to a thanking page php if w/redirect -->	
			
	</form>
	
</div><!-- content -->