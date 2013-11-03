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
		<p>Using numbers 1-5, 1 for unsatisfactory and 5 for satisfactory. Your feebback is really important to us.</p>
		
		<form action="feedback">
			
			<label for="feedEmail">*Email Address:</label>
			<input type="email" name="feedEmail" id="feedEmail" required="required" />
			
			<label for="food">Food:</label>
			<div id="food">
				<input type="radio" name="food" value="1"><p>1</p><br />
				<input type="radio" name="food" value="2"><p>2</p><br />
				<input type="radio" name="food" value="3"><p>3</p><br />
				<input type="radio" name="food" value="4"><p>4</p><br />
				<input type="radio" name="food" value="5"><p>5</p><br />
			</div><!-- food -->
			
			<label for="service">Service:</label>
			<div id="service">
				<input type="radio" name="service" value="1"><p>1</p><br />
				<input type="radio" name="service" value="2"><p>2</p><br />
				<input type="radio" name="service" value="3"><p>3</p><br />
				<input type="radio" name="service" value="4"><p>4</p><br />
				<input type="radio" name="service" value="5"><p>5</p><br />
			</div><!-- service -->
			
			<label for="cleaniness">Cleaniness:</label>
			<div id="cleaniness">
				<input type="radio" name="cleaniness" value="1"><p>1</p><br />
				<input type="radio" name="cleaniness" value="2"><p>2</p><br />
				<input type="radio" name="cleaniness" value="3"><p>3</p><br />
				<input type="radio" name="cleaniness" value="4"><p>4</p><br />
				<input type="radio" name="cleaniness" value="5"><p>5</p><br />
			</div><!-- cleaniness -->
			
			<label for="spev">Specials and Events:</label>
			<div id="spev">
				<input type="radio" name="spev" value="1"><p>1</p><br />
				<input type="radio" name="spev" value="2"><p>2</p><br />
				<input type="radio" name="spev" value="3"><p>3</p><br />
				<input type="radio" name="spev" value="4"><p>4</p><br />
				<input type="radio" name="spev" value="5"><p>5</p><br />
			</div><!-- spev -->
			
			<label for="comments">Additional Comments:</label>
			<textarea id="comments" name="comments"></textarea>
			
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