


<form action="reg_handler.php" method="post" autocomplete = "off" >
<div class="container col-md-12">
<div class="panel panel-info">

<div class="panel-heading">
<center><b><i>User-Registration</i></b></center>
</div>
			<div class="panel-body">
			
			<form>
			<div class="row">
			<div class="col-md-4">
			<span class="glyphicon glyphicon-user"></span>
			<label for="RegID" class="control-label"> Username:</label> 
			</div>
					
			<div class="col-md-4">
						<span class="glyphicon glyphicon-user"></span>
						<label> Usertype:</label> 
						</div>
			
			
			<div class="col-md-4">
			<span class="glyphicon glyphicon-user"></span>
			<label for="RegID" class="control-label"> Lastname:</label> 
			</div>
			
			</div>
			
			
			<div class="row">
			<div class="col-md-4"> <input type="text" class="form-control" name="USERNAME" placeholder="Username" required> </div>
			<div class="col-md-4">
			 <select class="form-control" name="USERTYPE"> <option>--select your Role--</option>
										
										 
										<option value="student">Student</option> 
										
			</select>

			</div>
			
			<div class="col-md-4"> <input type="text" class="form-control" name="LASTNAME" placeholder="Lastname" required> </div>
			</div>
			
			
						<div class="row">
			<div class="col-md-4">	
			<span class="glyphicon glyphicon-user"></span>
			<label for="RegID" class="control-label"> Firstname:</label> 
			</div>
			
			
			<div class="col-md-4">
			<span class="glyphicon glyphicon-user"></span>
			<label for="RegID" class="control-label"> MiddleName:</label> 
			</div>
			
			<div class="col-md-4">
			<span class="glyphicon glyphicon-home"></span>
			<label for="RegID" class="control-label"> Address:</label> 
			</div>
						
						</div>
			<div class="row">
			
			 <div class="col-md-4"> <input type="text" class="form-control" name="FIRSTNAME" placeholder="FirstName" required> </div>
			<div class="col-md-4"> <input type="text" class="form-control" name="MIDDLENAME" placeholder="MiddleName" required> </div>
			<div class="col-md-4"> <input type="text" class="form-control" name="ADDRESS" placeholder="address" required> </div>
			
			
			</div>
			
			
						<div class="row">
						<div class="col-md-4">
						<span class="glyphicon glyphicon-calendar"></span>
						<label for="RegID" class="control-label"> Date-Of-Birth:</label> 
						</div>
						
						<div class="col-md-4">
						<span class="glyphicon glyphicon-user"></span>
						<label> Gender:</label> 
						</div>
						
					<div class="col-md-4">
			<span class="glyphicon glyphicon-earphone"></span>
			<label for="RegID" class="control-label"> Phone:</label> 
			</div>
					
					
					
						</div>
			
			<div class="row">
			
			<div class="col-md-4"> <input type="date" placeholder="YYYY-MM-DD" class="form-control" name="DATE"  required> </div>
			<div class="col-md-4"> 
			
			 <select class="form-control" name="GENDER"> 
										<option>--select gender--</option>
										<option value="Male">MALE</option>
										<option value="Female">FEMALE</option> 
										
			</select>
			
			</div>
			
			
			
			
			
			<div class="col-md-4"> <input type="number" class="form-control" name="PHONE" placeholder="Phone" required> </div>
						
			</div>
			
			
			<div class="row">
						<div class="col-md-4">
						<span class="glyphicon glyphicon-envelope"></span>
						<label for="RegID" class="control-label"> Email:</label> 
						</div>
						
						</div>
			
			<div class="row">
			<div class="col-md-4"> <input type="email" class="form-control" name="EMAIL" placeholder="example@gmx.us" required> </div>
			
			
			<div class="col-md-4">  </div>
			<div class="col-md-3"> <button type="submit" class="btn btn-primary" name="SUBMIT">Submit</button>  </div>
			
			   </form>	
			
			</div>
		
			</div>
			
			
			
			
			
				
	</div>
	</div>

 

</form>