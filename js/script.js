$(document).ready(function() {
	
/*	=	=	=	=	Easy Tabs	=	=	=	=	*/
$('#tab-container').easytabs();


/*	=	=	=	=	Date Picker	=	=	=	=	*/

//general start date
$("#genStart").datepicker();

//employed since
$("#empSince").datepicker();

//Previous Employment from - till
$("#empFrom").datepicker();
$("#empPrev").datepicker();

//Previous Two Employment from - till
$("#empFromTwo").datepicker();
$("#empPrevTwo").datepicker();


/*	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=
 * 					Contact Page/AJAX
 * =	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	*/
/*	=	=	Message	=	=	*/
$("#sendBtn").live("click", function(a) {
	
	console.log("sendBtn clicked");
	a.preventDefault();
	
	$.ajax({
		type: "POST",
		url: "../model/message.php",
		data: {
			name: $("#name").val(),
			email: $("#email").val(),
			subject: $("#about option:selected").val(),
			message: $("#theMessage").val()
		},
		success: function() {
			//alert for sending success
		},
		error: function() {
			//alert for sending fail
		}
	});//end ajax
	
});//end sendBtn

/*	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=
 * 					Emplyoment Page/AJAX
 * =	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	*/


$("#empSubmitBtn").on("click", function(b) {
	
	console.log("empSubmitBtn clicked");
	b.preventDefault();
	
	$.ajax({
		type: "POST",
		url: "../model/employ.php",
		data: {
			//gen info
			appFor: $("#applyFor").val(), //how do you get from dd
			genStart: $("#genStart").val(),
			availability: $("#availability").val(),
			
			//personal info
			firstName: $("#firstName").val(),
			mi: $("#mi").val(),
			lastName: $("#lastName").val(),
			street: $("#street").val(),
			city: $("#city").val(),
			state: $("#state").val(),
			zip: $("#zip").val(),
			phone: $("#phone").val(),
			appEmail: $("#appEmail").val(),
			
			//work experience
			//current
			currently: $('#currently:checked').val(),
			currentEmp: $("#currentEmp").val(),
			currentPos: $("#currentPos").val(),
			empSince: $("#empSince").val(),
			supervisor: $("#supervisor").val(),
			currentCity: $("#currentCity").val(),
			currentSt: $("#currentSt").val(),
			currentZip: $("#currentZip").val(),
			currentPhone: $("#currentPhone").val(),
			currentRate: $("#currentRate").val(),
			
			//previous1
			previousEmp: $("#previousEmp").val(),
			previousPos: $("#previousPos").val(),
			empFrom: $("#empFrom").val(),
			empPrev: $("#empPrev").val(),
			supervisorPrev: $("#supervisorPrev").val(),
			prevCity: $("#prevCity").val(),
			previousSt: $("#previousSt").val(),
			previousZip: $("#previousZip").val(),
			previousPhone: $("#previousPhone").val(),
			previousRate: $("#prevousRate").val(),
			leaving: $("#leaving").val(),
			
			//previous2
			previousTwoEmp: $("#previousTwoEmp").val(),
			previousTwoPos: $("#previousTwoPos").val(),
			empFromTwo: $("#empFromTwo").val(),
			empPrevTwo: $("#empPrevTwo").val(),
			supervisorPrevTwo: $("#supervisorPrevTwo").val(),
			prevCityTwo: $("#prevCityTwo").val(),
			previousStTwo: $("#previousStTwo").val(),
			previousZipTwo: $("#previousZipTwo").val(),
			previousPhoneTwo: $("#previousPhoneTwo").val(),
			previousRateTwo: $("#prevousRateTwo").val(),
			leavingTwo: $("#leavingTwo").val(),
			
			//military
			served: $('#served:checked').val(),
			branch: $("#branch").val(),
			special: $("#special").val(),
			rank: $("#rank").val(),
			
			//legal
			citizen: $("#citizen:checked").val(),
			discharge: $("#discharge:checked").val(),
			reason: $("#reason").val(),
			convicted: $("#convicted:checked").val(),
			crime: $("#crime").val()
		},
		success: function(response) {
			//send successfully
			console.log('response is '+response);

		},
		error: function(error) {
			//sending failed
			console.log('error is '+error);
		}
		
	});//end ajax
	
	return false;
	
});//end empSubmitBtn

$("#empClear").live("click", function(c) {
	
	//needs to clear all the fields
	
});//end empClear


//host gator -> add on their account -> bill them

});//document