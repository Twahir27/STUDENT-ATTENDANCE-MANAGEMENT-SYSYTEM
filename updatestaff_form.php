<?php
		$staff=$_GET["edit_student"];
		$firstname=$_GET["edit_firstname"];
		$lastname=$_GET["edit_lastname"];
		$address=$_GET["edit_address"];
		$date=$_GET["edit_date"];
		$gender=$_GET["edit_gender"];
		$phone=$_GET["edit_phone"];
		$email=$_GET["edit_email"];
	?>

<br/><br/>

<form action="updatestaff_handler.php" method="post">
<div class="container col-md-12">
<div class="panel panel-info">

<div class="panel-heading">
	<center>User-Registration </center>
</div>
			<div class="panel-body">
			
			<form>
			<div class="row">
			<div class="col-md-4">
			<span class="glyphicon glyphicon-user"></span>
			<label for="RegID" class="control-label">staffID:</label> 
			</div>
					
			
			
			
			</div>
			
			
			<div class="row">
			<div class="col-md-4"> 
			<input type="text" readonly value ="<?php echo $staff ?>" name="oldcode"/>
			<input type="text" value="<?php echo $staff ?>"  class="form-control" name="USERNAME" placeholder="Username" required> </div>
			
			
			
			</div>
			
			
						<div class="row">
			<div class="col-md-4">	
			<span class="glyphicon glyphicon-user"></span>
			<label for="RegID" class="control-label"> Firstname:</label> 
			</div>
			
			
			<div class="col-md-4">
			<span class="glyphicon glyphicon-user"></span>
			<label for="RegID" class="control-label"> Lastname:</label> 
			</div>
			
			<div class="col-md-4">
			<span class="glyphicon glyphicon-user"></span>
			<label for="RegID" class="control-label"> Address:</label> 
			</div>
						
						</div>
			<div class="row">
			
			 <div class="col-md-4"> <input type="text" value="<?php echo $firstname ?>" class="form-control" name="FIRSTNAME" placeholder="FirstName" required> </div>
			<div class="col-md-4"> <input type="text" value="<?php echo $lastname ?>"   class="form-control" name="MIDDLENAME" placeholder="MiddleName" required> </div>
			<div class="col-md-4"> <input type="text" value="<?php echo $address ?>"  class="form-control" name="ADDRESS" placeholder="address" required> </div>
			
			
			</div>
			
			
						<div class="row">
						<div class="col-md-4">
						<span class="glyphicon glyphicon-user"></span>
						<label for="RegID" class="control-label"> Date-Of-Birth:</label> 
						</div>
						
						<div class="col-md-4">
						<span class="glyphicon glyphicon-user"></span>
						<label> Gender:</label> 
						</div>
						
					<div class="col-md-4">
			<span class="glyphicon glyphicon-user"></span>
			<label for="RegID" class="control-label"> Phone:</label> 
			</div>
					
					
					
						</div>
			
			<div class="row">
			
			<div class="col-md-4"> <input type="date" value="<?php echo $date ?>"  class="form-control" name="DATE" placeholder="Date" required> </div>
			<div class="col-md-4"> 
			
			 <select class="form-control" value="<?php echo $gender ?>"  name="GENDER"> 
										
										<option value="Male">MALE</option>
										<option value="Female">FEMALE</option> 
										
			</select>
			
			</div>
			
			
			
			
			
			<div class="col-md-4"> <input type="number" value="<?php echo $phone ?>"  class="form-control" name="PHONE" placeholder="Phone" required> </div>
						
			</div>
			
			
			<div class="row">
						<div class="col-md-4">
						<span class="glyphicon glyphicon-user"></span>
						<label for="RegID" class="control-label"> Email:</label> 
						</div>
						
						</div>
			
			<div class="row">
			<div class="col-md-4"> <input type="email" class="form-control" value="<?php echo $email ?>"  name="EMAIL" placeholder="example@gmx.us" required> </div>
			
			
			<div class="col-md-4">  </div>
			<div class="col-md-3"> <button type="submit" class="btn btn-success" name="SUBMIT">update staff..</button>  </div>
			
			   
			
			</div>
		
			</div>
			
			</form>
	</div>
	</div>

 

</form>