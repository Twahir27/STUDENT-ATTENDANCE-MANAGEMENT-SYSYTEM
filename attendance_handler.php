<?php
session_start();
include_once("connection.php");

if(isset($_POST["add_attendance"])){
	
	$id = count($_POST["status"]);
	$staff=$_SESSION["name"];
	
	
	
	for ($i = 0;$i < $id;$i++){
		$staff_course = $_POST["staff_course"][$i];
		$student = $_POST["student"][$i];
		$status = $_POST["status"][$i];
		$date = $_POST["date"][$i];
		
		$checkExist = $connect->query("SELECT * FROM attendance INNER JOIN staff_course ON staff_course.staff_courseID = attendance.staff_courseID WHERE Date = '".$date."' AND studentID = '".$student."' AND staff_course.staffID = '".$staff."' AND staff_course.staff_courseID = '".$staff_course."' ") or die(mysqli_error($connect));
		
		if(mysqli_num_rows($checkExist) === 0){
			$add_data = $connect->query("INSERT INTO attendance values('','".$staff_course."','".$student."','".$date."','".$status."')") or die(mysqli_error($connect));
		}
		
	}
	//$date1 = $_POST["date"][0];

	header("location:select_course.php?success = Attendance Successfull");
	
	
	
	//$connect->query("INSERT INTO attendance values('','$staff','$date')");
		
	
	}
?>









