jQuery(document).ready(function ($) {

    $(".headroom").headroom({
        "tolerance": 20,
        "offset": 50,
        "classes": {
            "initial": "animated",
            "pinned": "slideDown",
            "unpinned": "slideUp"
        }
    });

});

/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
if (typeof dosamigos == "undefined" || !dosamigos) {
    var dosamigos = {};
}
dosamigos.gallery = (function ($) {
    var pub = {
        registerLightBoxHandlers: function (selector, options) {
            $(document).off('click.gallery', selector).on('click.gallery', selector, function () {
                var parent1 = $(this).parent();
                var div = parent1.find('div.col-md-3.col-sm-4.col-xs-6');
                var links = div.find('a.gallery-item');
                var options = options || {};
                options.index = $(this)[0];
                blueimp.Gallery(links, options);
                return false;
            });
        }
    };
    return pub;
})(jQuery);