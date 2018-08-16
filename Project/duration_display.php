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
                          <center> <u> ADD NEW COURSE</u></center>
                        </h1>
                        
                    </div>
                </div>
				
				<div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">ADD NEW Duration&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="add_duration.php" class="btn btn-lg btn-success">Add New Duration</a></h3>
                            </div>
                            <div class="panel-body">	
                               <div class="col-lg-12">
                       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <u><th>S.No.</th>
                                        <th>Duration</th>
                                        <th>Action</th></u>
                                        
                                    </tr>
                                </thead>
                                <tbody>
								
								<?php
									
									$query="select * from duration ";
									$row=mysql_query($query);
									$count=1;
									
									while($data=mysql_fetch_array($row)){
									?>
                                    <tr class="active">
                                        <td><?php echo $count?></td>
										<td><?php echo $data["duration"];?></td>
                                        <td><a class="btn btn-sm btn-link" href="add_duration.php? xyz=<?php echo $data["id"];?>">
										Edit</a>
										<a class="btn btn-sm btn-link" href="delete_duration.php? xyz=<?php echo $data["id"];?>">
										Delete</a></td>
                                        
                                    </tr>
                                    
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
