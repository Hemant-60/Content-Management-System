<?php

include("header1.php");

?>
            <!-- /.navbar-collapse -->
       </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <u>Add New Duration</u>
                            
                        </h1>
                       
                    </div>
                </div>
				<div class="col-lg-6">
				<div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><center>Add New Duration</center></h3>
                            </div>
                            <div class="panel-body">
							
							<table class="table table-bordered table-hover table-striped">
                               
                                <form method="post">
                                <tbody>
                                    <tr>
                                        <td>Duration</td>
                                        <td><input type="text" name="duration"></td>
                                        
                                    </tr>
                                    <tr>
                                        <td><a href="dur_display.php" class="btn btn-lg btn-primary">Cancel</a></td>
                                        <td><input type="submit" name="submit" class="btn btn-lg btn-success" value="Submit">
										<input type="reset" class="btn btn-lg btn-danger" value="Reset"></td>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
							
							
							</form>
                               
                            </div>
                        </div>
						</div>
						
						<?php
			
			if(isset($_POST["submit"])){
				$a=$_POST["duration"];
				
				$query="insert into duration set duration ='$a'";
				$row=mysql_query($query);
				
				if($row>0){
					echo "<script>alert('data entered successfully.')</script>";
					echo "<script>window.location.href='duration_display.php'</script>";
				} else{
					echo"<script>alert('data not registered.')</script>";
				}
				
			}
			
			?>
						
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
