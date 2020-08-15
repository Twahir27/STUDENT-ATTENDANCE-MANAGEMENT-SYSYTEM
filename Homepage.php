<?php
//include('connection.php');
session_start();
if(!isset($_SESSION["name"])){
	header("location:index.php");
}

?>

<html>
     <head>
	      <title>MY TABLE</title>
	
    <link rel="stylesheet" href="style/style.css" type="text/css">
	<link rel="stylesheet" href="style/bootstrap.css" type="text/css">
	</head>
<body>

         <br><br>

		 <div style="background-color:white; width:90%;height:655px; 
margin:auto;border:5px solid  #38ACEC  ;border-radius:10px;">

<div class="" id="body" style="; width:98%;height:669px; margin:auto;">

	<div class="row" style="border-radius:5px ;background-color:#ADD8E6;min-height:150px;">
			
			<div id="leftlogo" ><img src="image/alab.jpg" width="160px"     class="img-circle"></div>

         
		 <div id="title" ><br><i>Student Attendance Management System </div>


			
	</div>
	
	<div class="row">	
	
		<div class="col-md-2" style="border:0px solid;margin:0;padding:0;background-color:#EBF4FA;min-height:475px">
		<div id="list">
			<?php
					require_once("linki.php");
					?>
		</div>	
		
		
		</div>

		
		<div class="col-md-10" style="border:0px solid;min-height:475px;background-color:#E3E4FA;">
			<h4>WELCOME HOME PAGE.....</h4>
			   <center><b>You have successfully login to Student Attendance Management System</b></center></br>
			   
			   
			   
			 
			 <div class="row container-fluid" id="profile">
			 
				<div class="col-lg-3"><img src="image/z.jpg" width="170px" height="120px"></div>
				<div class="col-lg-9">
					
					
				</div>
			</div>
			
			
			 
			
			
			
			     <div id="welcomeDescription">
			
			<?php
			
			include("information.php");
			?>
			</div> 
		</div>
	</div>
	
	<div class="row"  style="border:0px solid;background-color:#ADD8E6;height:20px">
	  <center>student management @.alaba</center>
	</div>
	
</div>	
	
	

</body>
</html>    