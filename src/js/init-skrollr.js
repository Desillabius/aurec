jQuery(function() {

	// init Skrollr
	var s = skrollr.init({
		// mobileCheck: function() {
            //hack - forces mobile version to be off
            // return false;
		// },
		skrollrBody : 'skrollr-body',
		forceHeight: false
	});

	if (s.isMobile()) {
		s.destroy();
	}

});