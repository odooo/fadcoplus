!function ($) {

    $(function() {

        var $transferJuristeModal = $('#transfer-juriste-modal');
        var $verificationJuristeModal = $('#verification-juriste-modal');
        var $transferDgModal = $('#transfer-dg-modal');
        var $accompteRow = $('#gspbundle_biengaranti_accompte, #gspbundle_biengarantivalidation_accompte').closest('.form-group');
        var $nbEcheanceRow = $('#gspbundle_biengaranti_nbEcheance, #gspbundle_biengarantivalidation_nbEcheance').closest('.form-group');
        var $echeancesHolder = $('#gspbundle_biengaranti_echeances, #gspbundle_biengarantivalidation_echeances');
        var $echeancesRow = $echeancesHolder.closest('.form-group');

        // ENREGISTREMENT DE BIEN
        // 
        // $('#gspbundle_biengaranti_echeances').append($('#gspbundle_biengaranti_echeances').data('prototype'));
        $accompteRow.hide();
        $nbEcheanceRow.hide();
        $echeancesRow.hide();

        $('#gspbundle_biengaranti_modePaiement, #gspbundle_biengarantivalidation_modePaiementDg').on('change', function (event) {
            var amount = parseFloat($('#gspbundle_biengaranti_montant, #gspbundle_biengarantivalidation_montantDg').val())
            
            if ($(this).val() == 'progressif') {
                if (isNaN(amount) || amount <= 0) {
                    alert('Entrez le montant de cessions du bien');
                    $(this).find('options').eq(0).attr('selected', true);
                    return false;
                }

                $accompteRow.show();
                $nbEcheanceRow.show();
                $echeancesRow.show();
            } else {
                $accompteRow.hide();
                $nbEcheanceRow.hide();     
                $echeancesRow.hide();
            }
        })

        $('#gspbundle_biengaranti_nbEcheance, #gspbundle_biengarantivalidation_nbEcheance').on('keyup change', function (event) {
            var nbEcheance = parseInt($(this).val());

            $echeancesHolder.empty();
            if (nbEcheance > 0) {

                var totalAmout = parseFloat($('#gspbundle_biengaranti_montant, #gspbundle_biengarantivalidation_montantDg').val()) - parseFloat($('#gspbundle_biengaranti_accompte, #gspbundle_biengarantivalidation_accompte').val());
                var monthlyAmount = totalAmout / nbEcheance;
                var nextMonth = new Date();

                for (var i = 0; i < nbEcheance; i++) {
                    var $row = $($('#gspbundle_biengaranti_echeances, #gspbundle_biengarantivalidation_echeances').data('prototype').replace(/__name__/g, i));

                    nextMonth.setMonth(nextMonth.getMonth() + 1);

                    var day = nextMonth.getUTCDate();
                    var month = nextMonth.getUTCMonth() + 1; month <= 10 && (month = '0' + month);
                    var year = nextMonth.getUTCFullYear();

                    $row.find('input').eq(0).val(day + '/' + month + '/' + year);
                    $row.find('input').eq(1).val(monthlyAmount);

                    $echeancesHolder.append($row);
                }
            }
        });

        // TRANSFER DOSSIER AUX JURISTE
        //
        $('.action-transfer-juriste').on('click', function (event) {
            event.preventDefault();

            $transferJuristeModal.find('form').attr('action', $(this).attr('href'));
            $transferJuristeModal.modal('show');
        });

        $('#btn-transfer-juriste').on('click', function () {
            var urgence = $('#transfer-juriste-urgence').val();

            if (urgence && urgence != '') {
                $transferJuristeModal.find('form').submit();
            } else {
                alert('Veuillez sélectionner le niveau d\'urgence !');
            }
        });


        // COMPTE RENDU VERIFICATION PAR LES JURISTES
        //
        $('.action-verification-juriste').on('click', function (event) {
            event.preventDefault();

            $verificationJuristeModal.find('form').attr('action', $(this).attr('href'));
            $verificationJuristeModal.modal('show');
        });

        $('#btn-verification-juriste').on('click', function () {
            var rapport = $('#varification-juriste-rapport').val();

            if (rapport != '') {
                $verificationJuristeModal.find('form').submit();
            } else {
                alert('Veuillez faire le compte rendu des vérifications !');
            }
        });

        // TRANSFER DOSSIER AUX DGS
        //
        $('.action-transfer-dg').on('click', function (event) {
            event.preventDefault();

            $transferDgModal.find('form').attr('action', $(this).attr('href'));
            $transferDgModal.modal('show');
        });

        $('#btn-transfer-dg').on('click', function () {
            var urgence = $transferDgModal.find('select[name="urgence"]').val();

            if (urgence && urgence != '') {
                $transferDgModal.find('form').submit();
            } else {
                alert('Veuillez sélectionner le niveau d\'urgence !');
            }
        });

    });        
} (jQuery);
