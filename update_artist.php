<br>
<?php
	error_reporting( ~E_NOTICE );
	//require_once 'connection.php';
	if(isset($_GET['art_id']) && !empty($_GET['art_id']))
	{
		
		$id = $_GET['art_id'];
		//echo $id;
		
		$stmt_edit = $db_con->prepare('SELECT * FROM msanii where msa_id=:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
	}
	else
	{
		//header("Location: index.php");
		
		}
		
		
		if(isset($_POST['btn_save_updates']))
	{
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$phone=$_POST['phone'];
	
	$gender=$_POST['gender'];
	$marriage=$_POST['marriage'];
	$region=$_POST['region'];
	$district=$_POST['district'];
	$shehia=$_POST['shehia'];
	
	$kijiji=$_POST['kijiji'];
	$reg=$_POST['reg'];
	$education=$_POST['education'];
	$aina_ya=$_POST['aina_ya'];
	
	$type=$_POST['type'];
	$kikundi=$_POST['kikundi'];
	$hali_ya_msanii=$_POST['hali_ya_msanii'];
	$ki_reqion=$_POST['ki_reqion'];
	
	$ki_distict=$_POST['ki_distict'];
	$ki_shehia=$_POST['ki_shehia'];
	$ki_kijiji=$_POST['ki_kijiji'];
	
	$zan_id=$_POST['zan_id'];
	$tan_id=$_POST['tan'];
	$dob=$_POST['dob'];
	$start=$_POST['start'];
		
	$death=$_POST['death'];
	$kustafu=$_POST['kustafu'];
	 
                     	
		
		
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		if($imgFile)
		{
			$upload_dir = 'uploads/';
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
			$image = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$edit_row['image']);
					move_uploaded_file($tmp_dir,$upload_dir.$image);
				}
				
			}
				
		}
		
		
		
		$stmt = $db_con->prepare('UPDATE msanii SET f_name=:A, m_name=:B, l_name=:C, m_phone=:D,status=:O, marriage=:F,z_id=:U,mkoa=:G,
		wilaya=:H, shehia=:I,kijiji=:J,gender=:E,reg_date=:K, aina_ya_sanaa=:M,mwaka_ulianza_sanaa=:W, kikundi=:N, ki_wilaya=:Q,tz_id=:AA,
		ki_mkoa=:P, ki_shehia=:R,ki_kijiji=:T,mwaka_kustafu_sanaa=:Z, education=:L,death_date=:Y, dob=:X,image=:upic  WHERE msa_id=:uid');
		
			$stmt->bindParam(':A',$fname);			$stmt->bindParam(':B',$mname);
			$stmt->bindParam(':C',$lname);			$stmt->bindParam(':D',$phone);
			$stmt->bindParam(':E',$gender);			$stmt->bindParam(':F',$marriage);
			$stmt->bindParam(':G',$region);			$stmt->bindParam(':H',$district);
			$stmt->bindParam(':I',$shehia);			$stmt->bindParam(':J',$kijiji);
			
			$stmt->bindParam(':K',$reg);
			$stmt->bindParam(':L',$education);		$stmt->bindParam(':M',$aina_ya);
			$stmt->bindParam(':N',$kikundi);		$stmt->bindParam(':O',$hali_ya_msanii);
					
												
			$stmt->bindParam(':P',$ki_reqion);
			$stmt->bindParam(':Q',$ki_distict);		$stmt->bindParam(':R',$ki_shehia);
			$stmt->bindParam(':T',$ki_kijiji);
			
			$stmt->bindParam(':U',$zan_id);
			$stmt->bindParam(':AA',$tan_id);
				
			$stmt->bindParam(':W',$start);
			$stmt->bindParam(':X',$dob);		$stmt->bindParam(':Y',$death);
			$stmt->bindParam(':Z',$kustafu);
			
			$stmt->bindParam(':upic',$image);												
			$stmt->bindParam(':uid',$msa_id);
			
			
			
			
	
				
			if($stmt->execute()){
				?>
                <script>
				
				window.location.href='view_artist.php';
				</script>
                <?php
			}
			
	}
	
	?>
	
	<form method="post" enctype="multipart/form-data"  style="font-size:13px;">
                   <fieldset>  
				   <legend>Pesonal Infomation</legend>
				   <div class="row">
                        
                      
						
						<div class="col-md-8">
                          <div class="form-group row">
                          
                            <div class="col-sm-7">

						 <p><img src="uploads/<?php echo $image; ?>" height="100px" width="100px" /></p>
						<input class="input-group" type="file" name="user_image" accept="image/*" />
                            </div>  
                          </div>
                        </div>
						
						
                      </div> 
					 
				   
                     
					   <div class="row">
                        <div class="col-md-6">
                         <div class="form-group row">
                            <label class="col-sm-3 col-form-label">First name</label>
                            <div class="col-sm-8">
                              <input type="text"  placeholder="First name" name="fname"  value="<?php echo $f_name ?>" class="form-control" >
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Middle name</label>
                            <div class="col-sm-8">
                              <input type="text"  placeholder="Middle name" name="mname" class="form-control" value="<?php echo $m_name ?>" >
                            </div>
                          </div>
                        </div>
                      </div>
					   <div class="row">
                        <div class="col-md-6">
                         <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Last name</label>
                            <div class="col-sm-8">
                              <input type="text"  placeholder="Last name" name="lname" class="form-control" value="<?php echo $l_name ?>" >
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Phone number</label>
                            <div class="col-sm-8">
                              <input type="text"  placeholder="25577-000-999" name="phone" class="form-control" value="<?php echo $m_phone ?>" >
                            </div>
                          </div>  
                        </div>
                      </div>
					  
					  <div class="row">
                        <div class="col-md-6">
                         <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Gender</label>
                            <div class="col-sm-8">
                               <select class="form-control" name="gender" value="<?php echo $gender ?>" >
							  <option class="form-control" > Male</option>
							  <option class="form-control" > Female</option>
							  </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Mariage</label>
                            <div class="col-sm-8">
                              <select class="form-control"  name="marriage"value="<?php echo $marriage ?>">
							  <option class="form-control" >Single</option>
							  <option class="form-control" >Mariage</option>
							  <option class="form-control" >Divoce</option>
							  </select>
                            </div>
                          </div>  
                        </div>
                      </div>
					  
					  
					   <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Region</label>
                            <div class="col-sm-8">
							
							<select class="form-control"  name="region"  value="<?php echo $mkoa ?>">
							 <?php
include ("connection.php");

$sql = "SELECT * from mkoa";
$statement1 = $db_con->prepare($sql);
$statement1->execute();
$row1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
$count = 1;
foreach ($row1 as $set)
{

?>
						<option class="form-control"  value="<?php echo $set["m_id"] ?>">  <?php echo $set['mk_name']?> </option>
						 <?php
}
?>
							</select>
                            
                            </div>
                          </div>  
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">District</label>
                            <div class="col-sm-8">
                              <select class="form-control"  name="district" value="<?php echo $wilaya ?>">
							 <?php
include ("connection.php");

$sql = "SELECT * from wilaya";
$statement1 = $db_con->prepare($sql);
$statement1->execute();
$row1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
$count = 1;
foreach ($row1 as $set)
{

?>
						<option class="form-control"  value="<?php echo $set["w_id"] ?>">  <?php echo $set['w_name']?> </option>
						 <?php
}
?>
							</select> 
							 
                            </div>
                        </div>
                      </div>
                        
                      </div>
					  	
						 <div class="row">
                        <div class="col-md-6">
                         <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Street</label>
                            <div class="col-sm-8">
                              <input type="text"  placeholder="Street" name="shehia" class="form-control" value="<?php echo $shehia ?>" >
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Village</label>
                            <div class="col-sm-8">
                              <input type="text"  placeholder="Village" name="kijiji" class="form-control" value="<?php echo $kijiji ?>" >
                            </div>
                          </div>  
                        </div>
                      </div>
						
					  
					  <div class="row">
					  <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of registration 	</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control"  placeholder="Date of registration " name="reg" value="<?php echo $reg_date ?>"  >
														  
							  
                            </div>
                        </div>
                      </div>
					   <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Education level</label>
                            <div class="col-sm-8">
                              <select class="form-control"  name="education" value="<?php echo $education ?>">
							  <option class="form-control" >None education</option>
							  <option class="form-control" >Primary</option>
							  <option class="form-control" >Secondary "O" level</option>
							  <option class="form-control" >Secondary "A" level</option>
							  <option class="form-control" >Certificate</option>
							  <option class="form-control" > Diploma</option>
							  <option class="form-control" >Degree</option>
							  <option class="form-control" >Titiary</option>
							  </select>
													  
							  
                            </div>
                        </div>
                      </div>
					  </DIV>
					  
					  <div class="row">
                        <div class="col-md-6">
                         <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Zanzibar ID</label>
                            <div class="col-sm-8">
                              <input type="text"  placeholder="Zan ID" name="zan_id" class="form-control" value="<?php echo $z_id ?>" >
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Tanzania ID</label>
                            <div class="col-sm-8">
                             <input type="text"  placeholder=" Tan ID" name="tan" class="form-control" value="<?php echo $tz_id ?>">
                            </div>
                          </div>
                        </div>
                      </div>
					    <div class="row">
                        <div class="col-md-6">
                         <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of  birth</label>
                            <div class="col-sm-8">
                              <input type="date"  placeholder="Date of  birth" name="dob" class="form-control" value="<?php echo $dob ?>" >
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          
                        </div>
                      </div>
					  </fieldset>
					  <hr>
					  
					   <fieldset>  
				   <legend>Arts Infomation</legend>
			
					   <div class="row">
                        <div class="col-md-6">
                         <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Type of Arts</label>
                            <div class="col-sm-8">
                               <select class="form-control"  name="aina_ya" value="<?php echo $aina_ya_sanaa ?>">
							 <?php
include ("connection.php");

$sql = "SELECT * from sanaa";
$statement1 = $db_con->prepare($sql);
$statement1->execute();
$row1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
$count = 1;
foreach ($row1 as $set)
{

?>
						<option class="form-control"  value="<?php echo $set["s_id"] ?>">  <?php echo $set['sname']?> </option>
						 <?php
}
?>
							</select> 
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                             <label class="col-sm-4 col-form-label">Year of Start</label>
                            <div class="col-sm-8">
                              <input type="date"  placeholder="date" name="start" class="form-control" value="<?php echo $mwaka_ulianza_sanaa ?>">
                            </div>
                          </div>
                        </div>
                      </div>
					   <div class="row">
                        <div class="col-md-6">
                         <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Group</label>
                            <div class="col-sm-8">
                              <input type="text"  placeholder="Group" name="kikundi" class="form-control" value="<?php echo $kikundi ?>" >
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-8">
                               <select class="form-control" name="hali_ya_msanii" value="<?php echo $status ?>">
							  <option class="form-control" >Live</option>
							  <option class="form-control" >Pitient</option>
							  <option class="form-control" >Deaded</option>
							  </select>
                            </div>
                          </div>
                        </div>
                      </div>
					  
					
					  
					   <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Region </label>
                            <div class="col-sm-8">
							
							<select class="form-control"  name="ki_reqion" value="<?php echo $ki_mkoa ?>">
							 <?php
include ("connection.php");

$sql = "SELECT * from mkoa";
$statement1 = $db_con->prepare($sql);
$statement1->execute();
$row1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
$count = 1;
foreach ($row1 as $set)
{

?>
						<option class="form-control"  value="<?php echo $set["m_id"] ?>">  <?php echo $set['mk_name']?> </option>
						 <?php
}
?>
							</select>
                            
                            </div>
                          </div>  
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">District</label>
                            <div class="col-sm-8">
                              <select class="form-control"  name="ki_distict" value="<?php echo $ki_wilaya ?>">
							 <?php
include ("connection.php");

$sql = "SELECT * from wilaya";
$statement1 = $db_con->prepare($sql);
$statement1->execute();
$row1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
$count = 1;
foreach ($row1 as $set)
{

?>
						<option class="form-control"  value="<?php echo $set["w_id"] ?>">  <?php echo $set['w_name']?> </option>
						 <?php
}
?>
							</select> 
							 
                            </div>
                        </div>
                      </div>
                        
                      </div>
					   <div class="row">
                        <div class="col-md-6">
                         <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Street</label>
                            <div class="col-sm-8">
                              <input type="text"  placeholder="Street" name="ki_shehia" class="form-control" value="<?php echo $ki_shehia ?>" >
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Village</label>
                            <div class="col-sm-8">
                              <input type="text"  placeholder="Village" name="ki_kijiji" class="form-control" value="<?php echo $ki_kijiji ?>" >
                            </div>
                          </div>  
                        </div>
                      </div>
					  
					   <div class="row">
                        <div class="col-md-6">
                         <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of retire</label>
                            <div class="col-sm-8">
                              <input type="date"  placeholder="Date of retire" name="kustafu" class="form-control" value="<?php echo $mwaka_kustafu_sanaa ?>" >
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Date of death</label>
                            <div class="col-sm-8">
                              <input type="date"  placeholder="Date of death" name="death" class="form-control" value="<?php echo $death_date ?>" >
                            </div>
                          </div>  
                        </div>
                      </div>
					  </fieldset>
					  
                      </div>
					  
					  </div>
                    
                        
						<div class="row">
					  <div class="col-md-7">
                          
                            <div class="col-sm-8">
                              
							  
                            </div>
                        </div>
                      </div>
					   <div class="col-md-8">
                          <div class="form-group row">
                             <button type="submit" name="btn_save_updates" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save"></span>&nbsp; Update Infomation</button>
        <a class="btn btn-warning" href="view_artist.php"> <span class="glyphicon glyphicon-remove"></span>&nbsp; Cancel</a>
                            <div class="col-sm-8">
                             
							  
                            </div>
                        </div>
                      </div>
					  
					  </div>
                       
                        
                         
                           
                            
                             
                          
                        
                        
                   
						
                    </form>
