 <link rel="stylesheet" href="style/style.css" type="text/css">
 <link rel="stylesheet" href="style/bootstrap.css" type="text/css">
	
<link rel="stylesheet" type="text/css" href="dt/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="dt/dataTables.bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="dt/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css" href="dt/buttons.dataTables.min.css" />
<link rel="stylesheet" type="text/css" href="dt/responsive.bootstrap.min.css" />


<script type="text/javascript"  src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="js/buttons.flash.min.js"></script>
<script type="text/javascript" src="js/jszip.min.js"></script>
<script type="text/javascript" src="js/pdfmake.min.js"></script>
<script type="text/javascript" src="js/vfs_fonts.js"></script>
<script type="text/javascript" src="js/buttons.html5.min.js"></script>
<script type="text/javascript" src="js/buttons.print.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#table').DataTable( {
			dom: 'Bfrtip',
			buttons: [
			 'excel', 'pdf', 'print'
			]
		} );
	} );
</script>
