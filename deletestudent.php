
<?php
include("connection.php");
$id = $_GET['student'];
//echo $id;
$sql = "delete from student where studentID= ?";
$stmt = $db_con->prepare($sql);
$stmt->execute(array($id));

header("Location:viewstudent.php");

?>