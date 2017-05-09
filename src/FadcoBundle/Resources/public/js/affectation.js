var dataTableOptions = {
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": false,
    "info": false,
    "autoWidth": true,
    "language": {
        "paginate": {"previous": "Précédent", "next": "Suivant"}, "search": "Rechercher: ",
        "emptyTable": "Actuellement, la Base  Est Vide", "zeroRecords": "Aucune correspondance trouvee a votre recherche...Merci!!!."
    }
}

var dateTimePickerOptions = {
    locale: 'fr',
    format: 'YYYY-MM-DD HH:mm:ss',
    widgetPositioning: {
        horizontal: 'auto',
        vertical: 'top'
    },
  
    icons: {
        time: 'fa fa-clock-o',
        date: 'fa fa-calendar',
        up: 'fa fa-chevron-up',
        down: 'fa fa-chevron-down',
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash-o',
        close: 'fa fa-close'
    }
}

$(function () {
         
    $(".select2").select2({
        theme : "classic",
    });
            
    $('.datetimepicker').datetimepicker({
        sideBySide: true,
        format: 'DD/MM/YYYY',
    });

    // Table des affectations
    $('#liste-affectation').DataTable(dataTableOptions).search('').draw();

    // Table des affectations en cours
    $('#liste-encours').DataTable(dataTableOptions).search('').draw();

    // Table des affectations bouclés
    $('#liste-boucler').DataTable(dataTableOptions).search('').draw();
            
    // Table des demandes d'affectation            
    $('#liste-demande').DataTable(dataTableOptions).search('').draw();
            
    $(".slider").slider();
            
    // GESTION DES AFFECTATIONS
    $('#echeance-reaffecter').datetimepicker(dateTimePickerOptions);
                          
    $('#controle-reaffecter').datetimepicker(dateTimePickerOptions);

    $('#echeance').datetimepicker(dateTimePickerOptions);
                          
    $('#controle').datetimepicker(dateTimePickerOptions);

    $('.btn-transferer').click(function(e) {
         e.preventDefault();
         $('#client').val($(this).data('client'));
         $('#form-transferer-demande').attr('action', $(this).attr('href'));
         
         $('#transferer-demande-modal').modal('show');
     });

    $('.btn-affecter').click(function(e) {
         e.preventDefault();
         $('#client').val($(this).attr('client'));
         $('#form-affecter').attr('action',$(this).attr('href'));
         
         $('#affectation').modal('show');
     });

    $('.btn-reaffecter').click(function(e) {
        e.preventDefault();
        $('#client-reaffectation').val($(this).attr('client'));
        $('#form-reaffecter').attr('action',$(this).attr('href'));
         
        $('#reaffectation').modal('show'); 
    });
             
    $('.btn-add-classement').click(function(e) {
        e.preventDefault();
        $('#client-classement').val($(this).attr('client'));
        $('#form-classement').attr('action',$(this).attr('href'));
         
        $('#classement').modal('show');
    });
             
    $('.detail-requete').click(function(e) {
        e.preventDefault();

        $('#detail .modal-body').html($('#load').html());
        $('#detail').modal('show');
        $.ajax({
            url : $(this).attr('href'),
            type : 'GET',
            dataType : 'html',
            success : function(code_html, statut) {
                    $('#detail .modal-body').html(code_html);
            },
            error : function(resultat, statut, erreur) {
                    $('#detail .modal-body').html('Erreur de chargement : '+statut);
            }
        });
    });
        
    $('.btn-details-affectation').click(function(e){
        e.preventDefault();

        $('#detail-affectation .modal-body').html($('#home-load').html());
        $('#detail-affectation').modal('show');
        $.ajax({
            url : $(this).attr('href'),
            type : 'GET',
            dataType : 'html',
            success : function(code_html, statut) {
                $('#detail-affectation .modal-body').html(code_html);
                showdetailaffectation(code_html);
            },
            error : function(resultat, statut, erreur) {
                $('#detail-affectation .modal-body').html('Erreur de chargement : '+statut);
            }
        });
    });
          
        
    $('#form-add-note').submit(function(e) {
        $('#form-add-note').css('display','none');
        $('#loading').css('display','block');
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'), 
            type: $(this).attr('method'), 
            data: $(this).serialize(), 
            
            success: function(code) { 
                $('#add-note').modal('hide');
                $('#detail-affectation .modal-body').html(code);
                   
                showdetailaffectation(code);
            },
            error : function(resultat, statut, erreur){
                    
                console.log(resultat.responseText);                
                $('#detail-affectation .modal-body').html('Erreur de chargement : '+statut);
            }
        });
    });
  
    $('#form-classement').submit(function(e) {
        $('#form-classement').css('display','none');
        $('#loading-classement').css('display','block');
    });   

    $('#add-note').on('shown.bs.modal', function() {
        $('#form-add-note').css('display','block');
        $('#form-add-note').attr('action',$('#form-link').attr('lien'));
        $('#loading').css('display','none');
    });

    $('#form-affecter, #form-transferer-demande, #form-reaffecter').on('submit', function(e) {
        $('#form-affecter').css('display','none');
        $('#loading-affecter').css('display','block');            
    });                               

});    
        
function showdetailaffectation(contenu)
{ 
    var table_interactions = $('#liste-interactions').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": false,
        "pageLength": 1,
        "order": [2,'desc'],
        "autoWidth": true,
        "language": {"paginate": {"previous": "Précédent", "next": "Suivant"}, "search": "Rechercher: ",
            "emptyTable": "Actuellement, la Base  Est Vide", "zeroRecords": "Aucune correspondance trouvee a votre recherche...Merci!!!."}
    });
    table_interactions.search('').draw();
              
    /*$('#close-note-form').click(function(e) {
       $('#add-note').modal('hide');
        $('#detail-affectation .modal-body').html(contenu);
       showdetailaffectation(contenu);
    });
    $('#close-detail').click(function(e) {
       $('#detail-affectation .modal-body').html('');
       $('#detail-affectation').modal('hide');
    });
     
    $('.add-action-btn').click(function(e) {
        e.preventDefault();
        $('#form-add-note').css('display','block');
        $('#loading').css('display','none');
        $('#add-note').modal('show');
     });
    */            
}