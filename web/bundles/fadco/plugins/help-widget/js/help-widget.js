!(function($) {    
    var $icon = $('#help-widget-icon');
    var $helpText = $('#help-text');
    var $widget = $('#help-widget-content');    

    $icon
        .on('click', function() {
            $helpText.fadeOut();

            if ($widget.is(':visible')) {
                $widget.fadeOut();
            } else {
                $widget.fadeIn();
            }
        })
        .on('mouseenter', function() {
            if (!$widget.is(':visible')) {
                $helpText.fadeIn();
            }            
        })
        .on('mouseleave', function() {
            $helpText.fadeOut();
        });
})(window.jQuery);