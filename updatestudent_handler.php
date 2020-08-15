?
<?php
include 'connection.php';
session_start();
if(isset($_POST['SUBMIT'])){
	$stID=$_POST['oldcode'];
	$fn=$_POST['USERNAME'];
	$ln=$_POST['FIRSTNAME'];
	$ad=$_POST['MIDDLENAME'];
	$em=$_POST['ADDRESS'];
	$ph=$_POST['EMAIL'];
	$ge=$_POST['PHONE'];
	$dob=$_POST['GENDER'];
	$stmt=$db_con->update student set stID=?,Firstname=?
    $stmt=$db_con->prepare($sql);
    $stmt->execute(array($stID,$fn,$ln,$ad,$em,$ph,$ge,$dob));
        header('location:viewstudent.php');
	}else{
		header('location:update_student.php');