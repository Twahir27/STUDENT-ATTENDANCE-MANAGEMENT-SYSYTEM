

<br/></br>


<div class="panel panel-info">
<div class="panel-heading">



  <center><i><b>View Attendance</b></i></center>

</div>

<?php
include_once("connection.php");

?>
<form action="attendance_handler.php" method = "post">
<table class="table table-hover">  
 <thead> 
<tr>      
            
		    
           
         
          <th><span class="glyphicon glyphicon-asterisk">Reg_No</span></th>	
          		  
		  <th><span class="glyphicon glyphicon-calendar">Date</span></th> 
		  <th><span class="glyphicon glyphicon-ok">status</span></th>			  	  
</tr>
 </thead> 
<?php
$i=1;
while($row=mysqli_fetch_array($query)){
	
	if(isset($row["Status"])){
		$status = $row["Status"];
	}
	else{
		$status = "";
	}
	
?>
<tbody> 
<tr>
<td style="display: none;"><input type="text" value="<?php echo $row["staff_courseID"] ?>" name="staff_course[]"></td>
<td><input class="form-control" type="text" name="student[]" readonly value="<?php echo $row["studentID"] ?>"></td>
<td style="display: none;"><?php echo $row["courseID"] ?></td>
<td><input class="form-control" type="text" name="date[]" readonly value="<?php echo $date; ?>"></td>
<td>
<select class="form-control" name="status[]" required>
   			
			 <option><?php echo $status; ?></option>
			 <option>Present</option>
			 <option>Absent</option>
</select>
</td>

</tr>

</tbody> 
<?php
$i++;
}
?>
 
   </table>
 
 <div class="row">
			<div class="col-md-3"> </div> 	<!--submit  botton-->
			<div class="col-md-5">  </div>	<!--submit  botton-->
			
			<div class="col-md-3"> <button type="submit" class="btn btn-info" name="add_attendance">SUBMIT</button> </div>
			
			</div>
 </form>
 
 
 </div>
							
							
							
							




