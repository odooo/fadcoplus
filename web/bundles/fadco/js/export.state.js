// Created by Romaric B. TOHOUNKPIN, 20/12/2016 at 10:00

var pagin = true;
var lengthChange = false;
var searching = true;
var ordering = false;
var info = false;
var autoWith = false;
var emptyTable = "Actuellement il n'y a aucune donnée enregistrée";
var zeroRecords = "Aucune correspondance trouvée à votre recherche... Merci!!!.";

function exports($id, $pagin, $lengthChange, $searching, $info, $autoWith, $ordering, $emptyTable, $zeroRecords)
{
    if(!$pagin) $pagin = pagin;
    if(!$lengthChange) $lengthChange = lengthChange;
    if(!$searching) $searching = searching;
    if(!$info) $info = info;
    if(!$ordering) $ordering = ordering;
    if(!$autoWith) $autoWith = autoWith;

    if($emptyTable == null || $emptyTable == 'undefined') $emptyTable = emptyTable;
    if($zeroRecords == null || $zeroRecords == 'undefined') $zeroRecords = zeroRecords;

    $('#'+$id).DataTable({

        "dom": 'lBfrtip',
        // buttons: [
        //     {
        //         extend: 'print',
        //         exportOptions: {
        //             columns: ':visible'
        //         }
        //     },
        //     'colvis'
        // ],
        // columnDefs: [ {
        //     targets: -1,
        //     visible: false
        // } ],
        "buttons": [
            {
                extend: 'collection',
                text: 'Exporter',
                buttons: [
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    'colvis'
//                            'copy',
//                     'excel',
//                     'csv',
//                            'pdf',
//                            'print',
//                            'colvis'
                ],
                columnDefs: [ {
                    targets: -1,
                    visible: false
                } ],
            }
        ],
        "paging": $pagin,
        "lengthChange": $lengthChange,
        "searching": $searching,
        "ordering": $ordering,
        "info": $info,
        "autoWidth": $autoWith,
        "language": {"paginate": {"previous": "Précédent", "next": "Suivant"}, "search": "Rechercher: ",
            "emptyTable": $emptyTable, "zeroRecords": $zeroRecords},
        // "dom": '<"pull-right"l>tip'
    });
}

// var $table = $('body').find('table').removeClass().addClass('table table-bordered table-striped');
var $table = $('body').find('table');

if($table.length > 0)
{
    var compt = 0;
    $.each($table, function () {
        
        if($(this).data('request') == 'ajaxify-search'|| $(this).data('page') == 'no')
        {

        }
        else
        {
            $(this).attr('id','lstTable'+(compt+1))
            var id_table = $(this).attr('id');
            if(id_table != 'undefined' && id_table != null) exports(id_table);
            compt = compt + 1;
        }
    });

}   