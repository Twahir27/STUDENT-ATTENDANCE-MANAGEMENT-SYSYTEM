<?php
session_start();
include_once("connection.php");
if(isset($_POST["edit_attendance"])){
	
	$staff = $_SESSION["name"];
	$staff1 = $connect->query("SELECT staff_courseID FROM staff_course WHERE staffID = '".$staff."'") or die(mysqli_error($connect));
	$id = count($_POST["status"]);
	$staff_course_id = mysqli_fetch_array($staff1)["staff_courseID"];
	
	
	for ($i = 0;$i < $id;$i++){
		$student = $_POST["student"][$i];
		$status = $_POST["status"][$i];
		$date = $_POST["date"][$i];
		
		
		$connect->query("UPDATE attendance SET Status = '".$status."' WHERE studentID = '".$student."' AND Date = '".$date."' ") or die(mysqli_error($connect));
	}
	$date = $_POST["date"][0];
	$course = $_POST["course"][0];
	header("location:date_view.php?date=$date&course=$course");
	
	
	
	//$connect->query("INSERT INTO attendance values('','$staff','$date')");
		
	
	}