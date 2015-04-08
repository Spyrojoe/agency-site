$(window).load(function() {
	//var calcHeight = ($('.container').height()) - 70.0;

	var calcHeight;

	if ($('.container').height() > $('#side_nav').height()){
		calcHeight = $('.container').height() - 70.0;
	} else {
		calcHeight = $('#side_nav').height() + 50;
	}

	$('.opacity-bg').css( 'height', calcHeight );
	
});


$(document).ready(function() {
	
	var menuState = false;
	
	$('#menu-btn').click(function() {
		if (menuState == false) {
			$('#side_nav').css("display", "block");
			menuState = true;
		}
		else {
			$('#side_nav').css("display", "none");
			menuState = false;
		}
	})

});
