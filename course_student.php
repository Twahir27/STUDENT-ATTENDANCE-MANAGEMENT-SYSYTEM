<br/><br/>

<form action="student_enroll_handler.php" method="post">

<div class="container col-md-9">
<div class="panel panel-info ">

<div class="panel-heading">

   <center><b><i>Course Enrollment</i></b><center>
   
   </div>
			<div class="panel-body">
			<?php
			if (isset($_GET['error'])){
				
				?>
				<label> <p class="text-danger"> Sorry,The CourseCode - : <?php echo $_GET['error']  ?>  you Already Enrolled</p> </label> <!--The warnung message do not enroll
																													course mara mbili-->
				<?php
			}
			?>
			
			<form>
			
		
			
			
			
						 <div class="row">
						 <div class="col-md-4">
						<span class="glyphicon glyphicon-adjust"></span>
						<label for="RegID" class="control-label">Select CourseCode:</label>
						 
						</div>
						 
						<div class="col-md-4">
						
						<span class="glyphicon glyphicon-asterisk"></span>
						<label for="RegID" class="control-label">Reg_No:</label> 
						</div>
						
						
						</div>
			<div class="row">
			
			 <div class="col-md-4">
			
			<input list="alaba" class="form-control" name="course" placeholder ="seach course">
			<datalist id = "alaba">
			 
			<?php
			include_once("connection.php");
			$query=$connect->query("SELECT * from course");						
			while($row=mysqli_fetch_array($query)){
			?>
			<option value="<?php echo $row ['courseID'] ?>"> <?php echo $row['courseID'] ?></option>
		<?php
		}
		?>
			
			</datalist>
			
			 </div>

			
			 <div class="col-md-4">
			
			<input type="text" class="form-control"
			 name="student" value = <?php echo $name = $_SESSION["name"];?> readonly>
			
			 </div>
			
			 </div>
			 
			 
			 

			 
									&nbsp&nbsp
			<div class="row">
			<div class="col-md-5"> </div> 	<!--empty to bottom-->
			<div class="col-md-2">  </div>	<!--emply to bottom-->
			
			<div class="col-md-5"> <button type="submit" class="btn btn-primary" name="login">Enroll Course</button> </div>
			
			</div> 
			
		</div>
		
		</div>	
		</div>
			</form>
</form>