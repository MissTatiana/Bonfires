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


/*	=	=	=	=	Contact Page/AJAX	=	=	=	=	*/

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
			subject: $("#subject").val(),
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


});//document