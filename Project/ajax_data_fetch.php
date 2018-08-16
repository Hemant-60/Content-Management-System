<?php
include_once("header1.php");

//$connect=mysql_connect("localhost","root","");
//mysql_select_db("trainee",$connect);
?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

	<?php		
			$t=$_POST['tag1'];
	$sql="select * from  tbl_reg where trainee_id='$t'";
	$run=mysql_query($sql);
	
	$row=mysql_fetch_array($run);
	?>
			<form method="post" id="test">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <center><b> Manage Fee</center></b>
                            
                        </h1>
					<div class="col-sm-12">
                        <div class="panel panel-red">
						
						
                            <div class="panel-heading">
                               
								
								<div class="form-group">
								<div class="col-sm-6">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><u><h2>SELECT TRAINEE ID</u></h2></label>
								</div>
								<div class="col-sm-6">
                                <select class="form-control">
								<?php
								 $q="select * from  tbl_reg";
								 $data=mysql_query($q);
								 while($row1=mysql_fetch_array($data)){
								 ?>
                                    <option value="<?php echo $row1["trainee_id"];?>"><?php echo $row1["trainee_id"];?></option>
                                   <?php
								 }
								   ?>
                                </select>
								
                            </div>
							
                            </div>
							
                            <div class="panel-body">
							
							
                                </div>
							</div>
							<div class="alert alert-danger">
							 <div class="panel-body">
							 
							 
							 
							 <!--Trainee information-->
								<div class="col-sm-4">
										<div class="panel panel-red">
											<div class="panel-heading">
												<h3 class="panel-title">Trainee Information</h3>
											</div>
											<div class="panel-body">
												<div class="col-lg-12">
                       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                
                                <tbody>
								  <tr class="active">
                                        <td>Trainee ID</td>
                                        <td><input type="text" class="form-control"readonly class="" name="t_id" value="<?php echo $row["trainee_id"];?>" style="width:150px;"/></td>
                                        
                                    </tr>
									
                                    <tr class="active">
                                        <td>NAME</td>
                                        <td><input type="text" class="form-control"readonly class="" name="name" value="<?php echo $row["name"];?>" style="width:150px;"/></td>
                                        
                                    </tr>
                                    <tr class="success">
                                        <td>DOB</td>
                                        <td><input type="text" class="form-control"readonly class="" name="dob" value="<?php echo $row["dob"];?>" style="width:150px;"/></td>
                                        
                                    </tr>
                                    <tr class="warning">
                                        <td>COURSE</td>
                                        <td><input type="text" class="form-control"readonly class="" name="course" value="<?php echo $row["course"];?>" style="width:150px;"/></td>
                                        
                                    </tr>
                                    <tr class="danger">
                                        <td>DOJ</td>
                                        <td><input type="text" class="form-control"readonly class="" name="doj" value="<?php echo $row["doj"];?>" style="width:150px;"/></td>
                                       
                                    </tr>
                                    <tr>
                                        <td>EMAIL</td>
                                        <td><input type="text" class="form-control"readonly class="" name="email" value="<?php echo $row["email"];?>" style="width:150px;"/></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>FEES</td>
                                        <td><input type="text" class="form-control"readonly class="" name="fee" value="<?php echo $row["price"];?>" style="width:150px;"/></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>IMAGE</td>
                                        <td><img src="upload/<?php echo $row["pic"];?>" style="height:80px; width:80px;" /></td>
                                        
                                    </tr>
								
                                </tbody>
								
                            </table>
							<center><button type="button" class="btn btn-info">EDIT</button></center>
                        </div>
                    </div>
											</div>
										</div>
									</div>
                             
                            <!--Last Payment History-->
									<div class="col-sm-4">
										<div class="panel panel-yellow">
											<div class="panel-heading">
												<h3 class="panel-title">Last Payment History</h3>
											</div>
											<div class="panel-body">
												<div class="col-lg-12">
                       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
							
							<thead>
                                    <tr>
                                        <th><u>Date</u></th>
                                        <th><u>Amount</u></th>
                                        
                                    </tr>
                                </thead>
                                
                                <tbody>
								 <?php
									 //$t_id=$_POST["t_id"];
								 $q2="select * from  tbl_fee where trainee_id='$t'";
								 $data2=mysql_query($q2);
								 while($row2=mysql_fetch_array($data2)){
								 ?>
                                    <tr class="active">
                                        <td><?php echo $row2["date"];?></td>
                                        <td><?php echo $row2["amount"];?></td>
                                        
                                    </tr>
									<?php
									
										}
									?>
                                    
                                   
									</tbody>
								
                            </table>
							
                        </div>
                    </div>
											</div>
										</div>
									</div>
									
									
								<!--New Payment-->
								<div class="col-sm-4">
								<div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title">New Payment</h3>
                            </div>
                            <div class="panel-body">
                               <center>
							   <div class="date"  >DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date"></div><br>
								<div class="amount" >AMT(Rs.)<input type="text" name="amt"></div><br>
								<input type="submit" class="btn btn-lg btn-primary" value="Add" name="submit">
							   </center>
							</div>
                        </div>
						</div>	
							
							
							
							
							
								<!--End of panel content-->
								</div>
							</div>
                        </div>
                    </div>
							
                            
                        </div>
                    </div>
					</form>
					<?php
								
			
						if(isset($_POST["submit"]))
								{
								$tid=$_POST["t_id"];
								$amt=$_POST["amt"];
								$date=$_POST["date"];
							$q="insert into tbl_fee set trainee_id='$tid',amount='$amt',date='$date'";
								$da=mysql_query($q);
								if($da>0)
								{
								echo "<script>alert('Amount Saved Successfully')</script>";
								}
								else
								{
								echo "<script>alert('Amount Not Saved Successfully')</script>";
								}
								
								}
			?>
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
