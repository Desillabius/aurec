(function($) {

    /**
     * Copyright 2012, Digital Fusion
     * Licensed under the MIT license.
     * http://teamdf.com/jquery-plugins/license/
     *
     * @author Sam Sehnert
     * @desc A small plugin that checks whether elements are within
     *     the user visible viewport of a web browser.
     *     only accounts for vertical position, not horizontal.
     */

    $.fn.visible = function(partial) {

        var $t = jQuery(this),
            $w = jQuery(window),
            viewTop = $w.scrollTop(),
            viewBottom = viewTop + $w.height(),
            _top = $t.offset().top,
            _bottom = _top + $t.height(),
            compareTop = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

    };

})(jQuery);

jQuery(function() {

    var win = jQuery(window);
    var allMods = jQuery(".animate-item, .animate-item--no-delay");

    BrowserDetect.init();

    if ((BrowserDetect.browser == 'Explorer' && BrowserDetect.version <= 9) || (BrowserDetect.browser == 'Safari' && BrowserDetect.version <= 7)) {
        var t = setTimeout(function() {
            allMods.addClass("no-animation");
        }, 300)
    } else {

        var t = setTimeout(function() {
            allMods.each(function(i, el) {
                var el = jQuery(el);
                if (el.visible(true)) {
                    el.addClass(el.attr("data-animation"));
                }
            });
        }, 300)

        // win.scroll(function(event) {
        //     allMods.each(function(i, el) {
        //         var el = jQuery(el);
        //         if (el.visible(true)) {
        //             el.addClass(el.attr("data-animation"));
        //         }
        //     });
        // });

        // requestAnimationFrame performance fix v01
        var timeoutScroll;
        // Listen for resize events
        window.addEventListener('scroll', function ( event ) {
            // console.log('no debounce');
            // If there's a timer, cancel it
            if (timeoutScroll) {
                window.cancelAnimationFrame(timeoutScroll);
            }
            // Setup the new requestAnimationFrame()
            timeoutScroll = window.requestAnimationFrame(function () {
                // Run our scroll functions
                allMods.each(function(i, el) {
                    var el = jQuery(el);
                    if (el.visible(true)) {
                        el.addClass(el.attr("data-animation"));
                        // console.log( 'debounced' );
                    }
                });
            });
        }, false);

        // requestAnimationFrame performance fix v02
        // var working = false;
        // // Listen for resize events
        // var scrollAction = function() {
        //     // do something that triggers a repaint
        //     working = false;
        // };

        // jQuery(window).on('scroll', function() {
        //     if (! working) {
        //         window.requestAnimationFrame(scrollAction);
        //         working = true;
        //     }
        // }).trigger('scroll');
    }

});