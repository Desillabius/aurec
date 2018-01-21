jQuery(function() {

	jQuery('.lazy').lazy({
		scrollDirection: 'vertical',
        effect: 'fadeIn',
		visibleOnly: true,
		onError: function(element) {
            console.log('error loading ' + element.data('src'));
        }
	});

});