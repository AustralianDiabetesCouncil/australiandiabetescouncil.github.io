$(document).ready(function() {
						   
	if ( $(window).width() >= 770 ) {
		$(".sticky").sticky({topSpacing:0});
	}

});

$(window).resize(function() {

	if ( $(window).width() >= 770 ) {
		$(".sticky").sticky({topSpacing:0});
	}

});