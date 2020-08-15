<?php
if(isset($_POST["login"])){
	$course=$_POST["course"];
	$staff=$_POST["staff"];
	
	
	
	include_once("connection.php");
	
	
	
	$connect->query("INSERT INTO staff_course values('','$course','$staff')");
		
	
	}

header("location:enroll_course.php?success = Course Enrolled Successfull");
?>




