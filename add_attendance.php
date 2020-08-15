
<br/><br/>
<div class="row">
			<div class="col-md-7"> </div> 	
			<div class="col-md-2">  </div>	
			
			
			
			</div>

<form action="attendance_view.php" method="post">

<div class="container col-md-9">
<div class="panel panel-info ">

<div class="panel-heading">

          <center><i><b>Attendance</b><i></center>
		  
		  </div>
			<div class="panel-body">
			
		
			
		               <div class="row">
						 
						
						<div class="col-md-4">
						<span class="glyphicon glyphicon-adjust"></span>
						<label> Select_Course:</label> 
						</div>
						
						<div class="col-md-4">
						<span class="glyphicon glyphicon-calendar"></span>
						<label for="RegID" class="control-label">Select_Date:</label>
						</div>
						
						</div>
						 
						</div>
						
			<div class="col-md-4">
			
			<select class="form-control" name="course" required>
			
			 <option></option>
			<?php
			include_once("connection.php");
			$name = $_SESSION["name"];
			$query=$connect->query("SELECT *FROM staff_course WHERE staffID='$name'");						
			while($row=mysqli_fetch_array($query)){
			?>
			<option value="<?php echo $row ['staff_courseID'] ?>">  <?php echo $row['courseID']?> </option>
		<?php
		}
		?>
			
			</select>
			
			 </div>
			
			<div class="col-md-4"> <input type="date" class="form-control"
			placeholder="Date" name="date" required> </div>
						
			<br/><br/><br/>
						
			<div class="row">
			<div class="col-md-5"> </div> 	<!--empty to bottom-->
			<div class="col-md-2">  </div>	<!--emply to bottom-->
			
			<div class="col-md-5"> <button type="submit" class="btn btn-info" name="login">SUBMIT</button> </div>
			
			</div>
			 
			
			
			
	</div>
			
			
 </div>


</form>
			
			
		
			
			
			
			
			
			
			
			
			
			
			
			
						
						
			
			
			
			
						
						
			
			
			
						
			
			
			
			
									
			

