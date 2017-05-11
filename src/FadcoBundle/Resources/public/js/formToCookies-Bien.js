/*
 * Save Form To Cookie
 * (cc) Paul Philippov, themactep@gmail.com
 *
 * This is rather a proof of concept than a production-ready solution.
 * It does not handle radio buttons and such.
 * You might want to extend it to suit your needs.
 *
 * Usage:
 *
 * $(function(){
 *  var myForm = $('#formid');
 *  loadFormFromCookie(myForm);
 *  myForm.submit(function() {
 *    saveFormToCookie(this);
 *  });
 * });
 */
(function ($) {
    $.fn.serializeJSON = function () {
        var json = {};
        jQuery.map($(this).serializeArray(), function (n, _) {
            json[n['name']] = n['value'];
        });
        return json;
    };
})(jQuery);

ensureNumber = function (n) {
    n = parseInt(n, 10);
    if (isNaN(n) || n <= 0) {
        n = 0;
    }
    return n;
};

saveFormToCookie = function (form) {
    console.log('Ceci est un test');
    var name = $(form).attr('id');
    var data = JSON.stringify($(form).serializeJSON());

    // Date d'expiration défini 1 jour
    //$.cookie(name, data, {expires: 1});
    sessionStorage.setItem(name, JSON.stringify(data));
};

loadFormFromCookie = function (form) {
    var name = $(form).attr('id');
    var data = $.cookie(name);

    if (typeof data === 'undefined') {
        return;
    }

    JSON.parse(data, function (key, value) {
        if (typeof (value) !== 'object') {
            var el = $(form).find('*[name="' + key + '"]');

            if (el.is('input')) {
                if (false) {
                    // code formatting stub
                } else if (el.attr('type') === 'number') {
                    el.val(ensureNumber(value));
                } else if (el.attr('type') === 'checkbox') {
                    el.attr('checked', value === 'on' ? true : false);
                } else {
                    el.val(value);
                }
            } else if (el.is('select')) {
                el.val(value);
            } else if (el.is('textarea')) {
                el.val(value);
            }
        }
    });
};