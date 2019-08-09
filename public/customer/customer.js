$(document).ready(function() {
	$('.show-reply').click(function(event) {
		/* Act on the event */
		 id = $(this).attr("data-a");
		
		$('.form-reply'+id).toggle();
	});

});
