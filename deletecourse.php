<?php
$courseID=$_GET["code"];
//echo $course_code;
include("connection.php");
$query=$connect->query("delete from course where courseID='$courseID'");
header("location:viewcourse.php");
?>
