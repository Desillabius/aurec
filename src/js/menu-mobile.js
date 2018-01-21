jQuery(function() {

	jQuery("#navbar-toggle, .darker-background").on("click", function(e){
		jQuery(".nav-wrapper").toggleClass("is-open");
		jQuery(".navbar-toggle").toggleClass("is-open");
		jQuery(".darker-background").toggleClass("is-open");
		jQuery("#main-menu .submenu").removeClass("is-open");
		jQuery("html").toggleClass("no-overflow");
		e.preventDefault();
	});

	if (jQuery(window).width() < 1024) {
		jQuery("#main-menu .has-children").on("click", function(e) {
			jQuery(this).next('.submenu').addClass('is-open');
			e.preventDefault();
		});
		jQuery("#main-menu .submenu .back").on("click", function(e) {
			jQuery(this).closest('.submenu').removeClass('is-open');
			e.preventDefault();
		});
	};

	jQuery("#sidebar-menu .has-children").on("click", function(e){
		jQuery(this).next(".submenu-sidebar").toggleClass("is-open");
		e.preventDefault();
	});

	if (jQuery("#sidebar-menu .has-children").hasClass('is-active')) {
		jQuery("#sidebar-menu .has-children.is-active").next(".submenu-sidebar").addClass("is-open");
	};

});