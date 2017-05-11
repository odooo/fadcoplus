!function ($) {
    $(function () {
        $('#gspbundle_financement_proformat').on('change', function (event) {
            if($(this).val() == ''){
                $('#gspbundle_financement_montant').val('');
                $('#EnregisterInvestment').hide();
                return;
            }
            var obj = {
                idProformat: parseInt($(this).val()),
            };
            //var DATA = 'proformat='+idProformat;
            showLoader('loaderModalProformat');
            $.ajax({
                type: 'POST',
                url: Routing.generate('gsp_investments_financement_charger_montant'),
                contentType: 'application/json; charset=UTF-8',
                data: JSON.stringify(obj),
                datatype: 'json',
                success: onSuccess,
                error: onFailure

            }).done(success2);
            function success2(data) {
                $('#gspbundle_financement_bien').val(data.biensaAcheter);
                $('#gspbundle_financement_montant').val(data.montant);
                if (data.montant != 0) {
                    $('#EnregisterInvestment').show();
                } else if (data.montant == 0) {
                    $('#EnregisterInvestment').hide();
                }
                hideLoader('loaderModalProformat');
            }

            function onSuccess(data) {
                // The response from the function is in the attribute d
                if (data) {
                    console.log(data.montant);
                } else {
                    console.log('erreur de donneé');
                }
                hideLoader();
            }
            function onFailure() {
                console.log('failled');
                hideLoader();

            }

        });
    });


}(jQuery);
