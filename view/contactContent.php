<div id="content">
		
	<h2>Contact Us</h2>

	<div id="find">
	
		<h3>Where to find us</h3>
	
		<div id="directions">
		
			<p>140 Alafaya Trail</p><br />
			<p>Oviedo Fl, 23765</p><br />
			<p>(407) 366-4073</p><br />
			<br />
		
			<a href="#">Get directions</a>
		
		</div><!-- directions -->
	
		<img src="http://placehold.it/380x260" alt="click for directions"/>
		
	</div><!-- find -->	

	<div id="left">
		<div id="contact"> 
			
			<h3>Send Us a Message</h3>
			
			<form id="message" action="message">
			
				<label for="name">*Name:</label>
				<input type="text" name="name" id="name" required="required" />
				
				<label for="email">*Email Address</label>
				<input type="email" name="email" id="email" required="required" placeholder="example@email.com" />
				
				<label for="subject">*Subject</label>
				<select>
					<option>Contacting about</option>
					<option>Event</option>
					<option>Complaint</option>
					<option>Improvements</option>
					<option>Employment</option>
					<option>Other</option>
				</select>
				
				<label for="theMessage">*Message:</label>
				<textarea name="theMessage" id="theMessage"></textarea>
				
				<input type="submit" id="sendBtn" value="Send" />
				
			</form><!-- message -->
		
		</div><!-- contact -->
		
		<div id="workInterest">
			
			<h3>Interested in Working for Bonfires</h3>
			
			<p>
				Cupcake ipsum color. Sit amet powder gingerbread jelly-o macaroon unerd-wear.com chocolcate.
				Marzipan lollipop gummies.
			</p>
			
			<!-- This goes to the employment application -->
			<a href="?action=empApp">Apply now>></a>
			
		</div><!-- workInterest -->
		
	</div><!-- left -->
	
	<div id="feedback">
		
		<h3>Customer Feedback</h3>
		<p>Using numbers 1-5, 1 for unsatisfactory and 5 for satisfactory. Your feebback is really important to us.</p>
		
		<form action="feedback">
			
			<label for="feedEmail">*Email Address:</label>
			<input type="email" name="feedEmail" id="feedEmail" required="required" />
			
			<label for="food">Food:</label>
			<div id="food">
				<input type="radio" name="food" value="1">1<br />
				<input type="radio" name="food" value="2">2<br />
				<input type="radio" name="food" value="3">3<br />
				<input type="radio" name="food" value="4">4<br />
				<input type="radio" name="food" value="5">5<br />
			</div><!-- food -->
			
			<label for="service">Service:</label>
			<div id="service">
				<input type="radio" name="service" value="1">1<br />
				<input type="radio" name="service" value="2">2<br />
				<input type="radio" name="service" value="3">3<br />
				<input type="radio" name="service" value="4">4<br />
				<input type="radio" name="service" value="5">5<br />
			</div><!-- service -->
			
			<label for="cleaniness">Cleaniness:</label>
			<div id="cleaniness">
				<input type="radio" name="cleaniness" value="1">1<br />
				<input type="radio" name="cleaniness" value="2">2<br />
				<input type="radio" name="cleaniness" value="3">3<br />
				<input type="radio" name="cleaniness" value="4">4<br />
				<input type="radio" name="cleaniness" value="5">5<br />
			</div><!-- cleaniness -->
			
			<label for="spev">Specials and Events:</label>
			<div id="spev">
				<input type="radio" name="spev" value="1">1<br />
				<input type="radio" name="spev" value="2">2<br />
				<input type="radio" name="spev" value="3">3<br />
				<input type="radio" name="spev" value="4">4<br />
				<input type="radio" name="spev" value="5">5<br />
			</div><!-- spev -->
			
			<label for="comments">Additional Comments:</label>
			<textarea id="comments" name="comments"></textarea>
			
			<input type="submit" id="feedbackBtn" value="Submit" />
		
		</form>
		
	</div><!-- feedback -->
	
</div><!-- content -->