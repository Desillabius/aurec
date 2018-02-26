jQuery(function() {
	// Simple DOM manipulation to remove wrong languages
	var $language = $('html').attr('lang');
	if ($language == 'en-US') {
		var t1 = setTimeout(function() {
			jQuery('*:lang(it)').remove();
		}, 300);
	}
	if ($language == 'it-IT') {
		var t2 = setTimeout(function() {
			jQuery('*:lang(en)').remove();
		}, 300);
	}

});