!function ($) {

    var TYPE_LIMITTED = 1,
        TYPE_UNLIMITTED = 2
    ;

    var $echeancierModal = $('#echeancier-modal');
    var $incomeModal = $('#income-modal');

    $(function () {
        
        $('#gspbundle_investment_type').on('change', function (event) {
            var type = parseInt($(this).val());

            if (type == TYPE_LIMITTED) {
                $('#duration-label').fadeIn();
                $('#gspbundle_investment_duration').fadeIn();
                $('#table_echeance_payement').show();                
            } else {
                $('#duration-label').fadeOut();
                $('#gspbundle_investment_duration').fadeOut();
                if($('#gspbundle_investment_duration').val() < 2)
                    $('#gspbundle_investment_duration').val(2);
                $('#table_echeance_payement').hide();
            }
        });

        $('#gspbundle_investment_duration, #gspbundle_investment_montant').on('keyup change', function (event) {
            var duration = parseInt($('#gspbundle_investment_duration').val());
            var montant = parseFloat($('#gspbundle_investment_montant').val());

            if (duration < 2 || montant < 0) {
                return;
            }

            var echeancier = generateEcheancier(montant, duration);
            console.log(echeancier);
            var $echeancierTable = $('<table class="table table-bordered table-striped" id="table_echeance_payement" style="margin-top: 20px"></table>');
            $echeancierTable.append('<caption>Echéancier de paiement des interêts</caption>')
            $echeancierTable.append('<thead><tr><th style="width: 50%;">Date</th><th>Montant</th></tr></thead>');

            var $tbody = $('<tbody></tbody>');

            for (var x in echeancier) {
                var echeance = echeancier[x];
                $tr = $('<tr></tr>');
                $tr.append($('<td></td>').text(echeance.date.toDateString()));
                $tr.append($('<td></td>').text(echeance.interest + ' FCFA'));

                $tbody.append($tr);
            }

            $echeancierTable.append($tbody);

            $('.table').remove();
            $echeancierTable.insertAfter($('#gspbundle_investment_duration'));
        })

        $('#investment-form').on('submit', function (event) {
            
            $('#gspbundle_investment_contrat').val(
                $('#investment-investment-contract').val()
            );

            $('#gspbundle_investment_protocoleAccord').val(
                $('#investment-protocol-accord').val()
            );
        });

        $('a.view-echeancier').on('click', function (event) {
            event.preventDefault();

            $echeancierModal.find('.modal-body').html('<div class="cssload-loader"></div>');
            $echeancierModal.modal('show');

            $
                .ajax({
                    url: $(this).attr('href'),
                    type: 'GET'
                })
                .done(function (response) {
                    $echeancierModal.find('.modal-body').html(response);
                })
                .fail(function (error) {                    
                    console.log(error.responseText);
                    $echeancierModal.modal('hide');
                })
            ;

        })

        $('a.show-income').on('click', function (event) {
            event.preventDefault();

            $incomeModal.find('.modal-body').html('<div class="cssload-loader"></div>');
            $incomeModal.modal('show');

            $
                .ajax({
                    url: $(this).attr('href'),
                    type: 'GET'
                })
                .done(function (response) {
                    $incomeModal.find('.modal-body').html(response);
                })
                .fail(function (error) {                    
                    console.log(error.responseText);
                    $incomeModal.modal('hide');
                })
            ;
        })
    });

    function generateEcheancier(montant, duration) {
        
        var today = new Date();
        var echeancier = [];

        montant = parseInt(montant);
        if (montant <= 0) {
            return echeancier;
        }

        for (var i = 0; i < duration; i++) {
            today.setFullYear(today.getFullYear() + 1);
            echeancier.push({
                date: new Date(today),
                interest: montant * 0.2 + (i == duration - 1 ? montant : 0)
            });            
        }

        return echeancier;
    }

} (jQuery);