<?php
session_start();
include 'connection.php';

        $username = $_POST['USERNAME'];
        $password = $_POST['OLD'];
        $newpassword = $_POST['NEW'];
		$confirmpassword = $_POST['CONFIRM'];
        
        $result =$connect-> query("SELECT password FROM users WHERE 
username='$username'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
       
        {
        echo "You entered an incorrect password";
        }
        if($newpassword=$confirmpassword)
        $sql=$connect->query("UPDATE users SET password='$newpassword' where 

 username='$username'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }
	   
	   header("location:pass_change.php");
	   
      ?>