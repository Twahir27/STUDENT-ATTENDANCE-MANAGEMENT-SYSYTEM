

<?php
include 'connection.php';
session_start();

if (isset($_POST['login'])){
    
    $uName=$_POST['name'];
    $upass=$_POST['pass'];
    $sql='SELECT * FROM users where username=? and password=?';
    $statement=$db_con->prepare($sql);
    $statement->execute(array($uName,$upass));
    $row =$statement->fetchAll(PDO::FETCH_ASSOC);
    
    if($row){
        foreach ($row as $set){
            $_SESSION['name']=$set['username'];
            $_SESSION['usertype']=$set['usertype'];
			
			
			
			
			
			
			
            
            header('location:Homepage.php');
        }
    }
  else {
         header('location:index.php');
		
    }
 }


?>

