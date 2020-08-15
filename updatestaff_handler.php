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
	
$sql= "update staff set staffID=?,Firstname=?,Lastname=?,address=?,email=?,phone=?,Gender=?,DOB=? where staffID=?";
    $stmt=$db_con->prepare($sql);
    $stmt->execute(array($stID,$fn,$ln,$ad,$em,$ph,$ge,$dob));
        header('location:staffview.php');
	}else{
		header('location:updatestaff.php');
}
?>

