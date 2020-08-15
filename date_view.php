<br/><br/>



<?php
session_start();
if(!isset($_SESSION["name"])){
	header("location:index.php");
}
include_once("connection.php");

if(isset($_POST["view_attendance"])){
	
	$date= $_POST["date"];
	$course= $_POST["course"];
	
	
	$query = $connect->query("SELECT * FROM student INNER JOIN attendance INNER JOIN staff_course ON student.studentID = attendance.studentID AND staff_course.staff_courseID = attendance.staff_courseID WHERE courseID = '".$course."' AND Date = '".$date."'") or die(mysqli_error($connect));

}
elseif(isset($_GET["date"])){
	$date= $_GET["date"];
	$course= $_GET["course"];
	$query = $connect->query("SELECT * FROM student INNER JOIN attendance INNER JOIN staff_course ON student.studentID = attendance.studentID AND staff_course.staff_courseID = attendance.staff_courseID WHERE Date = '".$date."' AND courseID = '".$course."'") or die(mysqli_error($connect));

}


?>











<html>
     <head>
	      <title>MY TABLE</title>
	
    <link rel="stylesheet" href="style/style.css" type="text/css">
	<link rel="stylesheet" href="style/bootstrap.css" type="text/css">
	
	
	
	
	
	
	</head>
<body>

       <br><br>
	   
	   <div style="background-color:write; width:90%;height:655px; 
margin:auto;border:5px solid  #38ACEC  ;border-radius:10px;">
	  
<div class="" id="body" style="; width:98%;height:669px; margin:auto;">

	<div class="row" style="border:0px solid;background-color:#ADD8E6;min-height:150px;">
			
			<div id="leftlogo" ><img src="image/suza1.jpg" width="160px"     class="img-circle"></div>

         
		 <div id="title" ><i><br>Student Attendance Management System </div>


			
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
		     
	<form action="edit_status_handler.php" method = "post">
	
	      <div class="container col-md-12">
          <div class="panel panel-info">

          <div class="panel-heading">
	         <center><i><b>View-Attendance</b></i></center>
          </div>
<table class="table table-hover">  
 <thead> 
<tr>      
          <th><span class="glyphicon glyphicon-user">Student Name</span></th>
          <th><span class="glyphicon glyphicon-asterisk">Reg No</span></th>	
          <th><span class="glyphicon glyphicon-ok">Attendance</span></th>			  
</tr>
 </thead> 

<tbody> 
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
<tr>
<td><input class="form-control" type="text" readonly value="<?php echo $row["Firstname"]." ".$row["lastname"]; ?>"></td>
<td><input class="form-control" type="text" name="student[]" readonly value="<?php echo $row["studentID"] ?>"></td>
<td style="display: none;"><input class="form-control" type="text" name="course[]" value="<?php echo $course; ?>"></td>
<td style="display: none;"><input class="form-control" type="text" name="date[]" value="<?php echo $date; ?>"></td>

<td><select class="form-control" name="status[]" required>
   			
			 <option><?php echo $status; ?></option>
			 <option>Present</option>
			 <option>Absent</option>
</select>
</td>


							
							
							
							<!--you must identify it so be known when you edit-->




</tr>
<?php
$i++;
}
?>
</tbody> 

 
 </table>
 <div class="row">
			<div class="col-md-3"> </div> 	<!--empty to bottom-->
			<div class="col-md-5">  </div>	<!--emply to bottom-->
			
			<div class="col-md-3"> <button type="submit" class="btn btn-info" name="edit_attendance">Update</button> </div>
			
			</div>
 </form>
					
			</div>
					
			
		</div>
	</div>
	
	</div>
	
<div class="row"  style="border:px solid;background-color:#ADD8E6;height:20px">
	  <center>student management @.sayko</center>
	</div>
	
	

	
</div>

</body>
</html>    