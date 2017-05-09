!function ($) {

    var $paymentModal = $('#warranty-payment-modal');
    var $prototype = $('#prototype').clone();

    $prototype.removeAttr('id');
    $prototype.find('button').html('<i class="fa fa-remove"></i>').removeClass('btn-primary').addClass('btn-danger');

    $(function () {
        $('.action-payment').on('click', function (event) {
            event.preventDefault();

            $paymentModal.find('form').attr('action', $(this).attr('href'));
            $paymentModal.modal('show');            
        })

        $('#prototype button').on('click', function () {
            $line = $prototype.clone();

            $line.find('button').click(function() {
                $(this).closest('tr').remove();
            })

            $paymentModal.find('table').append($line);
        });

        $('#btn-do-payment').on('click', function () {
            $paymentModal.find('form').submit();
        })
    });
    
} (jQuery);