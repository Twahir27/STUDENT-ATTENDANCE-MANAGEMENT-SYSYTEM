<link rel="stylesheet" type="text/css" href="datatable/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="datatable/responsive.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="datatable/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="datatable/dataTables.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="datatable/responsive.bootstrap.min.css"/>

<script type="text/javascript" src="datatable/jquery-1.12.4.js"></script>
<script type="text/javascript"  src="datatable/bootstrap.min.js"></script>
<script type="text/javascript"  src="datatable/jquery.dataTables.min.js"></script>
<script type="text/javascript"  src="datatable/dataTables.bootstrap.min.js"></script>

<script type="text/javascript"  src="datatable/dataTables.responsive.min.js"></script>
<script type="text/javascript"  src="datatable/responsive.bootstrap.min.js"></script>


<script type="text/javascript">
$(document).ready(function() {
    $('#attend').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
            }
        }
    } );
} );
</script>

