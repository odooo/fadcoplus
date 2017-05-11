!function($) {

    var $filePrototype = $('#file-prototype')

    $('.btn-add-file').on('click', function(e) {
        
        var $form = $(this).closest('.modal-content').find('.files-form')
        
        $form.append(createFileRow())
    })

    function createFileRow() {

        var $fileRow = $filePrototype.clone().show();

        $fileRow.find('.btn-remove').on('click', function() {
            $fileRow.remove()
        })

        return $fileRow
    }        

}(jQuery)