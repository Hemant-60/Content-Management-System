<?php

$connect=mysql_connect("localhost","root","");
mysql_Select_db("trainee",$connect);

include("header1.php");
?>


            <!-- /.navbar-collapse -->
        </nav>
	
        <div id="page-wrapper">

            <div class="container-fluid">
			<div class="alert alert-danger">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          <center> Add New Enquiry</center>
                          
                        </h1>
                        
                    </div>
					
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
                                    <option value="dotnet">Dot Net</option>
                                    <option value="php">PHP</option>
                                    <option value="java">Java</option>
                                   
                                </select>
                            </div>
							
                      
                    </div>
					
					<div class="col-lg-6">
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
						
						<label>DOB</label>
                                <input name="dob"class="form-control" type="date" placeholder="dd/mm/yyyy">
						<div class="form-group">
                                <label>Select-Duration</label>
                                <select  name="duration"class="form-control">
								<option value="">Please Select</option>
                                    <option value="1">1 Year</option>
                                    <option value="2">2 Year</option>
                                    <option value="3">3 Year</option>
                                    <option value="4">4 Year</option>
                                    
                                </select>
                            </div>
							
							<div class="form-group">
                                <label>IMAGE</label>
                                <input name="image" type="file">
                            </div><label>Total Fee</label>
							<div class="form-group input-group">
							
                              
                            </div>
							<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-success">
							<input type="reset" name="reset" value="Reset" class="btn btn-lg btn-danger">
					
						</form>
                </div>
                <!-- /.row -->
				
				<?php
	
	if(isset($_POST["submit"])){
		
		$a=$_POST["name"];
		$b=$_POST["fname"];
		$c=$_POST["mobile"];
		$d=$_POST["email"];
		$e=$_POST["addr"];
		$f=$_POST["course"];
		$g=$_POST["gen"];
		$i=$_POST["dob"];
		$j=$_POST["duration"];
		
		
		
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
		
		
		$query="insert into enquiry set name='$a' , fname='$b' , mobile = '$c' , email='$d' , addr='$e' , course='$f' , gen='$g' ,dob='$i' , duration='$j' , pic='$img' ";
		$row=mysql_query($query);
		
			if($row > 0){
				echo "<script>alert('Registration successfull')</script>";
				echo "<script>window.location.href='enquiry_display.php'</script>";
			}else{
				echo "<script>alert('Registration Unsuccessfull')</script>";
			}
		}
		else{
			echo"<script>alert('wrong picture format')</script>";
		}
	}


?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
	</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
