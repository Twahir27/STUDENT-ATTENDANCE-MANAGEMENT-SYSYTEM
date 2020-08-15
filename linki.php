
   

<ul class="nav nav-pills nav-stacked"  style="color:white">

  <div id="welcome">
  
  

           <?php
				echo "<h4>Welcome -".$_SESSION["name"]."</h4>";
							?>
							 <?php
				echo "<h4>".$_SESSION["usertype"]."</h4>";
							?>
                   </div>	
				   
			
			
			
		<?php
	if($_SESSION["usertype"]=="admin"){
		?>				
		<li><a href="Homepage.php">Home</a></li>
	    <li><a href="userlayout.php">New-User</a></li>
		<li><a href="staffview.php">View-Lecturer</a></li>
		<li><a href="viewstudent.php"> View-Student</a></li>
		<li><a href="course.php">Add-Course</a></li>
		<li><a href="report_all.php">Report-All</a></li>
		
		
		
    
		
   <?php
	}elseif($_SESSION["usertype"]=="lecture"){
		?>
		 <li><a href="Homepage.php">Home</a></li>
		 <li><a href="reg.php">New-User</a></li>
         <li><a href="viewstudent.php"> View-Student</a></li>		 
         <li><a href="addattend.php">Take-Attendance</a></li>
		 <li><a href="select_course.php">View-Attendance</a></li>
		 <li><a href="pass_change.php">Change-Password</a></li>
 		 
         
		
	<?php
	}elseif($_SESSION["usertype"]=="student"){
		?>
		<li><a href="Homepage.php">Home</a></li>
		<li><a href="view_student.php">View_Attendance</a></li>
		<li><a href="pass_change.php">Change-Password</a></li>
        			
		
		
	<?php
	}
	?>
         <li><a href="logout.php" onClick="javascript: return confirm('Are you sure you want to logout?.')">Logout</a></li>


    </ul>
	 			