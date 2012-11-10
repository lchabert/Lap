(document).ready(function() {
    /*
     * Initialse DataTables, with no sorting on the 'details' column
     */
    
    var oTable = $('#table_id').dataTable( {
        "aaSorting": [[ 1, "asc" ]],
        "oLanguage": {
            "sSearch": "Recherche:",
            "oPaginate": {
                "sPrevious": "Précedent",
                "sNext": "Suivant",
                "sLast": "Derniere",
                "sFirst": "Première"
            },
            "sLengthMenu": "Afficher _MENU_ entrées",
            "sZeroRecords": "Aucun agent - Desolé",
            "sInfo": "Affichage de _START_ à _END_ sur un total de  _TOTAL_ entrées",
            "sInfoEmpty": "Affichage de 0 à 0 sur 0 entrée",
            "sInfoFiltered": "(Filtré depuis _MAX_ entrées)"
        },
        "aLengthMenu": [[1, 2, 10, -1], [1, 2, 10, "Tout"]],
    } );
 
    function fnFormatDetails ( uid )
    {  
        var DATA = 'uid=' + uid;
        var result = null;
        $.ajax({
            type: "POST",
            dataType: "html",
            async: false,
            url: "{{ path('LapAnnuBundle_show')}}",
            data: DATA,
            cache: true,
            success: function(data){
                result = data;
            }
        });
        return result;
           
    }
    
    /* Add event listener for opening and closing details
     * Note that the indicator for showing which row is open is not controlled by DataTables,
     * rather it is done here
     */
    $('#table_id tbody td i[class="icon-eye-open"]').live('click', function () {
        var nTr = $(this).parents('tr')[0];
        var uid = $(this).attr("id");
        if ( oTable.fnIsOpen(nTr) )
        {
            /* This row is already open - close it */
            oTable.fnClose( nTr );
        }
        else
        {
            oTable.fnOpen( nTr, fnFormatDetails(uid), 'details' );
        }
    } );
    
    
    /*Function which make call
    ToDO : Le generer de facon dynamique soit ici, soit dans un controller
    */
    $('i[class="icon-headphones"]').live('click', function () {
        
        var DATA = 'number=' + $(this).attr("id");
        $.ajax({
            type: "POST",
            url: "{{path('LapAnnuBundle_dial')}}",
            data: DATA,
            cache: false,
        }); 
    } );
    
    
    $('#cdr').dataTable({
        "aaSorting": [[ 1, "desc" ]],
        "oLanguage": {
            "sSearch": "Recherche:",
            "oPaginate": {
                "sPrevious": "Précedent",
                "sNext": "Suivant",
                "sLast": "Derniere",
                "sFirst": "Première"
            },
            "sLengthMenu": "Afficher _MENU_ entrées",
            "sZeroRecords": "Aucun appels",
            "sInfo": "Affichage de _START_ à _END_ sur un total de  _TOTAL_ entrées",
            "sInfoEmpty": "Affichage de 0 à 0 sur 0 entrée",
            "sInfoFiltered": "(Filtré depuis _MAX_ entrées)"
        },
        "aLengthMenu": [[10, 20, 30, -1], [10, 20, 30, "Tout"]]
    });

} );