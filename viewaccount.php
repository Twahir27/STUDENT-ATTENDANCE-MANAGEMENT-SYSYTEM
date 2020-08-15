<?php
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

  <?php
					include("dt/test.php");
					?>
  
  
  
</head>
<body >

       <br><br>
	   
	   <div style="background-color:write; width:90%;height:655px; 
margin:auto;border:5px solid  #38ACEC  ;border-radius:10px;">
	  
<div class="" id="body" style="; width:98%;height:669px; margin:auto;">

	<div class="row" style="border:0px solid;background-color:#ADD8E6;min-height:150px;">
			
			<div id="leftlogo" ><img src="image/suza1.jpg" width="160px"     class="img-circle"></div>

         
		 <div id="title" ><i><br>Student Attendance Management System </div>


			
	</div>
	
		
	
	
	<div class="row">	
	
		<div class="col-md-2" style="border:0px solid;margin:0;padding:0;background-color:#EBF4FA;min-height:420px">
		<div     id="list">
			<?php
					require_once("linki.php");
					?>
		</div>	
		
		</div>
		
		<div class="col-md-10" style="border:0px solid;height:475px;background-color:#F8F8FF;overflow-y: scroll;">
		
		     
		
			<?php
					require_once("form/accountview.php");
					
					?>
					
			
					
			
		</div>
	</div>
	
	
	
       <div class="row"  style="border:px solid;background-color:#ADD8E6;height:20px">
	  <center>student management @.sayko</center>
	</div>
	
	
	
	

</div>
</body>
</html>    