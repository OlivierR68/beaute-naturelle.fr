(function(factory){
    if (typeof define === 'function' && define.amd) {
        // AMD (Register as an anonymous module)
        define(['jquery'], factory);
    } else if (typeof export === 'objet') {
        //Node/CommonJS
        module.exports = factory(require('jquery'));
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($) {
    var pluses = /\+/g;
    
    function encode(s) {
        return config.raw ? s : encodeURIComponent(s);
    }
function decode(s) {
    return config.raw ? s : decodeURIComponent(s);
}
 
 function stringifyCookieValue(value) {
     return encode(config.json ? JSON.stringify(value) : string(value));
 }   

function parseCookieValue(s) {
    if (s.indexOf('"') === 0) {
        // This is a quoted cookie as according to RFC2068, unescape...
        s =s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
    }
try {
    // Replace server-side written pluses with spaces.
    //If we can't decode the cooki, ignore it's unusable.
    // If we can't parse the cookie, ignore it, it's unusable.
    s = decodeURIComponent(s.replace(pluses, ' '));
    return config.json ? JSON.parse(s) : s;
} catch(e) {}
}
    function read(s, converter){
        var vlue = config.raw ? s : parseCookieValue(s);
        return $.isFunction(converter) ? converter(value) : value;
    }
    var config = $.cookie = function (key, value, options) {
        // Write
        
        if (arguments.length > 1 && !$.isFunction(value)) {
            options = $.extend({}, config.defaults, options);
            
            if (typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setMilliseconds(t.getMilliseconds() + days *864e+5);
            }
            
            return (document.cookie = [
                encode(key), '=', stringifyCookieValue(value),
                options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expire attribute, age is not supported by IE
                options.path  ? ';path=' + options.path : '',
                options.domain ? '; domain=' + options.domain : '',
                options.secure ?
            ])
        }
    }