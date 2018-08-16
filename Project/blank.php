
<?php
session_start();
?>
<?php
	if($_SESSION["x"]==""){
		header('location:signin.php');
	}
?>


<?php
include("header1.php");
?>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                 <div class="alert alert-success">
                        <h1 class="page-header">
                            
                          <center> Add New Trainee</center>
                        </h1>
						
						
						
						
						
						
						
						<form name="frm1" method="POST" enctype="multipart/form-data">
						
						<div class="col-lg-6">
                                <label>Name</label>			
                                <input name ="name" id="name"class="form-control" placeholder="Enter Name">
								 <label>Father Name</label>
                                <input class="form-control" name="fname" id="fname" placeholder="Enter Fathers Name">
								 <label>Mobile</label>
                                <input class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile no.">
								 <label>Email</label>
                                <input class="form-control" name="email" id="email"placeholder="Enter Email">
								<div class="form-group">
                                <label>addr</label>
                                <textarea class="form-control" name="addr" rows="3"></textarea>
                            </div>
							<div class="form-group">
							
							
							
							
							
                                <label>courses</label>
                                <select multiple="" name="course" class="form-control">
								<?php
									
									$query="select * from tbl_course ";
									$row=mysql_query($query);
									$count=1;
									
									while($data=mysql_fetch_array($row)){
									?>
                                    <option value="<?php echo $data["course"];?>"><?php echo $data["course"];?></option>
                                   <?php
									}
								   ?>
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
                                <input name="doj" type="date"class="form-control" placeholder="dd/mm/yyyy">
						<label>DOB</label>
                                <input name="dob"class="form-control" type="date" placeholder="dd/mm/yyyy">
						<div class="form-group">
                                <label>Select-Duration</label>
                                <select  name="duration"class="form-control">
								<option value="">Please Select</option>
								<?php
									
									$query="select * from duration ";
									$row=mysql_query($query);
									$count=1;
									
									while($data=mysql_fetch_array($row)){
									?>
                                    <option value="<?php echo $data["duration"];?>"> <?php echo $data["duration"];?></option>
                                   <?php
									}
								   ?>
                                </select>
                            </div>
							
							<ol class="breadcrumb">
									<li>
									<a href="#">IMAGE</a>
									</li>
                            
								</ol>
                         <div class="form-group">
                          
							
									<b>Live Preview</b>
									<br />
									<br />
									<label><input type="file" name="image"></label><br>
									<img class="img-thumbnail" id="previewimg"
									 src="messi.jpg" alt="" width="100px" height="100px" />
                      
						</div></br></br>
                            </div><label>Total Fee</label>
							<div class="form-group input-group">
							
                                <span class="input-group-addon">Rs.</span>
                                <input type="text" name="price" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
							<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-success">
							<input type="reset" name="reset" value="Reset" class="btn btn-lg btn-danger">
					
						</form>
					</div>
                </div>
                <!-- /.row -->

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
	
	<script src="ckeditor/ckeditor.js" type="text/javascript">
	</script>
	<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
	

<?php
	
	if(isset($_POST["submit"])){
		
		$a=$_POST["name"];
		$b=$_POST["fname"];
		$c=$_POST["mobile"];
		$d=$_POST["email"];
		$e=$_POST["addr"];
		$f=$_POST["course"];
		$g=$_POST["gen"];
		$h=$_POST["doj"];
		$i=$_POST["dob"];
		$j=$_POST["duration"];
		$k=$_POST["price"];
		$mobile=substr($c,6);
		$name=substr($a,0,2);
		$uid=$name.$mobile;
		
		
		//for image upload
		$img=$_FILES["image"]["name"];
		$type=$_FILES["image"]["type"];
		$size=$_FILES["image"]["size"];
		$store=$_FILES["image"]["tmp_name"];
		
		//for only supportive image format
		//condition given below
		
		$arr=explode('.',$img);
		$k=end($arr);
		$formate = array("jpg","png","gif","jpeg","PNG");
		
		if(in_array("$k",$formate)){
			move_uploaded_file($store,"upload/".$img);
		
		
		$query="insert into tbl_reg set name='$a' , trainee_id='$uid', fname='$b' , mobile = '$c' , email='$d' , addr='$e' , course='$f' , gen='$g' , doj='$h' ,dob='$i' , duration='$j' , price='$k' , pic='$img' ";
		$row=mysql_query($query);
		
			if($row > 0){
				echo "<script>alert('Registration successfull')</script>";
				echo "<script>window.location.href='blank2.php'</script>";
			}else{
				echo "<script>alert('Registration Unsuccessfull')</script>";
			}
		}
		else{
			echo"<script>alert('wrong picture format')</script>";
		}
	}


?>


</body>

</html>
