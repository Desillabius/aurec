jQuery(function() {

	jQuery("#navbar-toggle").on("click", function(e){
		jQuery(".nav-wrapper__main").toggleClass("is-open");
		jQuery(".navbar-toggle").toggleClass("is-open");
		// jQuery(".darker-background").toggleClass("is-open");
		// jQuery("#main-menu .submenu").removeClass("is-open");
		jQuery("html").toggleClass("no-overflow");
		e.preventDefault();
	});

});