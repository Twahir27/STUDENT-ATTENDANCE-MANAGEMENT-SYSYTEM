<link rel="stylesheet" type="text/css" href="dt/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="dt/dataTables.bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="dt/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css" href="dt/buttons.dataTables.min.css" />
<link rel="stylesheet" type="text/css" href="dt/responsive.bootstrap.min.css" />


<script src="dt/jquery-1.12.4.js"></script>
<script src="dt/bootstrap.min.js"></script>
<script src="dt/jquery.dataTables.min.js"></script>
<script src="dt/dataTables.buttons.min.js"></script>
<script src="dt/buttons.flash.min.js"></script>
<script src="dt/jszip.min.js"></script>
<script src="dt/pdfmake.min.js"></script>
<script src="dt/vfs_fonts.js"></script>
<script src="dt/buttons.html5.min.js"></script>
<script src="dt/buttons.print.min.js"></script>

<script src="dt/dataTables.bootstrap.min.js"></script>
<script src="dt/responsive.bootstrap.min.js"></script>


<script src="dt/dataTables.responsive.min.js"></script>
<script>
$(document).ready(function() {
	
    $('#attend2').DataTable( {
		dom: 'Bfrtip',
        buttons: [
         
            {
                extend: 'pdf',
                exportOptions: {
                    columns: [ 0, 1, 2,3, 4, 5 ] 
                }
            },
           
			
				
        ],
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } ),
				responsive: true,
    columnDefs: [
        { responsivePriority: 1, targets: 0 },
        { responsivePriority: 2, targets: -1 }
    ]
				
            }
        }
    } );
} );
</script>
<br/><br/>

<div class="panel panel-info">

   <div class="panel-heading">
       <center><b><i>View-Report<center><b><i>   <!--Hearding-->
   </div>

<?php
include_once("connection.php");



?>

<table id="attend2" class="table table-hover"  width="100%">


  
  
 
 <tr>

 <td>
</td>
<td>
</td>
<td></td><td></td><td></td><td></td>

</tr>
<?php

?>
<tr>       
		  <th><b><span class="glyphicon glyphicon-"><b><i>Full_Name</i></span></b></th>  
		  <th><span class="glyphicon glyphicon-"><b><i>Reg_No</span></th>      
		  <th><span class="glyphicon glyphicon-"><b><i>Days_Absent</span></th>       
		  <th><span class="glyphicon glyphicon-"><b><i>Days_Present</span></th> 
		  <th><span class="glyphicon glyphicon-"><b><i>Attendance%</span></th> 
		  <th><span class="glyphicon glyphicon-"><b><i>Status</span></th> 
		  
		  		  
</tr>


<tbody> 
<?php
if(isset($_POST["report_course"])){
	$course = $_POST["report_course"];
$query=$connect->query("SELECT * FROM student WHERE studentID IN (SELECT DISTINCT(studentID) FROM attendance)") or die($connect->error);

$n=mysqli_num_rows($query);

while($row = mysqli_fetch_array($query)){
	$id = $row["studentID"];
	$status = $connect->query("SELECT * FROM attendance INNER JOIN staff_course ON staff_course.staff_courseID = attendance.staff_courseID WHERE courseID = '$course' AND studentID = '$id'") or die($connect->error);
	
	$total = mysqli_num_rows($status);
	$present = 0;
	$absent = 0;
	while($getStatus = mysqli_fetch_array($status)){
		if($getStatus["Status"] === "Present"){
			$present = $present + 1;
		}
		if($getStatus["Status"] === "Absent"){
			$absent = $absent + 1;
		}
	}
	// Find parcent for present days
	$present_days = ($present*100)/$total;
	// approximate in 1 decimal place
	$parcent = round($present_days,0);
	
	// check if present parcent is greater than 75
	if($parcent >= 75){
		$remain_parcent = "<span class='text-success'>".$parcent."%</span>";
		$message = "<span class='text-success'>Allowed</span>";
	}
	else{
		$remain_parcent = "<span class='text-danger'>".$parcent."%</span>";
		$message = "<span class='text-danger'>Deburred</span>";
	}

?>
<tr>
	<td><?php echo $row["Firstname"]." ".$row["lastname"]; ?></td>
	<td><?php echo $row["studentID"]; ?></td>
	<td><?php echo $absent; ?></td>
	<td><?php echo $present; ?></td>
	<td><?php echo $remain_parcent; ?></td>
	<td><?php echo $message; ?></td>
</tr>
<?php
}
}
?>
</tbody> 

 
 </table>
 
 </div>
 