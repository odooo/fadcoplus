/**
 * @author  Eldo Magan <magan.eldo@gmail.com>
 */
!function ($) {

    $(function () {
        $('.live-edit .special-span').off('click').on("click", editable);
        // $('.live-edit .big-editable').off('click').on('click', bigEditable)
    })    

    function editable(event) {

        event.stopPropagation();
        
        var $editable = $(this);
        var content = $editable.text();
        var $input = $("<input type= 'text' class='special-input' placeholder='Entrer du texte...'/>").val(content);        

        $input.on('blur', function (e) {
            
            e.stopPropagation();

            var val = $(this).val();
            if (val.trim() == "") {
                val = content;
            }
            
            $($editable).text(val);

        }).on('click', function (e) {
            e.stopPropagation();
        }).on('keyup', function(e) {
            if (e.keyCode == 13) {
                $(this).blur()
            }
        });

        $editable.html($input);
        $input.focus();
    }

}(jQuery);

