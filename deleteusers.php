
<?php
include("connection.php");
$id = $_GET['users'];
//echo $id;
$sql = "delete from users where username= ?";
$stmt = $db_con->prepare($sql);
$stmt->execute(array($id));

header("Location:viewaccount.php");

?>