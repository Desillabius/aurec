jQuery(function() {
	jQuery('.scroll-arrow').click(function(){
		jQuery('html, body').animate({
			scrollTop: jQuery( jQuery(this).attr('data-anchor') ).offset().top
		}, 500);
		return false;
	});
});