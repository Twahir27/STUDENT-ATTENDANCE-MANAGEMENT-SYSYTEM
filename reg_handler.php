<?php
include_once("connection.php");
if(isset($_POST["SUBMIT"])){
	
	$id=$_POST["USERNAME"];
	$usertype=$_POST["USERTYPE"];
	$lastname=$_POST["LASTNAME"]; 
	$enc=sha1($lastname);
	
	$firstname=$_POST["FIRSTNAME"];
	$middlename=$_POST["MIDDLENAME"];
	$address=$_POST["ADDRESS"];
	
	$dob=$_POST["DATE"];
	$gender=$_POST["GENDER"];
	$phone=$_POST["PHONE"];
	
	$email=$_POST["EMAIL"];
	
	
	
	$connect->query("INSERT INTO users values('$id','$enc','$usertype','','','notchanged')");
	
	if($usertype=='student'){
		$connect->query("INSERT INTO student values('$id','$firstname','$middlename','$address','$email','$phone',
		'$gender','$dob')");
	                       }
	else 
			{
				$connect->query("INSERT INTO staff values('$id','$firstname','$middlename','$address','$email','$phone',
				'$gender','$dob')");

			}
	}
	
	header("location:reg.php?success = register Successfull");

	if(isset($_POST["upload"]))
			{

			echo "uploaded";
			 $file = $_FILES["file"]["tmp_name"];
			 $file_open = fopen($file,"r");
					 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
					 {
					  $firstname = $csv[0];
					  $lastname = $csv[1];
					  $id = $csv[2];
					  $usertype="student";
					  
					  $connect->query("INSERT INTO users values('$id','$lastname','$usertype','','','notchanged')");
	
	
					$connect->query("INSERT INTO student values('$id','$firstname','$lastname','','','','','')");
					}
					  
			      
            

	

header("location:reg.php?success = register Successfull");


}



?>