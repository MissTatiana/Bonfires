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
				<div id="adrs">
					<label for="street">*Address:</label>
					<input type="text" name="street" id="street"  required="required"/>
				</div><!-- adrs -->
				
				<div id="cit">
					<label for="city">*City:</label>
					<input type="text" name="city" id="city"  required="required"/>
				</div><!-- cit -->
				
				<div id="st">
					<label for="state">*State:</label>
					<input type="text" name="state" id="state"  required="required"/>
				</div><!-- st -->
				
				<div id="zp">
					<label for="zip">*Zip Code:</label>
					<input type="number" name="zip" id="zip"  required="required"/>
				</div><!-- zp -->			
			</div><!-- streetAdd -->
			
			<div id="contactInfo">
				<div id="pNumber">
					<label for="phone">*Phone Number:</label>
					<input type="tel" name="phone" id="phone" placeholder="000-000-0000" required="required" />
				</div><!-- pNumber -->
				
				<div id="eAdd">
					<label for="appEmail">*Email Address:</label>
					<input type="text" name="appEmail" id="appEmail" placeholder="example@email.com" required="required"/>
				</div><!-- eAdd -->
			</div><!-- contactInfo -->
			
		</div><!-- personal -->
		
		<div id="experience">
			
			<h3>Work Experience</h3>
			
			<div id="current">
				<div id="check">
					<label for="currently">Currently Employed?</label>
					<input type="checkbox" name="currently" id="yes" value="yes">
					<label for="yes" class="grey">yes</label>
					<input type="checkbox" name="currently" id="no" value="no">
					<label for="no" class="grey">no</label>
				</div><!-- check -->
				<br />
				
				<div class="position">
					<div class="emp">
						<label for="currentEmp">Current Employer:</label>
						<input type="text" name="currentEmp" id="currentEmp" />
					</div><!-- emp -->
					
					<div class="pos">
						<label for="currentPos">Position:</label>
						<input type="text" name="currentPos" id="currentPos" />
					</div><!-- pos -->
				</div><!-- position -->
				<br />
				
				<div class="since">
					<div class="es">
						<label for="empSince">Employed Since:</label>
						<input type="text" name="empSince" id="empSince" />
					</div><!-- es -->
					<!-- need a date picket -->
					
					<div class="super">
						<label for="supervisor">Supervisor:</label>
						<input type="text" name="supervisor" id="supervisor" />
					</div><!-- super -->
				</div><!-- since -->
				
				<div class="currentAdd">
					<div class="ccity">
						<label for="currentCity">City:</label>
						<input type="text" name="currentCity" id="currentCity" />
					</div><!-- ccity -->
					
					<div class="cst">
						<label for="currentSt">State:</label>
						<input type="text" name="currentSt" id="currentSt" />
					</div><!-- cst -->
					
					<div class="czip">
						<label for="currentZip">Zip Code:</label>
						<input type="number" name="currentZip" id="currentZip" />
					</div>
					
					<div class="cphone">
						<label for="currentPhone">Phone Number:</label>
						<input type="tel" name="currentPhone" placeholder="000-000-0000" id="currentPhone" />
					</div><!-- cphone -->
				</div><!-- currentAdd -->
				<br />
				<div class="crate">
					<label for="currentRate">Rate of Pay:</label>
					<input type="text" name="currentRate" id="currentRate" />
				</div><!-- crate -->
			</div><!-- current -->
			
			<div id="previous">
				<div class="position">
					<div class="emp">
						<label for="previousEmp">Previous Employer:</label>
						<input type="text" name="previousEmp" id="previousEmp" />
					</div><!-- emp -->
					
					<div class="pos">
						<label for="previousPos">Position:</label>
						<input type="text" name="previousPos" id="previousPos" />
					</div><!-- pos -->
				</div><!-- position -->
				
				<div class="since">
					<div class="ef">
						<label for="empFrom">Employed From:</label>
						<input type="text" name="empFrom" id="empFrom" />
					</div><!-- ef -->
					<!-- need a date picker -->
					
					<div class="ep">
						<label for="empPrev">Employed Till:</label>
						<input type="text" name="empPrev" id="empPrev" />
					</div><!-- ep -->
					<!-- need a date picket -->
					
					<div class="super">
						<label for="supervisorPrev">Supervisor:</label>
						<input type="text" name="supervisorPrev" id="supervisorPrev" />
					</div><!-- super -->
				</div><!-- since -->
				
				<div class="previousAdd">
					<div class="ccity">
						<label for="prevCity">City:</label>
						<input type="text" name="prevCity" id="prevCity" />
					</div><!-- ccity -->
					
					<div class="cst">
						<label for="previousSt">State:</label>
						<input type="text" name="previousSt" id="previousSt" />
					</div><!-- cst -->
					
					<div class="czip">
						<label for="previousZip">Zip Code</label>
						<input type="number" name="previousZip" id="previousZip" />
					</div><!-- czip -->
					
					<div class=" cphone">
						<label for="previousPhone">Phone Number:</label>
						<input type="number" name="previousPhone" id="previousPhone" />
					</div><!-- cphone -->
				</div><!-- currentAdd -->
	
				<div id="rateLeave">
					<div class="prevRate">
						<label for="prevousRate">Rate of Pay:</label>
						<input type="text" name="prevousRate" id="prevousRate" />
					</div><!-- prevRate -->
					
					<div class="rleave">
						<label for="leaving">Reasoning for Leaving:</label>
						<input type="text" name="leaving" id="leaving" />
					</div><!-- rleave -->
				</div><!-- rateLeave -->
			</div><!-- previous -->
			
			<div id="previousTwo">
				<div class="position">
					<div class="emp">
						<label for="previousTwoEmp">Previous Employer:</label>
						<input type="text" name="previousTwoEmp" id="previousTwoEmp" />
					</div><!-- emp -->
					
					<div class="pos">
						<label for="previousTwoPos">Position:</label>
						<input type="text" name="previousTwoPos" id="previousTwoPos" />
					</div><!-- pos -->
				</div><!-- position -->
				
				<div class="since">
					<div class="ef">
						<label for="empFromTwo">Employed From:</label>
						<input type="text" name="empFromTwo" id="empFromTwo" />
					</div><!-- ef -->
					<!-- need a date picker -->
					
					<div class="ep">
						<label for="empPrevTwo">Employed Till:</label>
						<input type="text" name="empPrevTwo" id="empPrevTwo" />
					</div><!-- ep -->
					<!-- need a date picket -->
					
					<div class="super">
						<label for="supervisorPrevTwo">Supervisor:</label>
						<input type="text" name="supervisorPrevTwo" id="supervisorPrevTwo" />
					</div><!-- super -->
				</div><!-- since -->
				
				<div class="previousAdd">
					<div class="ccity">
						<label for="prevCityTwo">City:</label>
						<input type="text" name="prevCityTwo" id="prevCityTwo" />
					</div><!-- ccity -->
					
					<div class="cst">
						<label for="previousStTwo">State:</label>
						<input type="text" name="previousStTwo" id="previousStTwo" />
					</div><!-- cst -->
					
					<div class="czip">
						<label for="previousZipTwo">Zip Code</label>
						<input type="number" name="previousZipTwo" id="previousZipTwo" />
					</div><!-- czip -->
					
					<div class=" cphone">
						<label for="previousPhoneTwo">Phone Number:</label>
						<input type="number" name="previousPhoneTwo" id="previousPhoneTwo" />
					</div><!-- cphone -->
				</div><!-- currentAdd -->
	
				<div id="rateLeave">
					<div class="prevRate">
						<label for="prevousRateTwo">Rate of Pay:</label>
						<input type="text" name="prevousRateTwo" id="prevousRateTwo" />
					</div><!-- prevRate -->
					
					<div class="rleave">
						<label for="leavingTwo">Reasoning for Leaving:</label>
						<input type="text" name="leavingTwo" id="leavingTwo" />
					</div><!-- rleave -->
				</div><!-- rateLeave -->
			</div><!-- previous -->
		</div><!-- experience -->
			
		<div id="military">
			
			<h3>U.S. Military Service</h3>
			
			<div id="milCheck">
				<label for="served">Have you ever served in the military</label>
				<input type="checkbox" name="served" value="yes">
				<label for="yes" class="grey">yes</label>
				<input type="checkbox" name="served" value="no">
				<label for="no" class="grey">no</label>
			</div><!-- milCheck -->
			
			<div id="detail">
				<div id="milBranch">
					<label for="branch">Branch of Service:</label>
					<input type="text" name="branch" id="branch" />
				</div><!-- milBranch -->
				
				<div id="milSpecial">
					<label for="special">Technical Specialization:</label>
					<input type="text" name="special" id="special" />
				</div><!-- milSpecials -->
				
				<div id="milRank">
					<label for="rank">Rank Attained:</label>
					<input type="text" name="rank" id="rank" />
				</div><!-- milRank -->
			</div><!-- detai -->l
			
		</div><!-- military -->
			
		<div id="legal">
			
			<h3>Legal Information</h3>
			
			<div id="citCheck">
				<label for="citizen">Are you a U.S. citizen or have the necessary documents to work in the U.S.</label>
				<input type="checkbox" name="citizen" value="yes">
				<label for="yes" class="grey">yes</label>
				<input type="checkbox" name="citizen" value="no">
				<label for="no" class="grey">no</label>
			</div><!-- citCheck -->
			<br />
			
			<div id="fireCheck">
				<label for="discharge">Have you ever been discharged by a company</label>
				<input type="checkbox" name="discharge" value="yes">
				<label for="yes" class="grey">yes</label>
				<input type="checkbox" name="discharge" value="no">
				<label for="no" class="grey">no</label>
			</div><!-- fireCheck -->

			<div id="firedReason">
				<label for="reason">If yes, please give reason for discharge:</label>
				<input type="text" name="reason" id="reason" />
			</div><!-- firedReason -->
			<br />
			
			<div id="crimeCheck">
				<label for="convicted">Have you ever been convicted of a crime</label>
				<input type="checkbox" name="convicted" value="yes">
				<label for="yes" class="grey">yes</label>
				<input type="checkbox" name="convicted" value="no">
				<label for="no" class="grey">no</label>
			</div><!-- crimeCheck -->

			<div id="explainCrime">
				<label for="crime">If yes, please explain:</label>
				<input type="text" name="crime" id="crime" />
			</div><!-- explainCrime -->
			
		</div><!-- legal -->
		
		<input type="submit" id="empClear" class="btn" value="Clear" />
		<input type="submit" id="empSubmitBtn" class="btn" value="Submit" />
		<!-- this needs to go to a thanking page php if w/redirect -->	
			
	</form>
	
</div><!-- content -->