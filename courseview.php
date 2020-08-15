<br/><br/>


<div class="panel panel-info">
<div class="panel-heading">
<center><i><b>All Courses</b></i></center> 
</div>


<?php
include_once("connection.php");
$query=$connect->query("SELECT *FROM course");					
$n=mysqli_num_rows($query);
echo $n;
?>
<table class="table table-hover" id="table" width="100%">  
  
 <thead> 
<tr>       
		  <th>No</th>  
		  <th>CourseID</th>      
		  <th>CourseTittle</th>       <!--its heading about my list at the next comment-->
		  <th>CourseYear</th> 
		  <th>Attendance</th> 
		  <th>Semister</th> 
		  <th>Delete</th>
		  		  
</tr>
 </thead>
<tbody>  
<?php
$i=1;
while($row=mysqli_fetch_array($query)){
?>

<tr>
 <td><?php echo $i; ?></td>
 <td><?php echo $row["courseID"] ?></td>
 <td><?php echo $row["course_Name"] ?></td>			<!--show the list of data in a Tables-->
 <td><?php echo $row["course_Year"] ?></td>
<td><?php echo $row["Attendance"] ?>%</td>
<td><?php echo $row["semister"] ?></td>





<!-- EDIT CODE STARTING HERE ITS COMPLEX-->

			   <!--its a page-->
 
							<!--you must identify it so be known when you edit-->

<!-- DELETE CODE STARTING HERE -->

<td>
<a href="deletecourse.php?
code=<?php 

//pass data into url

echo $row["courseID"] ?>"onclick="return confirm('Are you sure you want to delete?');"><span class="glyphicon glyphicon-trash"></span></a>
 <!-- confirm before delete -->
</td>
</tr>
</tbody> 
<?php
$i++;
}
?>
</table>
 
 </div>
 