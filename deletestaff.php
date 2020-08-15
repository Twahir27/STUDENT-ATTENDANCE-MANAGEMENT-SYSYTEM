
<?php
include("connection.php");
$id = $_GET['Delstaff'];
//echo $id;
$sql = "delete from staff where staffID= ?";
$stmt = $db_con->prepare($sql);
$stmt->execute(array($id));

header("Location:staffview.php");

?>