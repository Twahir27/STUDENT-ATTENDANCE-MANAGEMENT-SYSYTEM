<?php
session_start();
if(!isset($_SESSION["name"])){
	header("location:index.php");
}
include_once("connection.php");

if(isset($_POST["login"])){
	
	$course = $_POST["course"];
	
	$staff=$_SESSION["name"];
	$date= $_POST["date"];
	
	$query=$connect->query("SELECT staff_course.staff_courseID,student_course.studentID,student_course.courseID FROM 
	staff_course inner join course inner join student_course ON course.courseID = staff_course.courseID AND course.courseID = student_course.courseID WHERE staff_course.staff_courseID = '".$course."'") or die(mysqli_error($connect));

	

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
	   
	   <div style="background-color:write; width:90%;height:649px; 
margin:auto;border:5px solid  #38ACEC  ;border-radius:10px;">
	  
<div class="" id="body" style="; width:98%;height:669px; margin:auto;">

	<div class="row" style="border:0px solid;background-color:#ADD8E6;min-height:150px;">
			
			<div id="leftlogo" ><img src="image/suza1.jpg" width="160px"     class="img-circle"></div>

         
		 <div id="title" ><i><br>Student Attendance Management System </div>


			
	</div>
	
		
	
	
	<div class="row">	
	
		<div class="col-md-2" style="border:0px solid;margin:0;padding:0;background-color:#EBF4FA;min-height:470px">
		<div     id="list">
			<?php
					require_once("linki.php");
					?>
		</div>	
		
		</div>
		
		<div class="col-md-10" style="border:0px solid;height:470px;overflow-y: scroll;">
		
		     
		
			<?php
					require_once("form/view_attendance.php");
					
					?>
					
			
					
			
		</div>
	</div>
	
	
	
<div class="row"  style="border:px solid;background-color:#ADD8E6;height:20px">
	  <center>student management @.sayko</center>
	</div>
	
	
	
	

</div>
</body>
</html>    