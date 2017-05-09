function createInputFileElement(wrapElementClass, addButtonClass, inputTextPropertyName, inputFilePropertyName) {
    //    $(document).ready(function() {

    var max_fields = 3; //nombre d'éléments autorisé
    var wrapper = $("." + wrapElementClass); //Le contenant d'élément
    var add_button = $("." + addButtonClass); //La classe du bouton d'ajout
    var removeButton = ".remove_field";

    var $file_element = '<div class="row part"> <div class="col-sm-4"> <div class="form-group"> <div class="form-group"><label class="control-label filename" for="filename"><span style="color: red; margin-right: 2px;">*</span>Nom de la pièce</label> <input required="required" type="text" name="prefet[filenames][]" class="form-control filename"> </div> </div> </div>' +
        ' <div class="col-sm-6"> <div class="form-group"> <label class="control-label"><span style="color: red; margin-right: 2px;">*</span>Pièce à joindre : </label> <label class="custom-file" style=""> <input type="file" class="filestyle" name="prefet[pieces][]" data-placeholder="Aucun fichier" data-buttonText="Joindre les audios">' +
        ' <span class="custom-file-control"></span> </label> </div> </div><div class="col-sm-1"><div class="form-group"><button type="button" class="btn btn-primary remove_field" style="margin-top: 19px; height: 34px;"><i class="fa fa-remove"></i></button> </div></div> </div>';

    var x = 1; //nombre d'éléments initial
    $(add_button).click(function (e) { //clique sur le bouton d'ajout pour ajouter des éléments
        e.preventDefault();

        if (x < max_fields) { //nombre d'éléments autorisé
            x++; //incrémentation du nombre d'éléments
            $(wrapper).append($file_element); //ajouter l'élémént

            $(":file").filestyle({buttonText: "Joindre les audios", buttonName: 'btn-primary'});
        }
    });

    $(wrapper).on("click", removeButton, function (e) {//L'utilisateur clique sur la croix pour supprimer l'élément ajouté
        e.preventDefault();
        $(this).parents('.part').remove();
        x--;
    });

}

$(":file").filestyle({buttonText: "Joindre les audios", buttonName: 'btn-primary'});

createInputFileElement('input_file_wrap', 'add_file_button', 'prefet[pieces][]', 'prefet[filenames][]');

var $formView = $('#prefet').submit(function (e) {
    //e.preventDefault();
    $('#prefet .btn').button('loading');
});