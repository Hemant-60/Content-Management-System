<?php
session_start();
?>
<?php
	if($_SESSION["x"]==""){
		header('location:signin.php');
	}
?>


<?php
$connect=mysql_connect("localhost","root","");
mysql_Select_db("trainee",$connect);

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
                                        <th>Father Name</th>
                                        <th>Mobile no.</th>
                                        <th>Email</th>
										 <th>Total Fee(Rs.)</th>
                                        <th>Course</th>
                                        <th>Photo</th>
                                       <th>Action</th>
                                    </tr>
                                </thead>
								
								<tbody>
								
									<?php
									
									$query="select * from tbl_reg ";
									$row=mysql_query($query);
									$count=1;
									
									while($data=mysql_fetch_array($row)){
									?>
									<tr>
										<td><?php echo $count?></td>
										<td><?php echo $data["name"];?></td>
										<td><?php echo $data["fname"];?></td>
										<td><?php echo $data["mobile"];?></td>
										<td><?php echo $data["email"];?></td>
										<td><?php echo $data["price"];?></td>
										
										<td><?php echo $data["course"];?></td>
										
										
										<td><img src="uploads/<?php echo $data["pic"];?>" width="150" height="150"></td>
										<td><a class="btn btn-sm btn-link" href="blank4.php? xyz=<?php echo $data["id"];?>">
										Edit</a>
										<a class="btn btn-sm btn-link" href="delete.php? xyz=<?php echo $data["id"];?>">
										Delete</a></td>
						
										
									</tbody>
                              
									<?php
										$count++;
										}
									?>

							  <!--<tbody>
                                    <tr class="active">
                                        <td>Neymar jr.</td>
                                        <td>Neymar</td>
                                        <td>8756485783</td>
                                        <td>neymar11@gmail.com</td>
										 <th>15000</th>
                                        <th>PHP++</th>
                                        <th><img src="neymar.jpg"></th>
                                        <th><button type="button" class="btn btn-sm btn-link">Edit</button><button type="button" class="btn btn-sm btn-link">Delete</button></th>
                                    </tr>
                                      <tr class="success">
                                        <td>Neymar jr.</td>
                                        <td>Neymar</td>
                                        <td>8756485783</td>
                                        <td>neymar11@gmail.com</td>
										 <th>15000</th>
                                        <th>PHP++</th>
                                        <th><img src="neymar.jpg"></th>
                                         <th><button type="button" class="btn btn-sm btn-link">Edit</button><button type="button" class="btn btn-sm btn-link">Delete</button></th>
                                    </tr>
                                      <tr class="warning">
                                        <td>Neymar jr.</td>
                                        <td>Neymar</td>
                                        <td>8756485783</td>
                                        <td>neymar11@gmail.com</td>
										 <th>15000</th>
                                        <th>PHP++</th>
                                        <th><img src="neymar.jpg"></th>
                                         <th><button type="button" class="btn btn-sm btn-link">Edit</button><button type="button" class="btn btn-sm btn-link">Delete</button></th>
                                    </tr>
                                    
                                </tbody>-->
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
