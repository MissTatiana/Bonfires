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



});//document