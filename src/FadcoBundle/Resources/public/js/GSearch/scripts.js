var $globalSearchForm = $('#gsp_global_search').submit(function (e) {
    e.preventDefault();

    // Block Screen
    var $block = $('#pleaseWaitDialog');
    $block.modal('show');
    // Submit by ajax
    $
        .ajax({
            type: $globalSearchForm.attr('method'),
            url: $globalSearchForm.attr('action'),
            data: $globalSearchForm.serialize()
        })
        .done(function (data) {
            $block.modal('hide');
            //console.log(data);

            // Inject Data in DOM
            if (data) {
                $('#results-bien').empty().html(data);
            }
        })
        .fail(function (error) {
            console.log(error.responseText);
        })
    ;
});

var $globalSearchClientForm = $('#gsp_global_search_client').submit(function (e) {
    e.preventDefault();

    // Block Screen
    var $block = $('#pleaseWaitDialog');
    $block.modal('show');
    // Submit by ajax
    $
        .ajax({
            type: $globalSearchClientForm.attr('method'),
            url: $globalSearchClientForm.attr('action'),
            data: $globalSearchClientForm.serialize()
        })
        .done(function (data) {
            $block.modal('hide');
            //console.log(data);

            // Inject Data in DOM
            if (data) {
                $('#results-client').empty().html(data);
            }
        })
        .fail(function (error) {
            console.log(error.responseText);
        })
    ;
});

function getViewInPopup(e, $elem) {
    e.preventDefault();

    // Récupérer le lien
    var $url = $($elem).prop('href');

    // faire une requête ajax
    // Block Screen
    var $block = $('#pleaseWaitDialog');
    $block.modal('show');
    $
        .ajax({
            type: "GET",
            url: $url
        })
        .done(function (data) {
            $block.modal('hide');
            // Inject Data in Popup
            if (data) {
                $('#contentBox').empty().html(data);
                $('#modalBox').modal('show');
            }
        })
        .fail(function (error) {
            console.log(error.responseText);
        })
    ;
}

function getPhotosAndDetails(e, $elem) {
    e.preventDefault();

    $('#detail-bien .modal-body').html($('#load').html());
    $('#detail-bien').modal('show');
    $.ajax({
        url: $($elem).attr('href'),
        type: 'GET',
        dataType: 'html',
        success: function (code_html, status) {
            $('#detail-bien .modal-body').html(code_html);
            $('#myCarousel').carousel();
        },
        error: function (resultat, statut, erreur) {
            $('#detail-bien .modal-body').html('Erreur de chargement : ' + statut);
        }
    });
}

var $validateForm = $("#gsp_global_search_proprio").submit(function (e) {
    e.preventDefault();

    //$('#waitModal').modal('show');

    var url = $(this).attr('action');
    var data = $(this).serialize();
    var method = $(this).attr('method');

    $.ajax({
        type: method,
        url: url,
        dataType: 'json',
        data: data,
        success: function (data) {
            // console.log(data.template);
            if(data.template)
            {
                $('#results-panel').html(data.template);
            }
        },
        error: function (html) {
            alert('Script error!!!!!');
        }
    });
});

var $validateForm = $("#gsp_global_search_presta").submit(function (e) {
    // e.preventDefault();

    var url = $(this).attr('action');
    var data = $(this).serialize();
    var method = $(this).attr('method');

    alert(data)

    // $.ajax({
    //     type: method,
    //     url: url,
    //     dataType: 'json',
    //     data: data,
    //     success: function (data) {
    //         // console.log(data.template);
    //         if(data.template)
    //         {
    //             $('#results-panel').html(data.template);
    //         }
    //     },
    //     error: function (html) {
    //         alert('Script error!!!!!');
    //     }
    // });
});


$(function(){
    $('.date').datetimepicker({
        locale: 'fr',
        format: 'DD-MM-YYYY HH:mm:ss',
        widgetPositioning: {
            horizontal: 'auto',
            vertical: 'bottom'
        },
        icons: {
            time: 'fa fa-clock-o',
            date: 'fa fa-calendar',
            up: 'fa fa-chevron-up',
            down: 'fa fa-chevron-down',
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash-o',
            close: 'fa fa-close'
        }
    });
})