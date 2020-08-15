<?php
if(isset($_POST["login"])){
	$id=$_POST["id"];
	$tittle=$_POST["tittle"];
	$year=$_POST["YEAR"];
	$attendance=$_POST["attendance"];
	$semister=$_POST["SEMISTER"];
	
	
	$codei=$_POST["YEAR"];
	$tittlei=$_POST["SEMISTER"];
	
	
	include_once("connection.php");
	
	
	
	$db_con->query("INSERT INTO course values('$id','$tittle','$year','$attendance','$semister')");
		
	
	}

header("location:course.php?success = Course Add Successfull");
?>




