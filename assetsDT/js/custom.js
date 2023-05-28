// =============  Data Table - (Start) ================= //

$(document).ready(function(){
    
    var table = $('#example').DataTable({
        
        buttons:['copy', 'csv', 'excel', 'pdf',
        {
            extend: 'print',
            customize: function ( win ) {
                $(win.document.body)
                    .css( 'font-size', '10pt' )
                    .prepend(
                        '<img src="assetsDT\images\printlogo.png"  style="opacity:.7; position:cover; top:0; left:0; width: 772px; height: 150px;"   />'
                    );

                $(win.document.body).find( 'table' )
                    .addClass( 'compact' )
                    .css( 'font-size', 'inherit' );
            }
        }
    ]
        
    });
    
    
    table.buttons().container()
    .appendTo('#example_wrapper .col-md-6:eq(0)');

});