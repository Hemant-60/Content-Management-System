<?php
include_once("header1.php");

//$connect=mysql_connect("localhost","root","");
//mysql_select_db("trainee",$connect);
?>
            <!-- /.navbar-collapse -->
			
			
			<script type="text/javascript">
			
				function get_data(){
					
					var tag=$("#tid").val();
					$.post('ajax_data_fetch.php',
					{
						tag1:tag,
					},function(data){
						$("#test").html(data);
					}
					
					
					);
				}
			
			</script>
			
			
			
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
				
				<form method="post" id ="test">
				
				
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
 

								
									<select class="form-control" onchange="get_data()" id="tid">
                                    <?php
									 $query="select * from tbl_reg ";
									$row=mysql_query($query);
									
										while($data=mysql_fetch_array($row)){
											
									?>
									<option value="<?php echo $data["trainee_id"];?>">
									<?php echo $data["trainee_id"];?>
									</option>
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
                                        <td>NAME</td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr class="success">
                                        <td>DOB</td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr class="warning">
                                        <td>COURSE</td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr class="danger">
                                        <td>DOJ</td>
                                        <td></td>
                                       
                                    </tr>
                                    <tr>
                                        <td>EMAIL</td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>FEES</td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>IMAGE</td>
                                        <td><img src="a.jpg"></td>
                                        
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
                                
                               <!-- <tbody>
                                    <tr class="active">
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr class="success">
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr class="warning">
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr class="danger">
                                        <td></td>
                                        <td></td>
                                       
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                   
									</tbody>-->
								
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
							   <div class="date" >DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date"></div><br>
								<div class="amount" >AMT(Rs.)<input type="text" name="amt"></div><br>
								<button type="submit" class="btn btn-lg btn-primary">ADD</button>
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
									echo "<script>alert('Amount Save Sucessfully')</script>";
									}
									else
									{
									echo "<script>alert('Amount Not Save Sucessfully')</script>";
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
