<div id="content">
		
	<h2>Contact Us</h2>

	<div id="find">
	
		<h3>Where to find us</h3>
	
		<span id="directions">
		
			<p>1340 Alafaya Trail</p><br />
			<p>Oviedo Fl, 23765</p><br />
			<p>(407) 366 - 4073</p><br />
			<br />
		
			<!-- directions should go to google maps and directions from routes -->
			<a href="#">Get directions</a>
		
		</span><!-- directions -->
	
		<img src="http://placehold.it/380x260" alt="click for directions"/>
		
	</div><!-- find -->	

	<div id="contact"> 
		
		<h3>Send Us a Message</h3>
		
		<!-- does this need the mailto in the action? -->
		<form id="message" action="message">
		
			<label for="name">*Name:</label><br />
			<input type="text" name="name" id="name" class="input" required="required" /><br />
			
			<label for="email">*Email Address</label><br />
			<input type="email" name="email" id="email" class="input" required="required" placeholder="example@email.com" /><br />
			
			<label for="subject">*Subject</label><br />
			<select name="about">
				<option>Contacting about</option>
				<option value="event">Event</option>
				<option value="complaint">Complaint</option>
				<option value="improvements">Improvements</option>
				<option value="employment">Employment</option>
				<option value="other">Other</option>
			</select><br />
			
			<label for="theMessage">*Message:</label><br />
			<textarea name="theMessage" id="theMessage"></textarea><br />
			
			<input type="submit" id="sendBtn" class="btn" value="Send" />
			
		</form><!-- message -->
	
	</div><!-- contact -->
	
	<div id="feedback">
		
		<h3>Customer Feedback</h3>
		<p class="instruct">Using numbers 1-5, 1 for unsatisfactory and 5 for satisfactory. Your feebback is really important to us.</p>
		
		<form action="feedback">
			
			<label for="feedEmail">*Email Address:</label><br />
			<input type="email" name="feedEmail" id="feedEmail" class="input" placeholder="example@email.com" required="required" /><br />
			
			<label for="food">Food:</label>
			<div id="food" class="radioDiv">
				<input type="radio" id="food1" class="radio" name="food" value="1">
				<input type="radio" id="food2" class="radio" name="food" value="2">
				<input type="radio" id="food3" class="radio" name="food" value="3">
				<input type="radio" id="food4" class="radio" name="food" value="4">
				<input type="radio" id="food5" class="radio" name="food" value="5">
				<br />
				<label for="food1">1</label>
				<label for="food2">2</label>
				<label for="food3">3</label>
				<label for="food4">4</label>
				<label for="food5">5</label>			
			</div><!-- food -->
			
			<label for="service">Service:</label>
			<div id="service" class="radioDiv">
				<input type="radio" id="service1" class="radio" name="service" value="1">
				<input type="radio" id="service2" class="radio" name="service" value="2">
				<input type="radio" id="service3" class="radio" name="service" value="3">
				<input type="radio" id="service4" class="radio" name="service" value="4">
				<input type="radio" id="service5" class="radio" name="service" value="5">
				<br />				
				<label for="service1">1</label>
				<label for="service2">2</label>
				<label for="service3">3</label>
				<label for="service4">4</label>
				<label for="service5">5</label>
			</div><!-- service -->
			
			<label for="cleaniness">Cleaniness:</label>
			<div id="cleaniness" class="radioDiv">
				<input type="radio" id="clean1" class="radio" name="cleaniness" value="1">
				<input type="radio" id="clean2" class="radio" name="cleaniness" value="2">
				<input type="radio" id="clean3" class="radio" name="cleaniness" value="3">
				<input type="radio" id="clean4" class="radio" name="cleaniness" value="4">
				<input type="radio" id="clean5" class="radio" name="cleaniness" value="5">
				<br />
				<label for="clean1">1</label>
				<label for="clean2">2</label>
				<label for="clean3">3</label>
				<label for="clean4">4</label>
				<label for="clean5">5</label>
			</div><!-- cleaniness -->
			
			<label for="spev">Specials and Events:</label>
			<div id="spev" class="radioDiv">
				<input type="radio" id="spev1" class="radio" name="spev" value="1">
				<input type="radio" id="spev2" class="radio" name="spev" value="2">
				<input type="radio" id="spev3" class="radio" name="spev" value="3">
				<input type="radio" id="spev4" class="radio" name="spev" value="4">
				<input type="radio" id="spev5" class="radio" name="spev" value="5">
				<br />				
				<label for="spev1">1</label>
				<label for="spev2">2</label>
				<label for="spev3">3</label>
				<label for="spev4">4</label>
				<label for="spev5">5</label>
			</div><!-- spev -->
			
			<label for="comments">Additional Comments:</label>
			<textarea id="comments" name="comments"></textarea><br />
			
			<input type="submit" id="feedbackBtn" class="btn" value="Submit" />
		
		</form>
		
	</div><!-- feedback -->
	
	<div id="workInterest">
		
		<h3>Interested in Working for Bonfires</h3>
		
		<p>
			Cupcake ipsum color. Sit amet powder gingerbread jelly-o macaroon unerd-wear.com chocolcate.
			Marzipan lollipop gummies.
		</p>
		
		<!-- This goes to the employment application -->
		<a href="?action=empApp" class="reglink">Apply now >></a>
		
	</div><!-- workInterest -->
	
	
	
</div><!-- content -->