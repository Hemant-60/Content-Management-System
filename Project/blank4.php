<?php
session_start();
?>
<?php
	if($_SESSION["x"]==""){
		header('location:signin.php');
	}
?>



<?php



include_once("header1.php");
?>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          <center>  <font color="purple"><u>Present Trainee Details</u></font></center>
                            
                        </h1>
                       <div class="col-lg-12">
					  <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                            
					   
                        <h4>Present Trainee Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="blank.php" class="btn btn- btn-success">Add New Trainee</a></h4>
							</h3></div>
					</div >	
					<div class="panel-body">
                        <div class="table-responsive">
						<div class="alert alert-danger">
						<font color=black>
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>S.no.</th>
                                        <th>Name</th>
										<th>Father Name</th>
                                        <th>Mobile no.</th>
                                     
										 <th>Total Fee(Rs.)</th>
										    <th>Email</th>
                                        <th>Course</th>
                                        <th>Photo</th>
										

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="active">
									<?php
									
										$id=$_GET["xyz"];
										$query="select * from tbl_reg where id='$id'";
										$row=mysql_query($query);
										$data=mysql_fetch_array($row);
									?>
									<td><?php echo $data["id"];?></td>
                                        <td><?php echo $data["name"];?></td>
                                        <td><?php echo $data["fname"];?></td>
                                        <td><?php echo $data["mobile"];?></td>
                                        <td><?php echo $data["price"];?></td>
										 <td><?php echo $data["email"];?></td>
                                        <td><?php echo $data["course"];?></td>
                                        <td><img src="upload/<?php echo $data["pic"];?>" width="150" height="150"></td>
                                       
                                    </tr>
                                  
                                    
                                </tbody>
                            </table>
							</font>
							
							 <div class="row">
                 <div class="alert alert-danger">
                        <h1 class="page-header">
                            
                          <center> Edit Trainee Information</center>
                        </h1>
						
						
						
						
						
						
						
						<form name="frm1" method="POST" enctype="mulipost/form-data">
						
						<div class="col-lg-6">
                                <label>Name</label>			
                                <input name ="name" id="name"class="form-control" placeholder="Enter Name" value="<?php echo $data["name"];?>">
								 <label>Father Name</label>
                                <input class="form-control" name="fname" id="fname" placeholder="Enter Fathers Name" value="<?php echo $data["fname"];?>">
								 <label>Mobile</label>
                                <input class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile no." value="<?php echo $data["mobile"]?>">
								 <label>Email</label>
                                <input class="form-control" name="email" id="email"placeholder="Enter Email" value="<?php echo $data["email"];?>">
								<div class="form-group">
                                <label>addr</label>
                                <input class="form-control" name="addr" height=30px value="<?php echo $data["addr"];?>"></textarea>
                            </div>
							<div class="form-group">
                                <label>courses</label>
                                <select multiple="" name="course" class="form-control" value="<?php echo $data["course"];?>">
                                    <option value="dotnet">Dot Net</option>
                                    <option value="php">PHP</option>
                                    <option value="java">Java</option>
                                   
                                </select>
                            </div>
							<div class="form-group">
                                <label>Select Gender</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gen" id="gen" value="Female" checked="">Female
                                    </label>
                                
                                    <label>
                                        <input type="radio" name="gen" id="gen" value="Male" checked="">Male
                              
       
	   
                            </div>
                            </div>
                      
                    </div>
					<div class="col-lg-6">
						<label>DOJ</label>
                                <input name="doj" type="date"class="form-control" placeholder="dd/mm/yyyy" value="<?php echo $data["doj"];?>">
						<label>DOB</label>
                                <input name="dob"class="form-control" type="date" placeholder="dd/mm/yyyy" value="<?php echo $data["dob"];?>">
						<div class="form-group">
                                <label>Select-Duration</label>
                                <select  name="duration"class="form-control"  value="<?php echo $data["duration"];?>">
								<option value="">Please Select</option>
                                    <option value="1">1 Year</option>
                                    <option value="2">2 Year</option>
                                    <option value="3">3 Year</option>
                                    <option value="4">4 Year</option>
                                    
                                </select>
                            </div>
							
							<div class="form-group">
                                <label>IMAGE</label>
                                <input type="file" name="image" >
                            </div><label>Total Fee</label>
							<div class="form-group input-group">
							
                                <span class="input-group-addon">Rs.</span>
                                <input type="text" name="price" class="form-control" value="<?php echo $data["price"];?>">
                                <span class="input-group-addon">.00</span>
                            </div>
							<input type="submit" name="update" value="Update" class="btn btn-lg btn-success">
							<input type="reset" name="reset" value="Reset" class="btn btn-lg btn-danger">
					
						</form>
					</div>
                </div>
                        </div>
                    </div>
                    </div>
                </div>
				
				<?php
				
				
				
				
				
				
				
				if(isset($_POST['update'])){
					
					$name=$_POST["name"];
					$p=$_POST["fname"];
					$q=$_POST["mobile"];
					$r=$_POST["email"];
					$s=$_POST["price"];
					
					$img=$_FILES["image"]["name"];
				   
					$type=$_FILES["image"]["type"];
					$size=$_FILES["image"]["size"];
					$store=$_FILES["image"]["tmp_name"];
					move_uploaded_file($store,"upload/".$img);
					
					
					$query="update tbl_reg set name='$name',fname='$p',mobile='$q',email='$r',price='$s',pic='$img' where id='$id'";
					$data=mysql_query($query);
					if($data>0)
					{
						echo "<script>alert('Data Update Sucessfully')</script>";
						echo "<script>window.location.href='blank2.php'</script>";
					}else{
						echo"<script>alert('Data Update Failed')</script>";
					}
					}
					
				
				
				?>
				
                <!-- /.row -->
			  </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
