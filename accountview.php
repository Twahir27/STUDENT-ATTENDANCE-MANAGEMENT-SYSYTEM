<br/><br/>



<?php
include_once("connection.php");
$query=$connect->query("SELECT *FROM users");
$n=mysqli_num_rows($query);
//echo $n;
?>
<table id="attend" class="display nowrap" cellspacing="0" width="100%">	
 <thead> 
<tr>      <th><span class="glyphicon glyphicon-asterisk">No</span></th>  
		  <th><span class="glyphicon glyphicon-user">Username</span></th>      
		  <th><span class="glyphicon glyphicon-lock">password</span></th>       
		  <th><span class="glyphicon glyphicon-user">Usertype</span></th> 
		   
		  <th><span class="glyphicon glyphicon-trash">Delete</span></th>		  	  
</tr>
 </thead>
<tbody>  
<?php
$i=1;
while($row=mysqli_fetch_array($query)){
?>

<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row["username"] ?></td>
<td><?php echo $row["password"] ?></td>
<td><?php echo $row["usertype"] ?></td>

							<!--you must identify it so be known when you edit-->



<td>
<a href="deleteusers.php?
users=<?php 
echo $row["username"] ?>"onclick="return confirm('Are you sure you want to delete?<?php echo $row["username"] ?> ');">delete</a>
</td>
</tr>


<?php
};
$i++;
if ($i==6){

}
?>
</tbody> 



 </table>
