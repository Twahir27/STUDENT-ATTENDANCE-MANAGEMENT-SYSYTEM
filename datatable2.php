<link rel="stylesheet" type="text/css" href="datatable/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="datatable/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="datatable/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="datatable/responsive.bootstrap4.min.css"/>


<script src="datatable/jquery-1.12.4.js"></script>
<script src="vbootstrap.min.js"></script>
<script src="datatable/popper.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTables.bootstrap4.min.js"></script>
<script src="datatable/dataTables.responsive.min.js"></script>
<script src="datatable/responsive.bootstrap4.min.js"></script>



<script type="text/javascript">
$(document).ready(function() {
    $('#attend').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[1]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );
} );
</script>

