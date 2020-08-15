</br></br>
	
<form method="post" action="password.php">
<div class="container col-md-12">
<div class="panel panel-info">

<div class="panel-heading">
	<center><b><i>CHANGE-PASSWORD </i></b></center>
</div>

      <div class="panel-body">
			
		<form>
            <div class="row">
			<div class="col-md-4">	
			<span class="glyphicon glyphicon-user"></span>
			<label for="RegID" class="control-label"> Your Username is:</label> 
			</div>
			
			 <div class="col-md-4">
			
			<input type="text" class="form-control"
			 name="USERNAME" value = <?php echo $name = $_SESSION["name"];?> readonly>
			
			 </div>
			
			</div>
						
					</br>	
						
			<div class="row">
			
			<div class="col-md-4">	
			<span class="glyphicon glyphicon-lock"></span>
			<label for="RegID" class="control-label">Enter Your Existing Password:</label> 
			</div>
			 
			 
			<div class="col-md-4">
			<input type="text" class="form-control" name="OLD" placeholder="Enter Your Existing Password" required> 
			</div>
			
			</div>
			
			     </br>
			
			<div class="row">
			
			<div class="col-md-4">	
			<span class="glyphicon glyphicon-lock"></span>
			<label for="RegID" class="control-label">Enter Your New Password:</label> 
			</div>
			
			
			
			
			
			<div class="col-md-4">
			<input type="text" class="form-control" name="NEW" placeholder="Enter Your New Password" required>
			</div>
			
			</div>
			
			      </br>
			
			<div class="row">
			
			<div class="col-md-4">	
			<span class="glyphicon glyphicon-lock"></span>
			<label for="RegID" class="control-label">Confirm Your  New Password:</label> 
			</div>
			
			
			
			
			
			<div class="col-md-4">
			<input type="text" class="form-control" name="CONFIRM" placeholder="Confirm Your New Password" required>
			</div>
			
			</div>
			
			<br/>
			<div class="row">
			
			<div class="col-md-3"> <button type="submit" class="btn btn-info" name="SUBMIT">Update Password</button>  </div>
			
			 </div>
			 
			</form>
			</div>
				</div>
				</div>
            </form>
  