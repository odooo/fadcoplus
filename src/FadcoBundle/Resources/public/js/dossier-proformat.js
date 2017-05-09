/**
 * Created by Ignace AZONHOUMON on 16/08/2016.
 */
!function($) {

    $(function() {
        $('.list-add-btn').prepend($('<i class="fa fa-plus">&nbsp;</i>')).addClass('btn btn-primary btn-xs').css('margin-bottom', '5px');
        //$('.list-add-btn, .btn-group .btn-group-actions').css('display', 'block');
        showAddBtns();
        showTableBtns();
        showSelectElement();

        // Add by @vid 08/03/2017
        generateSpecialSelectElement();

        $('.btn-group').show();

        $('.special-span').on("click", editSpecialSpan);
        $('.big-editable').on('click', bigEditable)

        $('#btn-edit-all').on('click', function(e) {
            e.preventDefault()
            $('.list-add-btn').css('display', 'inline')  
        })

        $('.add-report').on('click', function(e) {
            e.preventDefault()

            var preVerification = $(this).data('preverification');

            if (preVerification == 1) {
                $('#add-rapport-verification').find('#preverification').val(1);
            }

            $('#add-rapport-verification').modal('show')
        })    

        $('#btn-add-report').on('click', function(e) {
            var $form = $(this).closest('.modal-content').find('form');
            
            if ($form.find('#piece').val() == '') {
                e.preventDefault();
                alert('Vous devez joindre le pi�ce justificative !');
                return;
            }

            $form.submit()
        })

        $('.show-details-proformat').on('click', function(e) {        
            e.preventDefault()
            showDetailsProformat($(this).attr('href'))
        })

        $('.reports-list').on('click', function(e) {
            e.preventDefault()
            loadReportsList($(this).attr('href'))
        })   

        $('.select-report').on('click', function (e) {
            e.preventDefault();
            loadReportsListForm($(this).attr('href'))
        })

        $('#btn-do-select-reports').on('click', function() {
            $(this).closest('.modal-content').find('form').submit();
        })

        /****
         *  Gestion du choix des cas pour  Analyse portant sur l'entièreté du dossier
         */
        var $analyseDossierDiv = $('#analyse_dossier');
        if($analyseDossierDiv.length > 0){
            $analyseDossierDiv.find('.list-add-btn').on('click', function() {

                // Show modal
                var $modalChoice = $('#caseChoicePopup');
                $modalChoice.modal('show');

                // Détecter le click sur le bouton de choix

                $('#choiceDone').on('click', function(e){
                    e.preventDefault();
                    // Get choice value
                    var $choice = $('#case').val();
                    var $block ="";
                    if($choice == "cas1"){
                        // cas 1
                        // $block = $('<div> <span style="font-weight: bold; text-decoration: underline;">Cas 1 : Confirmé</span>  ' +
                        //     '« Au vu de tout ce qui précède, des pièces à conviction que ce dossier ' +
                        //     'comporte et après les avoir croisé avec les différentes informations reçues, ' +
                        //     'nous pouvons présumer que le bien ne souffre d’aucun différend et que le ' +
                        //     'présumé propriétaire peut valablement céder le bien. Néanmoins que les ' +
                        //     'recommandations ci-après soient nécessairement prises en compte » ' +
                        //     '</div>')
                        $block = $('<div>' +
                            '« Au vu de tout ce qui précède, des pièces à conviction que ce dossier ' +
                            'comporte et après les avoir croisé avec les différentes informations reçues, ' +
                            'nous pouvons présumer que le bien ne souffre d’aucun différend et que le ' +
                            'présumé propriétaire peut valablement céder le bien. Néanmoins que les ' +
                            'recommandations ci-après soient nécessairement prises en compte » ' +
                            '</div>')
                    }else{
                        // cas 2
                        // $block = $('<div><span style="font-weight: bold;text-decoration: underline;">Cas 1 : Non Confirmé</span> ' +
                        //     '« Au vu de tout ce qui précède, des pièces à conviction que ce dossier ' +
                        //     'comporte et après les avoir croisé avec les différentes informations reçues, ' +
                        //     'nous estimons que ce bien n’est pas suffisamment sécurisé pour ' +
                        //     'l’acquisition d’une pleine propriété légale à jouissance paisible. ' +
                        //     'Néanmoins que les recommandations ci-après soient nécessairement ' +
                        //     'prises en compte » ' +
                        //     '</div>');
                        $block = $('<div>' +
                            '« Au vu de tout ce qui précède, des pièces à conviction que ce dossier ' +
                            'comporte et après les avoir croisé avec les différentes informations reçues, ' +
                            'nous estimons que ce bien n’est pas suffisamment sécurisé pour ' +
                            'l’acquisition d’une pleine propriété légale à jouissance paisible. ' +
                            'Néanmoins que les recommandations ci-après soient nécessairement ' +
                            'prises en compte » ' +
                            '</div>');
                    }

                    $analyseDossierDiv.find('.content').html($block)
                })
            })
        }


        /***
         *  Gestion des cas de recommandations
         */

        var $recommandationCasDiv = $('#recommandation_cas');
        if($recommandationCasDiv.length > 0){
            $recommandationCasDiv.find('.list-add-btn').on('click', function() {

                // Show modal
                var $modalChoice = $('#caseChoicePopup');
                $modalChoice.modal('show');

                // Détecter le click sur le bouton de choix

                $('#choiceDone').on('click', function(e){
                    e.preventDefault();
                    // Get choice value
                    var $choice = $('#case').val();
                    var $block ="";
                    if($choice == "cas1"){
                        // cas 1
                        // $block = $('<div> <span style="font-weight: bold;text-decoration: underline;">Cas 1 : Confirmé</span>  ' +
                        //     '« Nous, Global Service Plus recommandons dans le cadre d’une éventuelle ' +
                        //     'transaction devant porter sur ce bien, que les formalités suivantes soient ' +
                        //     'faites immédiatement après l’achat ». Il s’agit :<br/>' +
                        //     '<ul>' +
                        //     '<li>Acte de vente notarié</li>' +
                        //     '<li>Certificat de propriété foncière</li>' +
                        //     '<li>Mutation de nom</li>' +
                        //     '<li>Certification de vente affirmée par le maire</li>' +
                        //     '<li>Attestation de recasement</li>' +
                        //     '</ul>' +
                        //     '</div>')
                        $block = $('<div>' +
                            '« Nous, Global Service Plus recommandons dans le cadre d’une éventuelle ' +
                            'transaction devant porter sur ce bien, que les formalités suivantes soient ' +
                            'faites immédiatement après l’achat ». Il s’agit :<br/>' +
                            '<ul>' +
                            '<li>Acte de vente notarié</li>' +
                            '<li>Certificat de propriété foncière</li>' +
                            '<li>Mutation de nom</li>' +
                            '<li>Certification de vente affirmée par le maire</li>' +
                            '<li>Attestation de recasement</li>' +
                            '</ul>' +
                            '</div>')
                    }else{
                        // cas 2
                        // $block = $('<div><span style="font-weight: bold;text-decoration: underline;">Cas 1 : Non Confirmé</span> ' +
                        //     '« Nous, Global Service Plus recommandons que les démarches ou ' +
                        //     'formalités ci-après soient accomplies dans le présent de contexte » :<br/>' +
                        //     '<select class="special-select"> ' +
                        //     '<option value="">- Nouvelles vérifications en cas d’intérêt tenace pour le présent bien</option> ' +
                        //     '<option value="">- Recherche d’un nouveau bien et sollicitation des vérifications</option> ' +
                        //     '</select>'+
                        //     '</div>');
                        $block = $('<div>' +
                            '« Nous, Global Service Plus recommandons que les démarches ou ' +
                            'formalités ci-après soient accomplies dans le présent de contexte » :<br/>' +
                            '<select class="special-select"> ' +
                            '<option value="">- Nouvelles vérifications en cas d’intérêt tenace pour le présent bien</option> ' +
                            '<option value="">- Recherche d’un nouveau bien et sollicitation des vérifications</option> ' +
                            '</select>'+
                            '</div>');
                    }

                    $recommandationCasDiv.find('.content').html($block)
                })
            })
        }
        /****
         * Gestion des cas pour la conclusion
         */
        var $conclusionCasDiv = $('#conclusion_cas');
        if($conclusionCasDiv.length > 0) {
            $conclusionCasDiv.find('.list-add-btn').on('click', function () {

                // Show modal
                var $modalChoice = $('#caseChoicePopup');
                $modalChoice.modal('show');

                // Détecter le click sur le bouton de choix

                $('#choiceDone').on('click', function (e) {
                    e.preventDefault();
                    // Get choice value
                    var $choice = $('#case').val();
                    var $block = "";
                    if ($choice == "cas1") {
                        // cas 1
                        // $block = $('<div> <span style="font-weight: bold;text-decoration: underline;">Cas 1 : Confirmé</span>  ' +
                        //     '« En égard à tout ce qui précède, dans la limite des ' +
                        //     'informations à notre disposition à ce jour et sous réserve ' +
                        //     'de la sincérité et de la fiabilité des informations par les ' +
                        //     'différentes sources, Global Service Plus Immobilier estime que ' +
                        //     'l’acquisition que ce bien pourrait être envisagé sans risque apparent ' +
                        //     'ou majeur. Toutefois, nous recommandons vivement à L’accomplissement ' +
                        //     'des formalités ci-dessus indiquées. » ' +
                        //     '</div>')
                        $block = $('<div>' +
                            '« En égard à tout ce qui précède, dans la limite des ' +
                            'informations à notre disposition à ce jour et sous réserve ' +
                            'de la sincérité et de la fiabilité des informations par les ' +
                            'différentes sources, Global Service Plus Immobilier estime que ' +
                            'l’acquisition que ce bien pourrait être envisagé sans risque apparent ' +
                            'ou majeur. Toutefois, nous recommandons vivement à L’accomplissement ' +
                            'des formalités ci-dessus indiquées. » ' +
                            '</div>')
                    } else {
                        // cas 2
                        // $block = $('<div><span style="font-weight: bold;text-decoration: underline;">Cas 1 : Non Confirmé</span> ' +
                        //     '« En égard à tout ce qui précède, dans la limite des informations à ' +
                        //     'notre disposition à ce jour et sous réserve de la sincérité et de la ' +
                        //     'fiabilité des informations par les différentes sources, Global ' +
                        //     'Service Plus Immobilier ne recommande nullement à son client ' +
                        //     'l’acquisition de ce bien. Elle préconise que le choix soit porté sur ' +
                        //     'd’autres biens qui pourraient faire aussi l’objet de vérifications. ' +
                        //     'Toutefois, en cas d’intérêt tenace pour le présent bien d’autres ' +
                        //     'solutions juridiques relatives peuvent être envisagées. »' +
                        //     '</div>');
                        $block = $('<div>' +
                            '« En égard à tout ce qui précède, dans la limite des informations à ' +
                            'notre disposition à ce jour et sous réserve de la sincérité et de la ' +
                            'fiabilité des informations par les différentes sources, Global ' +
                            'Service Plus Immobilier ne recommande nullement à son client ' +
                            'l’acquisition de ce bien. Elle préconise que le choix soit porté sur ' +
                            'd’autres biens qui pourraient faire aussi l’objet de vérifications. ' +
                            'Toutefois, en cas d’intérêt tenace pour le présent bien d’autres ' +
                            'solutions juridiques relatives peuvent être envisagées. »' +
                            '</div>');
                    }

                    $conclusionCasDiv.find('.content').html($block)
                })
            })
        }

        /**
         *  Gestion des piece à convictions.
         */
        var $listPieceConvictionDiv = $('#liste_piece_conviction');    

        if ($listPieceConvictionDiv.length > 0) {

            var $listPieceConvictionUl = $('<ul></ul>')
            $listPieceConvictionDiv.append($listPieceConvictionUl)

            $listPieceConvictionDiv.find('.list-add-btn').on('click', function() {
                
                var $newPiece = $('<li><span class="special-span">Entrez la piece</span></li>')
                $newPiece.find('.special-span').bind('click', editSpecialSpan)
                $listPieceConvictionUl.append($newPiece)
            })
        }

        /**
         *  Gestion des recommandations.
         */
        var $listRecommandationDiv = $('#liste_recommandation');    

        if ($listRecommandationDiv.length > 0) {

            var $listRecommandationUl = $('<ul></ul>')
            $listRecommandationDiv.append($listRecommandationUl)

            $listRecommandationDiv.find('.list-add-btn').on('click', function() {
                
                var $newRecommandation = $('<li><span class="special-span">Entrez la piece</span></li>')
                $newRecommandation.find('.special-span').bind('click', editSpecialSpan)
                $listRecommandationUl.append($newRecommandation)
            })
        }

        /**
         * Ges des structure, v�rification aupres des autorites 
         */
        var $listStructureDiv = $('#verification_autorites');

        if ($listStructureDiv.length > 0) {

            var $listStructureUl = $('<ul></ul>')
            var $formModal = $('#ajouter-verification-autorite-modal')

            $listStructureDiv.append($listStructureUl)

            $listStructureDiv.find('.list-add-btn').on('click', function() {                    
                $formModal.modal('show')            
            })

            $('#btn-ajouter-verification-autorite').on('click', function() {
                $formModal.modal('hide')
            
                var nomStructure = $('#nom_structure').val()
                var resultats = $('#resultats').val()

                $('#nom_structure').val('')
                $('#resultats').val('')
                $listStructureUl.append($('<li><div class="verification-autorite"><span class="remove">x</span><strong>'+ nomStructure +'</strong><p><span style="text-decoration: underline;">R&eacute;sultats obtenus:</span><br>'+ resultats +'</p></div></li>'))
            })
        }
    })

    var proformatDetailsLoaded = false,
        reportsListLoaded = false,
        $proformatDetailsModal = $('#details-proformat-modal'),
        $reportsListModal = $('#reports-list-modal'),
        $selectReportsModal = $('#select-reports-modal'),
        $detailsRapportModal = $('#details-rapport-modal')

    function showDetailsProformat(url)
    {
        $proformatDetailsModal.modal('show')

        if (!proformatDetailsLoaded) {

            $.ajax({
                url: url,
                type: 'GET',
                success: function(html) {                    
                    $proformatDetailsModal.find('.modal-body').html(html)
                    proformatDetailsLoaded = true
                },
                error: function(response) {
                    $proformatDetailsModal.modal('hide')
                    console.log(response.responseText)
                }
            })
        }
    }

    function loadReportsList(url)
    {
        $reportsListModal.modal('show')

        if (!reportsListLoaded) {

            $.ajax({
                url: url,
                type: 'GET',
                success: function(html) {                    
                    $reportsListModal.find('.modal-body').html(html)
                    $reportsListModal.find('.details-rapport').on('click', function(e) {
                        e.preventDefault()
                        loadDetailsRapport($(this).attr('href'))
                    })

                    reportsListLoaded = true
                },
                error: function(response) {
                    $reportsListModal.modal('hide')
                    console.log(response.responseText)
                }
            })
        }
    }

    function loadReportsListForm(url)
    {
        $selectReportsModal.modal('show')

        $.ajax({
            url: url,
            type: 'GET',
            success: function(html) {                    
                $selectReportsModal.find('.modal-body').html(html)
                $selectReportsModal.find('.details-rapport').on('click', function(e) {
                    e.preventDefault()
                    loadDetailsRapport($(this).attr('href'))
                })
            },
            error: function(response) {
                $selectReportsModal.modal('hide')
                console.log(response.responseText)
            }
        })
    }

    function loadDetailsRapport(url) {

        $detailsRapportModal.find('.modal-body').html('<div class="text-center"><span class="fa fa-spinner fa-spin fa-2x"></span></div>')
        $detailsRapportModal.modal('show')
        

        $.ajax({
            url: url,
            type: 'GET',
            success: function(html) {
                $detailsRapportModal.find('.modal-body').html(html)
            },
            error: function(response) {
                $detailsRapportModal.hide()
                console.log(response.responseText)
            }
        })
    }

}(jQuery);

function editSpecialSpan(e) {

   if($(this).attr('class') == "special-span")
   {
       //e.preventDefault();
       e.stopPropagation();
       // r�cup�rer son contenu
       var $span_text = $(this).text();
       // Mettre cet texte dans un input et �craser son contenu
       var $new_val = $("<input type= 'text' class='special-input'/>").val($span_text);

       $(this).html($new_val);
       var $parent = $(this);

       $new_val.on("blur", function () {
           //e.preventDefault();
           e.stopPropagation();
           // r�cup�rer son contenu
           var $input_text = $(this).val();
           if ($input_text.trim() == "") {
               //$input_text = "ATTENTION!!!";
               $input_text = $span_text;
           }
           $($parent).html($input_text);
       }).on("click", function (e) {
           //e.preventDefault();
           e.stopPropagation();
       }).on('keyup', function(e) {
           if (e.keyCode == 13) {
               $(this).blur()
           }
       });

       $new_val.focus();
   }
}

// Add by @vid 08/03/2017
function generateSpecialSelectElement(event){
    $('.special-select').each(function(index){
        $(this).closest('span').removeClass('special-span').addClass("injectBlock")
            .append('<div class="injectContent"></div>');
    });
}

function injectBlock(e, elem){
    e.preventDefault();

    // faire du Adjax pour récupérer le contenu à injecter
    var choice = $(elem).val();
    var content = "";
    switch (choice) {
        case "non_lotie_non_recase":
           content =  $('<div><span style="font-weight: bold;">Parcelle ou domaine non lotie(e) et non morcelé(e)</span> ' +
               '<ul style="font-weight: normal;"> <li>Commune : <span class="special-span">La commune</span></li> ' +
        '<li>Arrondissement : <span class="special-span">Arrondissement</span></li> ' +
        '<li>Village ou quartier : <span class="special-span">Village</span></li> ' +
        '<li>Superficie confirmée : <span class="special-span">Superficie</span></li> ' +
        '<li>Autes précisions : <span class="special-span">Autres</span></li> ' +
        '</ul></div>');
            break;
        case "lotie":
            content =  $('<div><span style="font-weight: bold;">Parcelle lotie </span>' +
                '<ul style="font-weight: normal;"> <li>Commune : <span class="special-span">La commune</span></li> ' +
                '<li>Arrondissement : <span class="special-span">Arrondissement</span></li>' +
                '<li>Village ou quartier : <span class="special-span">Village</span></li>' +
                '<li>Superficie confinée à l\'état des lieux : <span class="special-span">Superficie</span></li>'+
        '<li>Numéro d\'état des lieux : <span class="special-span">Numéro</span></li>' +
        '<li>Nom de la zone de lotissement : <span class="special-span">Nom zone loti</span></li> ' +
                '<li>Autes précisions : <span class="special-span">Autres</span></li> ' +
                '</ul></div>');
            break;
        case "lotie_recase":
            content = $('<div><span style="font-weight: bold;">Parcelle lotie et recasée </span>' +
                '<ul style="font-weight: normal;"> <li>Commune : <span class="special-span">La commune</span></li> ' +
                '<li>Arrondissement : <span class="special-span">Arrondissement</span></li> ' +
                '<li>Village ou quartier : <span class="special-span">Village</span></li> ' +
                '<li>Superficie confinée: <span class="special-span">Superficie</span></li> ' +
                '<li>Numéro d\'état des lieux : <span class="special-span">Numéro</span></li> ' +
                '<li>Numéro de la zone de lotissement : <span class="special-span">Numéro zone loti</span></li> ' +
                '<li>Lot : <span class="special-span">lot</span></li> ' +
                '<li>Lettre : <span class="special-span">lettre</span></li> ' +
                '<li>Autes précisions : <span class="special-span">Autres</span></li> ' +
                '</ul></div>')
            break;
        case "morcelle":
            content = $('<div><span style="font-weight: bold;"Parcelle ou domaine issu(e) du morcellement de Titre foncier</span><ul> ' +
                '<li style="font-weight: normal;">Commune : <span class="special-span">La commune</span></li> ' +
                '<li>Arrondissement : <span class="special-span">Arrondissement</span></li> ' +
                '<li>Village ou quartier : <span class="special-span">Village</span></li> ' +
                '<li>Superficie morcelée confinée: <span class="special-span">Superficie</span></li> ' +
                '<li>Numéro de la parcelle dans le morcellement : <span class="special-span">Numéro de la parcelle</span></li> ' +
                '<li>Autes précisions : <span class="special-span">Autres</span></li> ' +
                '</ul></div>');
            break;

        case "achat":
            content = $('<p>Achat : auprès de <span class="special-span">....................</span>  /Document de preuve: <span class="special-span">..........................</span></p>');
            break;
        case "don":
            content = $('<p>Don : de <span class="special-span">....................</span>  /Document de preuve: <span class="special-span">..........................</span></p>');
            break;
        case "heritage":
            content = $('<p>Héritage : de <span class="special-span">....................</span>  /Document de preuve: <span class="special-span">..........................</span></p>');
            break;
        case "Achat" :
        case "Service juridique" :
            // Cas particulier de finalite (Remplacer le select par le text choisi
            var $input_text = $.trim($(elem).val());
            var  $parentUL = $(elem).closest('ul');
            var  $parentLI = $(elem).closest('li').remove();
            $parentUL.append("<li>Finalité : " + $input_text +"</li>");
            break;
    }

    // Injecter le contenu généré
    $(elem).closest('.injectBlock').find('.injectContent').empty().html(content);
    $('.special-span').bind('click', editSpecialSpan);
}

function addEvent(obj, event, func) {
    if (obj.addEventListener) {
        obj.addEventListener(event, func, false);
        return true;
    } else if (obj.attachEvent) {
        obj.attachEvent('on' + event, func);
    } else {
        var f = obj['on' + event];
        obj['on' + event] = typeof f === 'function' ? function() {
            f();
            func();
        } : func
    }
}

function bigEditable(event) {
    var $editable = $(this);
    var content = $editable.html()

    var $saveBtn = $('<button class="btn btn-xs btn-primary pull-right">Valider</button>').css('margin-top', -20);
    var $textarea = $('<textarea class="form-control"></textarea>').val(content);

    $editable.empty().off('click');
    $editable.append($saveBtn);
    $editable.append($textarea);

    // $textarea.summernote();

    $saveBtn.on('click', function () {
        // alert('ok');
        content = $textarea.val();
        $editable.empty();
        $editable.html('');
        console.log($editable);
        console.log(content);
        $editable.html(content);
    });
    // $editable.on('click', bigEditable);
    // addEvent($editable, 'click', bigEditable);
}


function showAddBtns() {
    $('div.list').each(function() {        
        if ($(this).find('.btn-add-item').length == 0) {            
            var $btn = $('<button class="btn-add-item btn btn-primary btn-xs"></button>');
            $btn.append('<i class="fa fa-plus"></i>');
            $btn.append($(this).data('btn-title'));

            var addFunction = $(this).data('function');
            
            if (typeof addFunction == 'string' && typeof window[addFunction] == 'function') {                
                $btn.on('click', function (event) {                    
                    window[addFunction](event);
                })
            }

            $(this).prepend($btn);
        }
    })
}

function showSelectElement() {

    if($('div.tab-pane.active').length > 0)
    {
        var visiblePaneId = $('div.tab-pane.active').attr('id').replace('_tab','');
        injectTarget(visiblePaneId);
    }

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).data("id"); // activated tab
        injectTarget(target);
    });
}

function injectTarget(target)
{
    var $selectDiv1 = $("");
    var $selectDiv2 = $("");

    switch (target) {
        case 'acte_de_vente_global_vendeur':
            $selectDiv1 = $('#'+target).find('div.div1Fich1');
            $selectDiv2 = $('#'+target).find('div.div2Fich1');
            break;
        case 'acte_de_vente_autre_vendeur':
            $selectDiv1 = $('#'+target).find('div.div1Fich2');
            $selectDiv2 = $('#'+target).find('div.div2Fich2');
            break;
        default:
            break;
    }

    $('#'+target).find('div.select').each(function(){

        var $div = $(this);
        var $text = $('<strong class="text">'+$(this).data('btn-title')+'</strong>');
        var $action = $(this).data('name');
        var $select = $('');

        $div.css({
            'display': 'inline-block'
        });

        switch ($action) {
            case 'liste_type_bien_immobilier':
                $select = $('<select class="forSelect">'+
                    '<option value="" desabled>Sélectionner le type de bien immobilier</option>'+
                    '<option value="pn">Parcelle nue</option>'+
                    '<option value="dn">Domaine nu</option>'+
                    '<option value="pb">Parcelle bâtie</option>'+
                    '</select>');
                // addCss($select,'185px','-19px');
                // addCss($text,'185px','-19px');
                break;
            case 'origine_propriete_vendeur':
                $select = $('<select class="forSelect">'+
                    '<option value="" desabled>Sélectionner l\'origine de propriété</option>'+
                    '<option value="a">Achat</option>'+
                    '<option value="d">Don</option>'+
                    '<option value="h">Héritage</option>'+
                    '</select>');
                break;
            case 'mode_paiement':
                $select = $('<select class="forSelect">'+
                    '<option value="" desabled>Sélectionner le mode d\'achat</option>'+
                    '<option value="e">Espèces</option>'+
                    '<option value="c">Chèque bancaire</option>'+
                    '<option value="v">Virement bancaire</option>'+
                    '</select>');
                // addCss($select,'150px','-27px');
                // addCss($text,'150px','-27px');
                break;
            default:
                break;
        }

        $div.parent('span').removeAttr('class');

        var $textFind = $div.find('strong.text');

        if($(this).find('.forSelect').length == 0 && $($textFind).length == 0 ){
            $div.empty();
            $div.prepend($text);
        }

        $textFind = $div.find('strong.text');

        $($textFind).removeClass('special-span');

        if($($textFind).length != 0 && $selectDiv1.length != 0 && $selectDiv2.length != 0 && $($textFind).text() == "(Cliquez pour sélectionner)")
        {
            $($textFind).css('display','none');
        }

        if($($textFind).length == 0)
        {
            var $selectClone = $($select).clone();
            onChangeSelect($select,$div,$selectClone,$selectDiv1,$selectDiv2,$action);
        }

        textClick($textFind,$div,$select,$selectDiv1,$selectDiv2,$action);
    });
}

function addCss($elem,$left,$top)
{
    $elem.css({
        'display':'inline-block',
        // 'margin-top':$top,
        // 'margin-left':$left,
    });
}

function textClick($text,$div,$select,$selectDiv1,$selectDiv2,$action)
{
    var $selectClone = $($select).clone();
    onClickText($text,$div,$select,$selectDiv1,$selectDiv2,$action,$selectClone)
}

function onClickText($text,$div,$select,$selectDiv1,$selectDiv2,$action,$selectClone)
{
    $text.on('click', function(){
        $($div).css({
            'display': 'inline-block'
        });
        $($text).remove();
        $($div).empty();
        $($div).prepend($select);
        if($($select).find('option:selected').length > 0)
        {
            switch ($action) {
                case 'liste_type_bien_immobilier':
                    optionValueCheck($($select).find('option:selected'),$selectDiv1,$selectDiv2,$action,$div);
                    break;
                case 'origine_propriete_vendeur':
                    break;
                case 'mode_paiement':
                    break;
                default:
                    break;
            }
        }
        onChangeSelect($select,$div,$selectClone,$selectDiv1,$selectDiv2,$action);
    });
}

function onChangeSelect($select,$div,$selectClone,$selectDiv1,$selectDiv2,$action)
{
    $($div).css({
        'display': 'inline-block'
    });
    $select.on('change', function(){
        var $option = $(this).find('option:selected');
        var $optionText = $('<strong class="text">'+$option.text()+'</strong>');
        $($select).remove();
        switch ($action) {
            case 'liste_type_bien_immobilier':
                optionValueCheck($option,$selectDiv1,$selectDiv2,$action,$div);
                $($div).empty();
                $($div).prepend($optionText);
                // addCss($optionText,'185px','-19px');
                break;
            case 'origine_propriete_vendeur':
                optionValueCheck($option,$selectDiv1,$selectDiv2,$action,$div);
                break;
            case 'mode_paiement':
                $($div).empty();
                $($div).prepend($optionText);
                // addCss($optionText,'150px','-27px');
                break;
            default:
                break;

        }
        textClick($optionText,$div,$selectClone,$selectDiv1,$selectDiv2,$action);
    });
}

function optionValueCheck($option,$selectDiv1,$selectDiv2,$action,$div)
{
    switch ($action) {
        case 'liste_type_bien_immobilier':
            var i = 0;
            $($selectDiv1).each(function () {
                i++;
                if(i == 1)
                {
                    $selectDiv1 = $(this);
                }
            });
            if($($selectDiv1).length > 0 || $($selectDiv2).length > 0)
            {
                if($option.val() == "pn" || $option.val() == "dn")
                {
                    $($selectDiv2).empty();
                    $.get(Routing.generate('gsp_proformat_div1',{'type':$option.val()}), function(div1){
                        $($selectDiv1).html(div1);
                        $($selectDiv1).find('.special-span').bind('click', editSpecialSpan);
                    }, 'html');
                }
                else if($option.val() == "pb")
                {
                    $($selectDiv1).empty();
                    $.get(Routing.generate('gsp_proformat_div2',{'type':$option.val()}), function(div2){
                        $($selectDiv2).html(div2);
                        $($selectDiv2).find('.special-span').bind('click', editSpecialSpan);
                    }, 'html');
                }
            }
            break;
        case 'origine_propriete_vendeur':
            var $divAchat = $(
                '<p style="text-align: justify;">' +
                '<span style="font-family: \'times new roman\', times; font-size: 12pt;"><strong class="text">Achat</strong></span></p>'+
                '<p style="text-align: justify;">' +
                '<span style="font-family: \'times new roman\', times; font-size: 12pt;">Auprès de&nbsp;:&nbsp;</span>' +
                '<span style="font-family: \'times new roman\', times; font-size: 12pt;" class="special-span">………………………………………………….</span></p>'+
                '<p style="text-align: justify;">' +
                '<span style="font-family: \'times new roman\', times; font-size: 12pt;">Titre de propriété de preuve&nbsp;:</span>' +
                '<span style="font-family: \'times new roman\', times; font-size: 12pt;" class="special-span"> ………………………………</span></p>'
            );

            var $divDon = $(
                '<p style="text-align: justify;">' +
                '<span style="font-family: \'times new roman\', times; font-size: 12pt;"><strong class="text">Don</strong></span></p>'+
                '<p style="text-align: justify;">' +
                '<span style="font-family: \'times new roman\', times; font-size: 12pt;">De&nbsp;:</span>' +
                '<span style="font-family: \'times new roman\', times; font-size: 12pt;" class="special-span"> ………………………………………………………….</span></p>'+
                '<p style="text-align: justify;">' +
                '<span style="font-family: \'times new roman\', times; font-size: 12pt;">Titre de propriété de preuve&nbsp;:</span>' +
                '<span style="font-family: \'times new roman\', times; font-size: 12pt;" class="special-span"> ………………………………</span></p>'
            );

            var $divHeritage = $(
                '<p style="text-align: justify;">' +
                '<span style="font-family: \'times new roman\', times; font-size: 12pt;"><strong class="text">Heritage</strong></span></p>'+
                '<p style="text-align: justify;">' +
                '<span style="font-family: \'times new roman\', times; font-size: 12pt;">De&nbsp;:</span>' +
                '<span style="font-family: \'times new roman\', times; font-size: 12pt;" class="special-span"> ………………………………………………………….</span></p>'+
                '<p style="text-align: justify;">' +
                '<span style="font-family: \'times new roman\', times; font-size: 12pt;">Titre de propriété de preuve&nbsp;:</span>' +
                '<span style="font-family: \'times new roman\', times; font-size: 12pt;" class="special-span"> ………………………………</span></p>'
            );

            var i = 0;

            $($selectDiv1).each(function () {
                i++;
                if(i == 2)
                {
                    $selectDiv1 = $(this);

                    if($($selectDiv1).length > 0)
                    {
                        $($selectDiv1).empty();
                        if($option.val() == "a")
                        {
                            $($selectDiv1).prepend($divAchat);
                            $($selectDiv1).find('.special-span').bind('click', editSpecialSpan);
                        }
                        else if($option.val() == "d")
                        {
                            $($selectDiv1).prepend($divDon);
                            $($selectDiv1).find('.special-span').bind('click', editSpecialSpan);
                        }
                        else if ($option.val() == "h")
                        {
                            $($selectDiv1).prepend($divHeritage);
                            $($selectDiv1).find('.special-span').bind('click', editSpecialSpan);
                        }
                        else
                        {

                        }
                    }
                }
            });
            break;
        case 'mode_paiement':
            break;
        default:
            break;
    }
}

function showTableBtns() {
    $('div.table-container').each(function() {
        var $container = $(this);
        var $table = $container.find('table');

        tablelize($container, $table);
    })
}

// Add TinyMCE Edit for all modifications
function callTinymceEdit(e, elem, reference){
    e.preventDefault();
    // Replace show view by TinyMCE Edit field and paste logical codes
    // get current TinyMceEdit id
    var tiny = '#tinyMceEdit_' + reference;
    var referenceId = '#' + reference;
    $(tiny).removeClass('hidden');
    $(referenceId).addClass('hidden');

    // change click-edit-{reference} value to on
    var clickEdit = "#click-edit-" + reference;
    $(clickEdit).text('on');
}

function detailsAll(e, elem)
{
    e.preventDefault();

    $('#waitModal').modal('show');

    var url = $(elem).attr('href');

    $.ajax({
        url: url,
        method: 'GET',
        // data: {
        //     'contenu': contenu.trim()
        // },
        dataType: 'json',
        success: function (res) {
            console.log(res.template);
            setTimeout(function(){
                $('#waitModal').modal('hide');
                $('#detailAllModal').modal('show');
                $("#detailAllModal .modal-content").html(res.template);
                // window.location.reload();
            }, 1000);
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(XMLHttpRequest.responseText);
        }
    });
}

function saveFiche(e, elem, reference) {

    e.preventDefault();

    $('.list-add-btn, .btn-group .btn-group-actions').css('display', 'none');
    $('.special-select').css('display', 'none');
    $('.select').find('select').css('display', 'none');
    // if($('.select').find('.text').text() == "(Cliquez pour sélectionner)")
    // {
    //     $('.select').find('.text').css('display', 'none');
    // }
    $('.btn-add-item, .table-container .dropdown .btn-group-actions').remove();

    var clickEdit = "#click-edit-" + reference;
    var value = $.trim($(clickEdit).text());

    var contenu = "";
    if(value == "off"){
        // Uses last method
        // R�cup�rer le contenu de la fiche
        contenu = $('#'+ reference).html();
    }else{
        /// uses following lines for new version
        contenu = $('#tinyMceEditTextarea_'+ reference).html();
    }

    // R�cup�rer l'url    
    var url = $(elem).attr("href");    

    // faire de l'ajax jour sauvegarder la fiche
    $('#pleaseWaitDialog').modal('show');

    showAddBtns();
    showTableBtns();
    showSelectElement();
    $('.btn-group-actions .btn-group').show();
    
    $.ajax({
        url: url,
        method: 'POST',
        data: {
            'contenu': contenu.trim()
        },
        success: function (params) {
            $('#pleaseWaitDialog').modal('hide');
            $('#success-div').removeClass('hidden');

            setTimeout(function(){
                $('#success-div').addClass('hidden');

                // Uses following lines for new version
                window.location.reload();
            }, 1000);
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(XMLHttpRequest.responseText);
            //console.log(textStatus);
            //console.log(errorThrown);
        }
    });
}

