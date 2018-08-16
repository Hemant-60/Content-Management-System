<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("trainee",$link);
?>
<?php 
session_start();
?>
<?php
	if($_SESSION["x"]=="")
	{
		header("location:logout.php");	
	}
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<script type="text/javascript">
  	 
  	
	function get_data(){
	
		var tag=$("#tid").val();
		$.post('ajax_datafetch.php',
			{
				tag1:tag,
			},function(data){
				$("#test").html(data);
			}
		);

		
	}
  </script>


    <div id="wrapper">

      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php 
			include 'header.php';
			include 'sidebar.php';
			?>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="text-align:center;">
                            Manage Fees
                            
                        </h1>
                       
						
                    </div>
                    </div>
                    <form method="post" id="test">
                    <div class="row">
                    	<div class="col-lg-12">
                        	<div class="panel panel-red" style="background-color:rgba(255,0,0,0.1);">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="text-decoration:underline; font-size:34px; margin-left:30px; margin-top:10px;">Select Trainee ID</h3>
                                <div class="form-group">
                                
                  <select class="form-control" style="width:300px; margin-left:700px; margin-top:-30px;" onchange="get_data()" id="tid">
                                    <option>-Select Trainee ID-</option>
                                    <?php
							   $query="select * from  tbl_addnewtrainee";
								$row=mysql_query($query);
								while($data=mysql_fetch_array($row))
								{
							   ?>
                              <option value="<?php echo $data["traineeid"];?>">
							  <?php echo $data["traineeid"];?></option>
									 <?php
									 }
									 ?>
                                
                                </select>
                            </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                	<div class="col-lg-4">
                                			<div class="panel panel-red">
                           					 		<div class="panel-heading">
                                						<h3 class="panel-title" style="text-align:center;">Trainee Information</h3>
                            						</div>
                            						<div class="panel-body">
                                						<div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                               
                                <tbody>
                                    <tr class="active">
                                        <td style="text-align:center">Name</td>
                                        <td></td>
                                       
                                    </tr>
                                    <tr class="success">
                                        <td style="text-align:center">DOB</td>
                                        <td></td>
                                       
                                    </tr>
                                    <tr class="warning">
                                        <td style="text-align:center">Course</td>
                                        <td></td>
                                       
                                    </tr>
                                    <tr class="danger">
                                        <td style="text-align:center">DOJ</td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">Email ID</td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">Fees</td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">Image</td>
                                        <td></td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn btn-primary" style="margin-left:120px;">Edit</button>
                            						</div>
                        					</div>
                                	</div>
                                    <div class="col-lg-4">
                                			<div class="panel panel-yellow">
                           					 		<div class="panel-heading">
                                						<h3 class="panel-title" style="text-align:center;">Last Payment History</h3>
                            						</div>
                            						<div class="panel-body">
                                                    <div class="table-responsive">
                                						<table class="table table-bordered table-hover">
                                                        		<thead>
                                                                	<tr>
                                                                    	<th style="text-decoration:underline; text-align:center; color:rgba(255,204,0,0.5);">Date</th>
                                                                        <th style="text-decoration:underline; text-align:center; color:rgba(255,204,0,0.5);">AMT(Rs.)</th>
                                                                    </tr>
                                                                </thead>
                                                        </table>
                                                        </div>
                            						</div>
                        					</div>
                                	</div>
                                    <div class="col-lg-4">
                                			<div class="panel panel-red">
                           					 		<div class="panel-heading">
                                						<h3 class="panel-title" style="text-align:center;">New Payment</h3>
                            						</div>
                            						<div class="panel-body">
                                						<div class="form-group">
                                <label style="color:red; margin-left:20px;font-style:normal;">DATE : </label>
                                <input class="form-control" placeholder="mm/dd/yyyy" name="date" style="width:120px; border-color:red; margin-left:140px; margin-top:-28px;"><br>
                                 <label style="color:red; margin-left:20px;font-style:normal;">Amnt(Rs.) : </label>
                                <input class="form-control" placeholder="mm/dd/yyyy" name="amt" style="width:120px; border-color:red; margin-left:140px; margin-top:-28px;"><br>
                                 <button type="submit" class="btn btn-danger" style="margin-left:120px;">Add</button>
                            </div>
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
		$q="insert into tbl_fees set traineeid='$tid',amount='$amt',date='$date'";
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
<!--my7 inserted table--> 



						




               

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
