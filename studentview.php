<br/><br/>



<div class="panel panel-info">
<div class="panel-heading">
<center><b><i>Student Information</i></b></center>
</div>

<table class="table table-hover"> 
 <thead> 
 
		  <th><span class="glyphicon glyphicon-adjust">Reg.No</span></th>      
		  <th><span class="glyphicon glyphicon-user">Firstname</span></th>       
		  <th><span class="glyphicon glyphicon-user">Lastname</span></th> 
		  <th><span class="glyphicon glyphicon-home">Address</span></th>
		  <th><span class="glyphicon glyphicon-calendar">Date</span></th> 		  
		  <th><span class="glyphicon glyphicon-envelope">Email</span></th> 
		  <th><span class="glyphicon glyphicon-earphone">Phone</span></th> 
		   <th><span class="glyphicon glyphicon-edit">Edit</span></th>
		  <th><span class="glyphicon glyphicon-trash">Delete</span></th>
		  
		 	  
</tr>
 </thead> 
<?php
 include_once("connection.php");
$sql = "SELECT * FROM `student";
$statement1 = $db_con->prepare($sql);
$statement1->execute();
$row1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
$count = 1;
foreach ($row1 as $row)
{

?>
<tbody> 
<tr>
<td><?php echo $row["studentID"] ?></td><td><?php echo $row["Firstname"] ?></td><td><?php echo $row["lastname"] ?></td>
<td><?php echo $row["Address"] ?></td> <td><?php echo $row["DOB"] ?></td>
 <td><?php echo $row["Email"] ?></td><td><?php echo $row["Phone"] ?></td>

<td>

<a href="update_student.php?edit_student=<?php echo $row["studentID"] ?>&
 edit_firstname=<?php echo $row["Firstname"] ?>&
 edit_lastname=<?php echo $row["lastname"] ?>& 
 edit_address=<?php echo $row["Address"] ?>&
 edit_date=<?php echo $row["DOB"] ?>&
 edit_gender=<?php echo $row["Gender"] ?>&
 edit_phone=<?php echo $row["Phone"] ?>&
 edit_email=<?php echo $row["Email"] ?>&">
 
 <span class="glyphicon glyphicon-edit"></span>

</a>

</td>
							<!--you must identify it so be known when you edit-->

<td>
<a href="deletestudent.php?
student=<?php 
echo $row["studentID"] ?> "onclick="return confirm('Are you sure you want to delete?<?php echo $row["studentID"] ?> ');"><span class="glyphicon glyphicon-trash"></span></a>
</td>

 
</tr>
</tbody> 
<?php $count++;
} 
	
?>
 
 </table>
 
 </div>