jQuery(function() {
	jQuery('.js-anchor').click(function(e){
		e.preventDefault();
		jQuery('html, body').animate({
			scrollTop: jQuery( jQuery(this).attr('data-anchor') ).offset().top -100
		}, 1000);
		return false;
	});
});