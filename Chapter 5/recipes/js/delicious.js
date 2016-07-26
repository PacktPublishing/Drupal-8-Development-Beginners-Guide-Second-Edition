/**
 * @file
 *  A delicious notification alert
 */
var delicious = (function ( ) {
    /**
     * Pubic object.
     * @type {{}}
     */
    var self = {};

    /**
     * The delicious recipe content.
     *
     * @type {jQuery}
     */
    var $deliciousContent = jQuery('.delicious-content');

    /**
     * Bind the recipe content click event.
     */
    var bindRecipeContentEvent = function () {
        $deliciousContent.on('click', function () {
            deliciousAlert();
        });
    };

    /**
     * Alert the user that this is delicious.
     */
    var deliciousAlert = function () {
        window.alert(Drupal.t("This is delicious!"));
    };

    /**
     * Page load event.
     */
    self.onPageLoad = function () {
        bindRecipeContentEvent();
    };

    return self;
})();

jQuery(delicious.onPageLoad);