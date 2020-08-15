<br/><br/>

<div class="panel panel-info">
     
   <div class="panel-heading">
       <center><b><i>Course Enrollment<center><b><i>   <!--Hearding-->
   </div>
   
   <?php
include_once("connection.php");
$query=$connect->query("SELECT *FROM course");
$n=mysqli_num_rows($query);

?>



<table class="table table-hover">


  
  
 <thead> 
 <tr>
  <form action="#" method="post">
         
                         <div class="row">
						 <div class="col-md-4">
						<span class="glyphicon glyphicon-"></span>
						<label for="RegID" class="control-label">Search by Course Code:</label>
						 
						</div>
						</div>
 <td> 
 
    <div class="row">
      <div class="col-md-4">
	<input list="alaba" class="form-control" name="course" required style="width: 200px;">
	<datalist id = "alaba">
		
		<?php
			include_once("connection.php");
			$query=$connect->query("SELECT * from course");						
			while($row=mysqli_fetch_array($query)){
			?>
			<option value="<?php echo $row ['courseID'] ?>"> <?php echo $row['courseID'] ?></option>
		<?php
		}
		?>

	</datalist>
</div>
</td>
<td>
<input class="form-control" type="submit" value="Search" style="width: 200px;">
</td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
</div>
</form>
</tr>
<?php

if(isset($_POST["course"])){
?>

<tr>       
		  <th><b><span class="glyphicon glyphicon-"><b><i>Course Code</i></span></b></th>  
		  <th><span class="glyphicon glyphicon-"><b><i>Course Name</span></th>
          <th><span class="glyphicon glyphicon-"><b><i>Select</span></th>		  
		  
		  
		  
		  		  
</tr>
 </thead>

<tbody> 
<?php
$i=1;
while($row=mysqli_fetch_array($query)){
	
?>
<tr>
	<td><?php echo $row["courseID"] ?></td>
    <td><?php echo $row["course_Name"] ?></td>
	
</tr>
<?php
}

?>
</tbody> 
<?php
$i++;
}
?>

 
 </table>
 
 </div>
 <div class="row">
			<div class="col-md-2"> </div> 	<!--empty to bottom-->
			<div class="col-md-8">  </div>	<!--emply to bottom-->
			
			<div class="col-md-2"> <button type="submit" class="btn btn-info" name="login">Enroll Course</button> </div>
			
			</div> 
 
 