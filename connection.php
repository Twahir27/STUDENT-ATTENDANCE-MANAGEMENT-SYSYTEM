

  <?php

try{
    define('username', 'root');
    define('password', '');
    $db_con= new PDO('mysql:host=localhost;dbname=attendance',username,password);
    $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db_con->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
   //echo'succssesiful';
}
catch(PDOException $ex){
    die('connection fail'.$ex->getMessage());
}
?>
