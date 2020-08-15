<?php
if(isset($_POST["login"])){
	$course=$_POST["course"];
	$student=$_POST["student"];
	
	
	
	
	include_once("connection.php");
	
	
	$checkExist = $connect->query("SELECT * FROM student_course WHERE studentID = '".$student."' AND courseID = '".$course."'") or die(mysqli_error($connect));
	if(mysqli_num_rows($checkExist) === 0){
		$connect->query("INSERT INTO student_course values('','$course','$student')") or die(mysqli_error($connect));
		header("location:student_course.php?success=Course Enrolled Successfull");
	}
	else{
		header("location:student_course.php?error=$course");
	}

}


?>




