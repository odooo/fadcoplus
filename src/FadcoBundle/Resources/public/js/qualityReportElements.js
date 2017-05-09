/**
 * Created on 16/11/2016.
 */
!function ($) {

    function addText(parent){
        // utiliser des variables globales


        // Après avoir récupérer son contenu, on le vide
        $('#textTiny').html('');
        $("#formTinyMCEModal").modal('show');

        $('#validerTextTiny').off().on('click', function(e){
            e.preventDefault();
            // récupérer le texte
            var content = $('#textTiny').html();

            var div = "<div class='divTextAppend'>" +
                "<div class='btn-group-justified'>" +
                "<a href='#' class='btn pull-right deleteDivTextAppend'><i class='fa fa-close'></i></a>"+
                "<a href='#' class='btn pull-right editDivTextAppend' style='margin-right: 5px;'><i class='fa fa-edit'></i></a>" +
                "<div class = 'textTinyAppend'>"+content + "</div>"+
                "</div>" +
                "</div>";
            // Récupérer le parent concerné
            parent.append(div);
            $("#formTinyMCEModal").modal('hide');
            $('.deleteDivTextAppend').off().on('click', function(e){
                e.preventDefault();
                $(this).parents('.divTextAppend').remove();
            });
            $('.editDivTextAppend').off().on('click', function(e){
                e.preventDefault();
                // Récupérer le parent concerné
                var aModifier = $(this).parents('.divTextAppend').find('.textTinyAppend').html();
                $('#textTiny').html(aModifier);
                $("#formTinyMCEModal").modal('show');
            });
        });
    }

    var cpt = 0;

    $(function () {
        $('#btn-add-agence').on('click', function () {
            var agences = $('#agence-select').val();

            $('#agence-list-modal').modal('hide');

            if ($('#liste_agence').find('ul').length == 0) {
                $('#liste_agence').append('<ul></ul>');
            }

            $('#liste_agence ul').empty();

            for (var i in agences) {
                $('#liste_agence ul').append('<li>' + agences[i] + '</li>');
            }
        });

        $('.elem').on('click', function (e) {

            var elem = $(this);

            var block_parent = elem.parents('.block');

            var action = elem.data('action');

            if (action == 'text') {
                addText(block_parent);
            }
            else if (action == 'image') {
                cpt = cpt + 1;
                var img_wrapper = $('<div class="img_wrapper' + cpt + '">' + '</div>');

                var file_wrapper = $('<div class="file_wrapper"><input type="file" id="imgInp' + cpt + '" class="hidden" name="pictureFile' + cpt + '"/>' + '</div>');

                block_parent.append(file_wrapper);

                block_parent.append(img_wrapper);

                $("#imgInp" + cpt).trigger('click');

                $("#imgInp" + cpt).change(function () {

                    var $file = $(this);

                    var myFormData = new FormData();
                    myFormData.append('pictureFile' + cpt, this.files[0]);

                    $.ajax({

                        url: $('#img_url').data('url') + '?nb=' + cpt + '&id=' + $('#img_url').data('id'),
                        type: 'POST',
                        processData: false, // obligatoire pour de l'upload
                        contentType: false, // obligatoire pour de l'upload
                        dataType: 'json',
                        data: myFormData,

                        success: function (data) {
                            console.log(data.filename);
                            console.log(img_wrapper.find('img'));
                            readURL($file, elem, img_wrapper, data.filename);
                            img_wrapper.find('img').attr('src', "data:image/png;base64,"+data.filename);
                        }
                    });
                });
            }
            else if (action == 'tableau') {
                ajouterTableau($(this).closest('.block'));
            }
        });
    });

    function ajouterTableau($block) {
        var $container = $('<div class="table-container"></div>');

        var $table = $('<table class="table-auto" style="width: 100%; border: 1px solid black; border-collapse: collapse;"></table>');
        $table.append('<tr><th>Entete</th><th>Entete</th></tr><tr><td>Cellule</td><td>Cellule</td></tr>');

        $table.find('tr, td, th').css({
            'border': '1px solid black',
        });

        $table.find('td, th').css('padding', '5px');

        tablelize($container, $table);

        $block.append($container);
    }

}(jQuery);


var removeButton = ".remove_field";

//

function readURL($input, $elem, $wrapper, filename) {

    if ($($input).get(0) && $($input).get(0).files[0]) {

        var reader = new FileReader();

        reader.onload = function (e) {

            var $img_element = createInputFileElement(e.target.result);

            $($wrapper).append($img_element); //ajouter l'élémént

            $($wrapper).on("click", removeButton, function (e) {//L'utilisateur clique sur la croix pour supprimer l'élément ajouté
                e.preventDefault();
                $(this).parents('.part').remove();
            });
        }

        reader.readAsDataURL($($input).get(0).files[0]);
    }
}

function createInputFileElement(src) {
    var $img_element = '<div class="row part">' + '<div class="col-sm-12">' + '<div style="text-align: center"><img  src="' + src + '" /></div>' + '<a class="btn pull-right remove_field" style="height: 34px;">' +
        '<i class="fa fa-remove"></i>' + '</a>' + '</div>' + '</div>';

    return $img_element;
}

function addAgence(event) {
    $('#agence-list-modal').modal('show');
}

function tablelize($container, $table) {
    var menu = `
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                <span class="fa fa-bars"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#" class="add-line">Ajouter une ligne</a></li>
                <li><a href="#" class="add-column">Ajouter une colonne</a></li>
                <li><a href="#" class="un-full-width">Largeur du contenu</a></li>
                <li><a href="#" class="full-width">Largeur totale</a></li>
                <li><a href="#" class="remove">Supprimer le tableau</a></li>
            </ul>
        </div>
    `;

    if ($container.find('.dropdown').length == 0) {
        $container.prepend(menu);
    }


    $table.find('td, th').on('click', editSpecialSpan);

    $container.append($table);

    $container.find('.add-line').on('click', function (event) {
        event.preventDefault();

        var $tr = $('<tr></tr>');
        $tr.css('border', '1px solid black');

        for (var i = 0; i < $table.find('tr').eq(0).find('th').length; i++) {
            var $td = $('<td>Cellule</td>');
            $td.css('border', '1px solid black').css('padding', '5px');
            $td.on('click', editSpecialSpan);
            $tr.append($td);
        }

        $table.append($tr);
    })

    $container.find('.add-column').on('click', function (event) {
        event.preventDefault();

        $table.find('tr').each(function (index) {
            var $td;
            if (index == 0) {
                $td = $('<th>Entete</th>');
            } else {
                $td = $('<td>Cellule</td>');
            }

            $td.css('border', '1px solid black').css('padding', '5px');
            $td.on('click', editSpecialSpan);

            $(this).append($td);
        })
    })

    $container.find('.full-width').on('click', function (event) {
        event.preventDefault();
        $table.width('100%');
    })

    $container.find('.un-full-width').on('click', function (event) {
        event.preventDefault();
        $table.width('auto');
    })

    $container.find('.remove').on('click', function (event) {
        event.preventDefault();
        $container.remove();
    })
}
