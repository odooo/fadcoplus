function enableInsertVariable(formId) {
    
    var $contenuClient = $('#' + formId + ' #modele_contenu')
    var $contenuPrestataire = $('#' + formId + ' #modele_contenu_prestataire')

    $('#vars-clients .sms-var').on('click', function(e) {
        e.preventDefault();
        insertAt($contenuClient, '{{ ' + $(this).data('varname') + ' }}');        
    })

    $('#vars-prestataires .sms-var').on('click', function(e) {
        e.preventDefault();
        insertAt($contenuPrestataire, '{{ ' + $(this).data('varname') + ' }}');
    })
}

function insertAt($field, text) {

    var cursorPosition = $field.prop('selectionStart');
    var fieldContent = $field.val();
    var textBefore = fieldContent.substring(0,  cursorPosition);
    var textAfter  = fieldContent.substring(cursorPosition, fieldContent.length);
    $field.val(textBefore + text + textAfter );
}