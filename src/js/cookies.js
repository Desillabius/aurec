var UTILS = {};

/**
 * Utility to manage cookies
 * @module UTILS
 * @class docCookies
 * @see https://developer.mozilla.org/en-US/docs/Web/API/document.cookie
 */
UTILS.docCookies = {

	getItem: function(sKey) {

		return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;

	},

	setItem: function(sKey, sValue, vEnd, sPath, sDomain, bSecure) {

		if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) {

			return false;

		}

		var sExpires = "";

		if (vEnd) {

			switch (vEnd.constructor) {

				case Number:
					sExpires = vEnd === Infinity ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + vEnd;
					break;
				case String:
					sExpires = "; expires=" + vEnd;
					break;
				case Date:
					sExpires = "; expires=" + vEnd.toUTCString();
					break;
			}

		}

		document.cookie = encodeURIComponent(sKey) + "=" + encodeURIComponent(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "") + (bSecure ? "; secure" : "");

		return true;

	},

	removeItem: function(sKey, sPath, sDomain) {

		if (!sKey || !this.hasItem(sKey)) {

			return false;

		}


		document.cookie = encodeURIComponent(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "");

		return true;

	},

	hasItem: function(sKey) {

		return (new RegExp("(?:^|;\\s*)" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=")).test(document.cookie);

	}

};

/**
 * @class  CookieAcceptance Manage cookie disclaimer visibility
 * @type {Object}
 */
var CookieAcceptance = {

	/**
	 * cookieName Name of the technical cookie
	 * @type {String}
	 */
	cookieName: "cookiePolicy",

	/**
	 * cookieValue Technical cookie value
	 * @type {String}
	 */
	cookieValue: "read",

	btn: null,

	disclaimer: null,

	page: null,

	hideCookieDisclaimer: function(){

		this.disclaimer.addClass("hide-now");

	},

	showCookieDisclaimer: function(){

		this.disclaimer.removeClass("hide-now");

	},

	/**
	 * @method  registerCookie
	 * Set the cookie with the proper value and reload the page.
	 */
	registerCookie: function(){

		UTILS.docCookies.setItem(this.cookieName, this.cookieValue, Infinity, "/");

		this.disclaimer.addClass("hide-now");

	},

	onAcceptance: function(){

		this.registerCookie();

		this.hideCookieDisclaimer();

	},

	/**
	 * @method  checkAcceptance
	 * When the DOM is ready, check if the technical cookie exists:
	 * if so, hide the disclaimer
	 */
	checkAcceptance: function(){

		var isCookieAccepted = UTILS.docCookies.getItem(this.cookieName);

		isCookieAccepted ? this.hideCookieDisclaimer() : this.showCookieDisclaimer();

	},

	eventListener: function(){

		this.btn.on("click", $.proxy(this.onAcceptance, this));

	},

	init: function(){

		this.btn =  jQuery("#js-accept-cookie");

		this.disclaimer = jQuery("#cookie-disclaimer");

		this.page = jQuery("#page");

		this.checkAcceptance();

		this.eventListener();

	}

};

(function(){
	CookieAcceptance.init();
})();