

<br/>
	<div class="row container-fluid">
    <?php
	if($_SESSION["usertype"]=="admin"){
		?>
   <div class="row container-fluid" id="profile">
   
   <div class="col-lg-3"><img src="image/Z.jpg" width="170px" height="120px"></div>
   
   </div>
   <br/><br/>
   <div class="col-lg-3">
	<p>..<b><i>Create Account</i></b> <br> This Funtionality allow the Administrator to create
	 account for<b> Student,Lecturer </b>and any staff who will be able to use This System</p>	
     </div>
	 <div class="col-lg-3">
	 <p>..<b><i>Add / Edit/ Delete</i> </b> <br>The the whole process of
		(ADD / DELETE/EDITION)of the course
	 must be done by Administrator</p>
	 </div>
	 
	 <div class="col-lg-3">
	  <p>..<b><i>View the Report</i></b><br> Administrator have the resposible to view report of each student on system</p>
	 </div>

        <?php
	}elseif($_SESSION["usertype"]=="lecture"){
		?>
		<div class="col-lg-3">
        <p><b>ChangePassword</b><br> You can be able to change the password anytime you wish,it is recommended that you must change 
	 your password immediately after your first login in the System</p> 
		</div>
		<div class="col-lg-3">
	  <p><b>SelectCourse</b><br> You can able to choose a course in which you want to attend student attendance</br>
		</div>
		<div class="col-lg-3">
		  <i><b>Add Attendance :</b></i></br> You can take attendance for all students
		  
		  </div>
		  <div class="col-lg-3">
	  <i><b>View Attendance :</b></i></br> This will allow you to View the list of all student attendance in your class
	  </div>
	  </p> 
	  
	   
	  
	  
			
        <?php
	}elseif($_SESSION["usertype"]=="student"){
		?>
       <div class="col-lg-3">
       <p><b>Enroll Course</b><br> This Tab allow the student to enroll the course to depend on His or Her CourseCode </b>
	   </div>
	   <div class="col-lg-3">
	   <p><b>View Attendance</b><br> This Tab allow the student to view attedance of course </b>
	   </div>
	   <div class="col-lg-3">
	   <p><b>ChangePassword</b><br> Onces you login in the student attedance management for the firsttime you will have permission to change the password
	   </u></b>

		  </p>
		  </div>
			<?php
	}
	?>
        

</div>
    