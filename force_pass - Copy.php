<?php
session_start();
if(!isset($_SESSION["name"])){
	header("location:index.php");
}

include("connection.php");

if(isset($_POST["password"])){
	$checkExist = $connect->query("SELECT * FROM users WHERE username = '".$_SESSION["name"]."' AND password = '".$_POST["password"]."'") or die($connect->error);

	if($checkExist->num_rows === 0){
		$pass = $_POST["password"];
		
		$update = $connect->query("UPDATE users SET password = '".$pass."', default_pass = 'changed' WHERE username = '".$_SESSION["name"]."' ") or die($connect->error);
		
		if($connect->affected_rows ===1){
			header("location:Homepage.php");
		}
		else{
			echo "Please Enter Different Password!!!";
		}
		
	}
	elseif($checkExist->num_rows === 1){
		echo "not allow";
	}
}

?>

<html>
<head>
<style type="text/css">
#alab{
	margin-left: 20px; 
}
</style>
<meta charset=utf-8>
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta name="viewport"content="width=device-width,initial-scale=1">
<meta name=description"content="A basic hello">
<link href="css/bootstrap.min.css" rel="stylesheet">





<link type="text/css" rel="stylesheet" href="css/mwanzo.css">

</head>
<body>

<br/><br/><br/><br/>

<div style="background-color:white; width:65%;height:450px; 
margin:auto;border:5px solid  #38ACEC  ;border-radius:10px;">

<br><br>
<br /><br />
<div id="a">
<div id="aa">Students Attendance Management System</div>

					
					
					
					 
											<!--nothing here1--> 
					
						
						
										
					
					
					
						<div id="h">
						<center>State university of Zanzibar</center></div>	<!--word suza--> 
							 </br>
					<div id="c">  <img src="image/suza.jpg" width="250px"     class="img-circle"> </div> 
					<br>
					<br>
<?php


$getUser = $connect->query("SELECT * FROM users WHERE username = '".$_SESSION["name"]."'") or die($connect->error);

while($row = $getUser->fetch_array()){
?>
    <div class="container">
	<form action="" method="post">
		
			
			
						 
						<span class="glyphicon glyphicon-adjust"></span>
						<label for="RegID" class="control-label">Please Enter Different Password!!!</label>
						 
						
						
						
						</br>
						
						<div class="col-md-4">
				<input type="text" class = "form-control" name="password" value="<?php echo $row["password"];?>" required>
				      </div>
			
			
				
				<input type="submit" name="change" value="Change">
				
			
		
	</form>
	</select>
	</div>
<?php
}
?>
</body>
</html>