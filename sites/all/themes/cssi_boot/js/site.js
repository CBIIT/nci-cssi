// jQuery for site.
jQuery(document).ready(function ($) {

// Linkify links
//    $('.view-content').each(function(){
//        // Get the content
//        var str = $(this).html();
//        // Set the regex string
//        var regex = /(https?:\/\/([-\w\.]+)+(:\d+)?(\/([\w\/_\.]*(\?\S+)?)?)?)/ig
//        // Replace plain text links by hyperlinks
//        var replaced_text = str.replace(regex, "<a href='$1' target='_blank'>$1</a>");
//        // Echo link
//        $(this).html(replaced_text);
//    });

$('.menu .dropdown-toggle, .sidr .sidr-class-dropdown-toggle').removeAttr('data-toggle');
$('.menu .dropdown-toggle, .sidr .sidr-class-dropdown-toggle').removeAttr('data-hover');
$('.menu .dropdown-toggle, .sidr .sidr-class-dropdown-toggle').removeAttr('data-target');

});


// added browser functionality to replace depreciated version in jQuery
var matched, browser;

jQuery.uaMatch = function( ua ) {
    ua = ua.toLowerCase();

    var match = /(chrome)[ \/]([\w.]+)/.exec( ua ) ||
        /(webkit)[ \/]([\w.]+)/.exec( ua ) ||
        /(opera)(?:.*version|)[ \/]([\w.]+)/.exec( ua ) ||
        /(msie) ([\w.]+)/.exec( ua ) ||
        ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec( ua ) ||
        [];

    return {
        browser: match[ 1 ] || "",
        version: match[ 2 ] || "0"
    };
};

matched = jQuery.uaMatch( navigator.userAgent );
browser = {};

if ( matched.browser ) {
    browser[ matched.browser ] = true;
    browser.version = matched.version;
}

// Chrome is Webkit, but Webkit is also Safari.
if ( browser.chrome ) {
    browser.webkit = true;
} else if ( browser.webkit ) {
    browser.safari = true;
}

jQuery.browser = browser;
