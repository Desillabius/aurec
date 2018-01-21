jQuery(function() {
	// var mySVGsToInject = document.querySelectorAll('img.svg-inject');
	// SVGInjector(mySVGsToInject, {
	// 	pngFallback: '../assets/img/fallback'
	// });
	
	// Elements to inject
	var elementsToInject = document.querySelectorAll('svg[data-src]');

	// Options
	var injectorOptions = {
	  evalScripts: 'once', // 'always'
	  // pngFallback: 'url to directory with fallbackpngs', // false
	  // keepStylesClass: 'className', // ''
	  // spriteClassName: 'className', // 'sprite'
	  // spriteClassIdName: 'classNameInclSeperator', // 'sprite--'
	  // removeStylesClass: 'className', // 'icon' -> this will remove all styles from the svg so it is easy to style with external css. works best with monochrome icons
	  // removeAllStyles: true|false, // false
	  // fallbackClassName: 'className', // 'sprite'
	  // prefixStyleTags: true|false, // true

	  // spritesheet relevant options
	  // spritesheetURL: 'urlToSpritesheet', false // only needed for classbased injection
	  // onlyInjectVisiblePart: true|false, // true -> if the fragmentId specifies an svg-view element, only inject the part that is visible due to the specified view
	  // svgFallbackDir: 'urlToFragmentsThatMightNotBeInSpritesheetAnymore', // false -> it can make sense to remove fragments from a spritesheet after some time.. to be sure that nothin breaks, they can be put as single files to a fallback directory and injector tries to find them there
	};

	// var afterAllInjectionsFinishedCallback = function (totalSVGsInjected) {
	//   // Callback after all SVGs are injected
	//   console.log('We injected ' + totalSVGsInjected + ' SVG(s)!');
	// };

	// var perInjectionCallback = function (svg) {
	//   // Callback after each SVG is injected
	//   console.log('SVG injected: ' + svg);
	// };

	// create injector configured by options
	var injector = new SVGInjector(injectorOptions);

	// Trigger the injection
	injector.inject(
	  elementsToInject
	  // afterAllInjectionsFinishedCallback,
	  // perInjectionCallback
	);
});