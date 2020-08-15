<?php
session_start();
if(!isset($_SESSION["name"])){
	header("location:index.php");
}
include_once("connection.php");

if(isset($_POST["view_attendance"])){

	$course = $_POST["course"];
	

	
	
	$query = $connect->query("SELECT * FROM attendance INNER JOIN staff_course ON staff_course.staff_courseID = attendance.staff_courseID WHERE studentID = '".$_SESSION["name"]."' AND staff_course.courseID = '".$course."' ORDER BY Date ") or die(mysqli_error($connect));

	}


?>

<html>
     <head>
	      <title>MY TABLE</title>
	
    <link rel="stylesheet" href="style/style.css" type="text/css">
	<link rel="stylesheet" href="style/bootstrap.css" type="text/css">
	
	</head>
<body >

       <br><br>
	   
	   <div style="background-color:write; width:90%;height:655px; 
       margin:auto;border:5px solid  #38ACEC  ;border-radius:10px;">
	  
<div class="" id="body" style="; width:98%;height:669px; margin:auto;">

	<div class="row" style="border:0px solid;background-color:#ADD8E6;min-height:150px;">
			
			<div id="leftlogo" ><img src="image/suza1.jpg" width="160px"     class="img-circle"></div>

         
		 <div id="title" ><br>Student Attendance Management System </div>


			
	</div>
	
		
	
	
	<div class="row">	
	
		<div class="col-md-2" style="border:0px solid;margin:0;padding:0;background-color:#EBF4FA;min-height:475px">
		<div     id="list">
			<?php
					require_once("linki.php");
					?>
		</div>	
		
		</div>
		
		<div class="col-md-10" style="border:0px solid;height:475px;overflow-y: scroll;">
		
		<br/><br/>  
		
	<form action="attendance_handler.php" method = "post">
	      <div class="container col-md-12">
          <div class="panel panel-info">

          <div class="panel-heading">
	         <center><b><i>View-Attendance</i></b> </center>
          </div>
<table class="table table-hover">  
 <thead> 
<tr>      
            
		    
           			  
		  <th><span class="glyphicon glyphicon-calendar">Date</span></th> 
		  <th><span class="glyphicon glyphicon-ok">status</span></th>			  	  
</tr>
 </thead> 

<tbody> 
<?php
$i=1;

while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $row["Date"] ?></td>
<td><?php echo $row["Status"] ?></td>

</tr>
<?php
$i++;
}

if(mysqli_num_rows($query) === 0){
?>
<tr>
<td class="text-danger">No Attendance Added In This Course</td>
</tr>

<?php
}
?>
</tbody> 


 </table>
 </form>
					
			
					
			
		</div>
	</div>
	
	</div>
	</div>
<div class="row"  style="border:px solid;background-color:#ADD8E6;height:20px">
	  <center>student management @.sayko</center>
	</div>
	
	
	
	


</body>

</html> 
