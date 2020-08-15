<form action="course_enroll_handler.php" method="post">

<div class="container col-md-9">
<div class="panel panel-info ">

<div class="panel-heading">CourseEnroll</div>
			<div class="panel-body">
			<?php
			if (isset($_GET['exist'])){
				
				?>
				<label> <p class="text-danger"> Sorry,The CourseCode - : <?php echo $_GET['exist']  ?>  you Already Enrolled</p> </label> <!--The warnung message do not enroll
																													course mara mbili-->
				<?php
			}
			?>
			
			<form>
			
		
			
			
			
						 <div class="row">
						 <div class="col-md-4">
						<span class="glyphicon glyphicon-user"></span>
						<label for="RegID" class="control-label">CourseID:</label>
						 
						</div>
						 
						<div class="col-md-4">
						
						<span class="glyphicon glyphicon-user"></span>
						<label for="RegID" class="control-label">StaffID:</label> 
						</div>
						
						
						</div>
			<div class="row">
			
			 <div class="col-md-4">
			
			<select class="form-control" name="course">
			
			 <option>--Select courseID--</option>
			<?php
			include_once("connection.php");
			$query=$connect->query("SELECT * from course");						
			while($row=mysqli_fetch_array($query)){
			?>
			<option value="<?php echo $row ['courseID'] ?>"> <?php echo $row['courseID'] ?></option>
		<?php
		}
		?>
			
			</select>
			
			 </div>

			
			 <div class="col-md-4">
			
			<select class="form-control" name="staff">
			
			 <option>--Select staff--</option>
			<?php
			include_once("connection.php");
			$query=$connect->query("SELECT * from staff");						
			while($row=mysqli_fetch_array($query)){
			?>
			<option value="<?php echo $row ['staffID'] ?>"> <?php echo $row['staffID'] ?></option>
		<?php
		}
		?>
			
			</select>
			
			 </div>
			
			 </div>
			 
			 
			 

			 
									&nbsp&nbsp
			<div class="row">
			<div class="col-md-5"> </div> 	<!--empty to bottom-->
			<div class="col-md-2">  </div>	<!--emply to bottom-->
			
			<div class="col-md-5"> <button type="submit" class="btn btn-primary" name="login">Enrollment</button> </div>
			
			</div> 
			
		</div>
		
		</div>	
		</div>
			</form>
