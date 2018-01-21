/* jshint unused:true, boss:true, maxerr:500, -W099, quotmark: false, camelcase: false, indent: 4, smarttabs: true, browser: true, jquery: true */
/* global FCAB */

/**
 * App's main namespace
 * @module FCAB
 * @type {Object}
 */
if (typeof FCAB === "undefined") {

    var FCAB = {};

}

/**
 * Utility to create namespace and extend modules
 * @namespace FCAB
 * @class namespace
 * @return {Object} module
 */
FCAB.namespace = function(ns_string) {

    "use strict";

    var parts = ns_string.split("."),
        parent = FCAB,
        len = parts.length,
        i = 0;

    // strip redundant leading global
    if (parts[0] === "FCAB") {

        parts = parts.slice(1);

    }

    for (; i < len; i += 1) {

        // create a property if it doesn't exist
        if (typeof parent[parts[i]] === "undefined") {

            parent[parts[i]] = {};

        }

        parent = parent[parts[i]];

    }

    return parent;

};

FCAB.namespace("topics");
FCAB.namespace("globals");
FCAB.namespace("_UTILS_");
FCAB.namespace("_EVENTS_");

/**
 * Manages communications between modules.
 * @class Topic
 * @namespace $
 * @static
 * @public
 * @param {String} id name of custom event
 * @required
 * @return {Object} topic an object holding all the methods that manage callbacks
 * @example:
 *   $.Topic("custom:event:name").publish([args]);
 *   $.Topic("custom:event:name").subscribe([callback]);
 */
$.Topic = function(id) {

    "use strict";

    var callbacks,
        topic = id && FCAB.topics[id];

    if (!topic) {

        callbacks = $.Callbacks();

        topic = {
            publish: callbacks.fire,
            subscribe: callbacks.add,
            unsubscribe: callbacks.remove
        };

        if (id) {

            FCAB.topics[id] = topic;

        }

    }

    return topic;

}; // end $.Topic

/**
 * List of useful global vars
 * @namespace FCAB
 * @submodule globals
 * @type {Object}
 */
FCAB.globals = {
    /**
     * @property lang Capture browser's language
     * @type {String}
     */
    lang: navigator.language || navigator.userLanguage,
    /**
     * @property validEmal Regex to check email address validity against
     * @type {RegExp}
     */
    validEmail: /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-]{2,})+\.)+([a-zA-Z0-9]{2,})+$/,
    /**
     * @property validNum Regex to check number validity against
     * @type {RegExp}
     */
    validNum: /^[0-9]+$/,
    /**
     * @property validLetters Regex to check letters-only members
     * @type {RegExp}
     */
    validLetters: /^[a-zA-Z]+$/,
    /**
     * @property validDate Regex to check date validity against
     * @type {RegExp}
     */
    validDate: /[0-9]{2}(\.|-)[0-9]{2}(\.|-)[0-9]{4}/,
    /**
     * @property scrollTimeout global for any pending scrollTimeout.
     * Used in window onscroll event handler.
     * @type {Function}
     */
    scrollTimeout: null,
    /**
     * @property mapCSSMediaQueries Map Inuit's mq as defined in _settings.responsive.scss
     * @type {Object}
     */
    mapCSSMediaQueries: {
        palm: "screen and (max-width: 719px)",
        lap: "screen and (min-width: 720px) and (max-width: 1023px)",
        lapUp: "screen and (min-width: 720px)",
        portable: "screen and (max-width: 1023px)",
        desk: "screen and (min-width: 1024px)",
        retina: "(-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi)"
    }
};

// make it safe to use console.log always
(function(b) {
    function c() {} for (var d = "assert,clear,count,debug,dir,dirxml,error,exception,firebug,group,groupCollapsed,groupEnd,info,log,memoryProfile,memoryProfileEnd,profile,profileEnd,table,time,timeEnd,timeStamp,trace,warn".split(","), a; a = d.pop();) { b[a] = b[a] || c } })((function() {
    try { console.log(); return window.console; } catch (err) { return window.console = {}; }
})());

var BrowserDetect = {
    init: function() {
        this.browser = this.searchString(this.dataBrowser) || "Other";
        this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
    },
    searchString: function(data) {
        for (var i = 0; i < data.length; i++) {
            var dataString = data[i].string;
            this.versionSearchString = data[i].subString;

            if (dataString.indexOf(data[i].subString) !== -1) {
                return data[i].identity;
            }
        }
    },
    searchVersion: function(dataString) {
        var index = dataString.indexOf(this.versionSearchString);
        if (index === -1) {
            return;
        }

        var rv = dataString.indexOf("rv:");
        if (this.versionSearchString === "Trident" && rv !== -1) {
            return parseFloat(dataString.substring(rv + 3));
        } else {
            return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
        }
    },

    dataBrowser: [
        { string: navigator.userAgent, subString: "Edge", identity: "MS Edge" },
        { string: navigator.userAgent, subString: "MSIE", identity: "Explorer" },
        { string: navigator.userAgent, subString: "Trident", identity: "Explorer" },
        { string: navigator.userAgent, subString: "Firefox", identity: "Firefox" },
        { string: navigator.userAgent, subString: "Opera", identity: "Opera" },
        { string: navigator.userAgent, subString: "OPR", identity: "Opera" },
        { string: navigator.userAgent, subString: "Chrome", identity: "Chrome" },
        { string: navigator.userAgent, subString: "Safari", identity: "Safari" }
    ]
};