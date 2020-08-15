
<br/> 
<div class="row">
			<div class="col-md-7"> </div> 	
			<div class="col-md-2">  </div>	
			
			<div class="col-md-2"> 
			<a href="viewcourse.php" class="btn btn-info btn-lg active" role="button">
			<span class="glyphicon glyphicon-menu-hamburger"></span>View Course</a>
		
			
			 </div>
			
			</div>

<form action="coursehandler.php" method="post" autocomplete ="off">

<div class="container col-md-9">
<div class="panel panel-info ">

<div class="panel-heading">
     <center><b><i>CourseRegistration</i></b></center>
	 </div>
			<div class="panel-body">
			
			<form>
			
		
			
			
			
						 <div class="row">
						 
						<div class="col-md-4">
						
						<span class="glyphicon glyphicon-menu-hamburger"></span>
						<label for="RegID" class="control-label"> Course-ID:</label> 
						</div>
						<div class="col-md-4">
						<span class="glyphicon glyphicon-menu-hamburger"></span>
						<label> Course-Tittle:</label> 
						</div>
						
						<div class="col-md-4">
						<span class="glyphicon glyphicon-calendar"></span>
						<label for="RegID" class="control-label">Course-Year:</label>
						
						
						 
						</div>
						
						
						</div>
			<div class="row">
			<div class="col-md-4"> <input type="text" class="form-control" 
			id="lastname" placeholder="course-code" name="id"  required >			
			</div>
			
			<div class="col-md-4"> <input type="text" class="form-control"
			placeholder="Tittle" name="tittle" required> </div>
			
		
			<div class="col-md-4">
			<select class="form-control" name="YEAR"> <option>--academicYear--</option>
										<option>2014/2015</option>
										<option>2015/2016</option>
										<option>2016/2017</option>
										<option>2017/2018</option>
										<option>2018/2019</option>
										<option>2019/2020</option>
										<option>2020/2021</option>
										
										
										
										
			</select>
			
			</div>
			
			
			
			</div>
			
			
			
			
						<div class="row">
						
						<div class="col-md-4">
						<span class="glyphicon glyphicon-menu-hamburger"></span>
						<label>Course-Attendance:</label> 
						</div>
						
						<div class="col-md-4">
						<span class="glyphicon glyphicon-menu-hamburger"></span>
						<label>Course-Semister:</label> 
						</div>
						
						
						
						</div>
						
			<div class="row">
			
			<div class="col-md-4">
			 <select class="form-control" name="attendance">
										<option>--Attendance--</option>
										<option value="100">100%</option>
										
										
										
			</select>
			
			</div>
			
			<div class="col-md-4"> 
			
			<select class="form-control" name="SEMISTER" placeholder="semister"> 
			                                 <option>--Semister--</option>
										<option value="1">SEMISTER I</option>
										<option value="2">SEMISTER II</option>
										
										
										
			</select>
			
			 </div>
			 
			
			
			</div>
			
						
						
			
			
			
						
			
			
			
			
									&nbsp&nbsp
			<div class="row">
			<div class="col-md-5"> </div> 	<!--empty to bottom-->
			<div class="col-md-2">  </div>	<!--emply to bottom-->
			
			<div class="col-md-5"> <button type="submit" class="btn btn-info" name="login">Add_Course</button> </div>
			
			</div>
			
			</form>
			
	
			
			</div>

</div>

</form>
</div>
