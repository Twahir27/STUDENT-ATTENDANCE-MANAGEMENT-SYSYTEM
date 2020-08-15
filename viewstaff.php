<br/><br/>

<div class="panel panel-info">
<div class="panel-heading">
<center><b><i>Staff Information</i></b></center>
</div>


<table class="table table-hover"> 
 <thead> 
<tr>      
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

$sql = "SELECT * from staff";
$statement1 = $db_con->prepare($sql);
$statement1->execute();
$row1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
$count = 1;
foreach ($row1 as $row)
{

?>

 
 

<tbody> 
<tr>
<td><?php echo $row["staffID"] ?></td><td><?php echo $row["Firstname"] ?></td><td><?php echo $row["Lastname"] ?></td>
<td><?php echo $row["address"] ?></td><td><?php echo $row["DOB"] ?></td><td><?php echo $row["email"] ?></td><td><?php echo $row["phone"] ?></td>

<td>
<a href="updatestaff.php?edit_student=<?php echo $row["staffID"] ?>&
 edit_firstname=<?php echo $row["Firstname"] ?>&
 edit_lastname=<?php echo $row["Lastname"] ?>& 
 edit_address=<?php echo $row["address"] ?>&
 edit_date=<?php echo $row["DOB"] ?>&
 edit_gender=<?php echo $row["Gender"] ?>&
 edit_phone=<?php echo $row["phone"] ?>&
 edit_email=<?php echo $row["email"] ?>&">

<span class="glyphicon glyphicon-edit"></span>
 </a>
 
 </td>

 <td>
<a href="deletestaff.php?
Delstaff=<?php 
 echo $row["staffID"] ?> "onclick="return confirm('Are you sure you want to delete?<?php echo $row["staffID"] ?> ');"><span class="glyphicon glyphicon-trash"></span></a>
</td>
</tr>






</tbody> 
<?php $count++;
} ?>

 </table>
 
 </div>