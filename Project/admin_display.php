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
                            Manage Trainee
                            
                        </h1>
                       <div class="col-lg-12">
                        <h2><center>Manage Trainee<align="right"></center><button type="button" class="btn btn- btn-danger">Add New Enquiry</button></h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
									<th>S.No.</th>
                                        <th>Name</th>
                                        <th>User Name</th>
                                        <th>Mobile no.</th>
                                        <th>Email</th>
										 
                                        
                                        <th>Photo</th>
                                       <th>Action</th>
                                    </tr>
                                </thead>
								
								<tbody>
								
									<?php
									
									$query="select * from admin ";
									$row=mysql_query($query);
									$count=1;
									
									while($data=mysql_fetch_array($row)){
									?>
									<tr>
										<td><?php echo $count?></td>
										<td><?php echo $data["name"];?></td>
										<td><?php echo $data["uname"];?></td>
										<td><?php echo $data["mobile"];?></td>
										<td><?php echo $data["email"];?></td>
									
										
										
										<td><img src="upload_admin/<?php echo $data["pic"];?>" width="150" height="150"></td>
										<td><a class="btn btn-sm btn-link" href="blank4.php? xyz=<?php echo $data["id"];?>">
										Edit</a>
										<a class="btn btn-sm btn-link" href="delete_admin.php? xyz=<?php echo $data["id"];?>">
										Delete</a></td>
						
										
									</tbody>
                              
									<?php
										$count++;
										}
									?>

							 
                                
                            </table>
                        </div>
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
