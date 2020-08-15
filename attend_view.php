

<br/></br>


<div class="panel panel-info">
<div class="panel-heading">


<center><i>
View Attendance</i></center>
</div>

<?php
include_once("connection.php");

$z = $_SESSION["name"];
$que = $connect->query("select staff_courseID from staff_course where staffID = '$z'");
$y = mysqli_fetch_array($que);
$x = $y['staff_courseID'];
$query = $connect->query("SELECT DISTINCT Date FROM attendance where staff_courseID = '$x' ORDER BY Date") or die(mysqli_error($connect));


?>

<table class="table table-hover">  
 <thead> 
<tr>      
            
		    
           
          <th><span class="glyphicon glyphicon-calendar">DATE</span></th>
		  <th><span class="glyphicon glyphicon-asterisk">ATTENDANCE</span></th>
    		  	  
</tr>
 </thead> 
<?php
$i=1;
while($row=mysqli_fetch_array($query)){
	
?>
<tbody> 
<form action="date_view.php" method = "post">
<tr>
<td><input class="form-control" type="text" name="date" readonly value="<?php echo $row["Date"] ?>"></td>
<td><input class="form-control btn-primary" type="submit" value="View Attendance" name="view_attendance"></td>
</tr>
 </form>
</tbody> 
<?php
$i++;
}
?>

 </table>

 
 </div>