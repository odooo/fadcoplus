$(".createOrSelect2").select2();

$('.datetimepicker').datetimepicker({
    locale:'fr',
    format:'DD/MM/YYYY HH:mm:s',
    widgetPositioning:{
        horizontal: 'auto',
        vertical: 'bottom'
    }
});

function addNewRapport(e, elem){
    e.preventDefault();
    var url = $(elem).attr('href');
    var popup = $('#new-rapport');

    var block = $('#pleaseWaitDialog');
    block.modal('show');

    $.ajax({
        url : url,
        type : 'GET',
        dataType : 'html',
        success : function(html) {
            block.modal('hide');
            popup.find('.modal-footer').empty();
            popup.find('.modal-body').html(html);
            popup.modal('show');
        },
        error : function(resultat, statut, erreur) {

        }
    });
}

function  addInteraction(e, elem){
    e.preventDefault();
    var url = $(elem).attr('href');
    var popup = $('#new-interaction');

    var block = $('#pleaseWaitDialog');
    block.modal('show');

    $.ajax({
        url : url,
        type : 'GET',
        dataType : 'html',
        success : function(html) {
            block.modal('hide');
            popup.find('.modal-footer').empty();
            popup.find('.modal-body').html(html);
            popup.modal('show');
        },
        error : function(resultat, statut, erreur) {

        }
    });
}

function callBouclerPopup(e, elem){
    e.preventDefault();
    var url = $(elem).attr('href');
    var popup = $('#boucler-dossier-popup');

    var block = $('#pleaseWaitDialog');
    block.modal('show');

    $.ajax({
        url : url,
        type : 'GET',
        dataType : 'html',
        success : function(html) {
            block.modal('hide');
            popup.find('.modal-footer').empty();
            popup.find('.modal-body').html(html);
            popup.modal('show');
        },
        error : function(resultat, statut, erreur) {

        }
    });
}