/**
 * Created by Ignace AZONHOUMON on 22/11/2016.
 */
$('.getAuth').on('click', function (e) {
    e.preventDefault();
    var route = $(this).data('route');
    var url = $(this).attr('href');

    // Récupérer l'url qui vérifie si la session existe
    var urlSessionStrorage = $('#urlSessionStrorage').val();

    if(route == 'box_mails_index'){

        // Envoyer une requête par Ajax pour voir si
        // les variables de session (email et mot de passe) existent
        $.ajax({
            url: urlSessionStrorage,
            method: 'GET',
            success: function (code ) {
                if(!code.status){
                    // Afficher la page d'authentification
                    $('#authModal').modal('show');
                }else{
                    // Faire la redirection vers la liste des mails
                    window.location.href = $('#urlBoxList').val();
                }
            }
        });


    }else{
        if($(this).attr('target') === '_blank'){
            var win = window.open(url, '_blank');
            win.focus();
        }else{
            window.location.href = url;
        }
    }
});

var $form_auth = $('#box_mails_auth').submit(function(e){
    e.preventDefault();
    $('#box_mails_auth .btn').button('loading');
    $.ajax({
        type: $form_auth.attr('method'),
        url: $form_auth.attr('action'),
        data: $form_auth.serialize(),
        success: function (data) {
            if(data.status == "success"){
                // Rediriger vers la liste des mails
                window.location.href = $('#urlBoxList').val();
            }else if(data.status == "danger"){
                // Afficher le message d'erreur
                var msg = '<div class="alert alert-' +
                    data.status +
                    '">' +
                    '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
                    '<strong>' +
                     data.status.toUpperCase() +
                    '! </strong> ' +
                     data.message +
                    '.</div>';

                // Mettre le msg dans la balise approprié
                $('#box-error').append(msg);

                // Enlever les boutons de l'état looding
                $('#box_mails_auth .btn').button('reset');
            }
        },
        error : function(jqXHR, textStatus, errorThrown){
            var msg = '<div class="alert alert-danger">' +
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
                '<strong>DANGER ! </strong> Impossible de se connecter. Veillez vérifiez vos paramètres de connexion et s\'assurez-vous que vous avez accès à internet.</div>';

            // Mettre le msg dans la balise approprié
            $('#box-error').append(msg);

            // Enlever les boutons de l'état looding
            $('#box_mails_auth .btn').button('reset');

            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        }
    });
});
