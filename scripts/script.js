// JavaScript Document

$(document).ready(function(){
	$('#contactUs').click(function(event) {
		$("#messageOverlay").show();
		$("#continueButton").focus();
		$("#continueButton").click(function(event) {
			event.preventDefault();
			$('#messageOverlay').hide('fast', function() {
			});
		});	
		$(window).keydown(function (e) {
			if ( e.which === 13 ) {
				$("#continueButton").click();        
			}
		});
	});
 });