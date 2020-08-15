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



<br/><br/>

<div class="panel panel-info">

   <div class="panel-heading">
       <center><b><i>View-Report<center><b><i>   <!--Hearding-->
   </div>


<table class="table">
 <tr>
  <form action="" method="post">

 <td>

	<select class="form-control" name="report_course" required style="max-width: 200px;">
		<option>Select Course</option>
		<?php
		while($all_course = mysqli_fetch_array($all_staff_course)){
			echo "<option>".$all_course["courseID"]."</option>";
		}
		?>

	</select>

</td>
<td>
<input class="form-control" type="submit" value="View Attendance Report" style="max-width: 200px;">
</td>
<td></td><td></td><td></td><td></td>

</form>
</tr>
</table>
<table id="attend1" class="table table-hover"  width="100%">


  
  
 <thead> 
 <tr>

 <td>

</td>
<td>
</td>
<td></td><td></td><td></td><td></td>


</tr>
<?php
if(isset($_POST["report_course"])){
?>
<tr>       
		  <th><b><span class="glyphicon glyphicon-"><b><i>Full_Name</i></span></b></th>  
		  <th><span class="glyphicon glyphicon-"><b><i>Reg_No</span></th>      
		  <th><span class="glyphicon glyphicon-"><b><i>Days_Absent</span></th>       
		  <th><span class="glyphicon glyphicon-"><b><i>Days_Present</span></th> 
		  <th><span class="glyphicon glyphicon-"><b><i>Attendance%</span></th> 
		  <th><span class="glyphicon glyphicon-"><b><i>Status</span></th> 
		  
		  		  
</tr>
 </thead>

<tbody> 
<?php

while($row = mysqli_fetch_array($query)){
	$stdid = $row["studentID"];
	$status = $connect->query("SELECT * FROM attendance INNER JOIN staff_course ON staff_course.staff_courseID = attendance.staff_courseID WHERE studentID = '".$stdid."' AND courseID = '".$_POST["report_course"]."'") or die($connect->error);
	
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
 