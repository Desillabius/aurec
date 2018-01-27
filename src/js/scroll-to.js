jQuery(function() {
	jQuery('.anchor').click(function(){
		jQuery('html, body').animate({
			scrollTop: jQuery( jQuery(this).attr('data-anchor') ).offset().top -100
		}, 1000);
		return false;
	});
});