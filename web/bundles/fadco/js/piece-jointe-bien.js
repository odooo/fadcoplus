!function($) {

    var $filePrototype = $('#file-prototype');

    // $('#myselect').on('click', function () {
    //     $( "#nomSelectionner" ).val($( "#myselect" ).val());
    //
    // });


    // $('.initial-transfer').on('click', function(e) {
    //     e.preventDefault()
    //
    //     $('#initial-transfer-files-modal').modal('show')
    //     $('#initial-transfer-files-modal').find('.files-form').attr('action', $(this).attr('href'))
    // })

    // $('.final-transfer').on('click', function(e) {
    //     e.preventDefault();
    //
    //     $('#final-transfer-files-modal').modal('show');
    //     $('#final-transfer-files-modal').find('.files-form').attr('action', $(this).attr('href'));
    // });


    $('.btn-add-file').on('click', function(e) {

        var $form = $(this).closest('.modal-content').find('.files-form')

        $form.append(createFileRow())
    });

    $('.btn-do-transfer').on('click', function(e) {
        $(this).closest('.modal-content').find('.files-form').submit()
    })

    function createFileRow() {

        var $fileRow = $filePrototype.clone().show();

        $fileRow.find('.btn-remove').on('click', function() {
            $fileRow.remove()
        })

        return $fileRow
    }

}(jQuery)