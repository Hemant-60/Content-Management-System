<?php

include("header1.php");

?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">
                            Add New Course
                        </h1>
                        
                    </div>
					
					
					
                </div>
				<div class="col-lg-6">
				<div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title"><center>Add New Course</center></h3>
                            </div>
                            <div class="panel-body">
                               
							   
							   
							   <div class="col-lg-12">
                     
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
								<form method="post">
                                    <tr>
                                        <th>Course</th>
                                        <th><input type="text" name="course"></th>
                                        
                                    </tr>
                                
                                    <tr>
                                        <td><input name="submit" type="submit" class="btn btn-lg btn-primary"></td>
                                        <td><input type="reset" class="btn btn-lg btn-warning"></td>
                                        
                                    </tr>
									</form>
                                    
                                </tbody>
		


								</table>
                        </div>
                    </div>
							   
							   						
			<?php
			
			if(isset($_POST["submit"])){
				$a=$_POST["course"];
				
				$query="insert into tbl_course set course ='$a' ";
				$row=mysql_query($query);
				
				if($row>0){
					echo "<script>alert('data entered successfully.')</script>";
					echo "<script>window.location.href='course_display.php'</script>";
				} else{
					echo"<script>alert('data not registered.')</script>";
				}
				
			}
			
			?>
							   
							   
                            </div>
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

</body>

</html>
