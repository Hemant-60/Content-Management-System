<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manage Fee</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
//error_reporting(0);
	$link=mysql_connect("localhost","root","");
mysql_select_db("trainee",$link);


	$t=$_POST['tag1'];
	$sql="select * from  tbl_addnewtrainee where traineeid='$t'";
	$run=mysql_query($sql);
	
	$row=mysql_fetch_array($run);
?>
<form method="post" id="test">
                                                        
                                    <div class="row">
                 <div class="col-lg-12 text-center">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                 <h1 style="text-align:left; text-decoration:underline">Select Trainee Id:&nbsp; 
								 <select name="se_id" id="tid" class="form-control" style="width:300px;margin-top:-30px ;margin-left:600px;" onchange="get_data()"  >
								 <option value="">-Select Trainee ID-</option>
								 <?php
								 $q="select * from  tbl_addnewtrainee";
								 $data=mysql_query($q);
								 while($row1=mysql_fetch_array($data)){
								 ?>
                    <option value="<?php echo $row1["traineeid"];?>"><?php echo $row1["traineeid"];?></option>
								 <?php }	?>
                                    </select></h4></div>
              
                        </div>
                        <div class="row">
                        <div class="col-lg-4 ">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title">Trainee Basic Information</h3>
                            </div>
                            <div class="panel-body">
                               	<div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                               
                                <tbody>
                                    <tr class="active">
                                        <td>Trainee Id:-</td>
                                        <td><input type="text" class="form-control"readonly class="" name="t_id" value="<?php echo $row["traineeid"];?>" style="width:150px;"/></td>
                                        
                                    </tr>
                                    <tr class="success">
                                        <td>NAME:-</td>
                                        <td><input type="text" class="form-control"readonly class="" name="tr_nm" value="<?php echo $row["name"];?>" style="width:150px;"/></td>
                                        
                                    </tr>
                                    <tr class="warning">
                                        <td>DOB:-</td>
                                        <td><input type="text" class="form-control"readonly name="tr_nm" value="<?php echo $row["dob"];?>" style="width:150px;"/></td>
                                        
                                    </tr>
                                    <tr class="danger">
                                        <td>COURSE:-</td>
                                        <td><input type="text" class="form-control"readonly name="tr_nm" value="<?php echo $row["course"];?>" style="width:150px;"/></td>
                                       
                                    </tr>
                                    <tr>
                                        <td>DOJ:-</td>
                                        <td><input type="text" class="form-control"readonly name="tr_nm" value="<?php echo $row["doj"];?>" style="width:150px;"/></td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Email ID</td>
                                        <td><input type="text" class="form-control"readonly name="tr_nm" value="<?php echo $row["email"];?>" style="width:150px;"/></td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Total Fees</td>
                                        <td><input type="text"class="form-control" readonly name="tr_nm" value="<?php echo $row["totalfees"];?>" style="width:150px;"/></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>Image</td>
                                        <td><img src="upload/<?php echo $row["photo"];?>" style="height:80px; width:80px;" /></td>
                                    </tr>
                                    
                                </tbody>
                                
                                   
                                   
                            </table> <a href="presenttraineedetails.php"><button type="button" style="margin-left:120px;" class="btn btn-primary">Edit</button></a>
                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-yellow">
                        <div class="panel-heading">
                                <h3 class="panel-title">LAST PAYMENT DETAILS</h3>
                            </div>
                            <div class="panel-default panel">
                        <div class="table-responsive ">
                            <table class="table table-bordered table-hover table-striped" style="width:90%; margin-left:5%;">
                                <thead>
                                    <tr >
                                        <th>DATE</th>
                                        <th>FEE(Rs.)</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
									 //$t_id=$_POST["t_id"];
								 $q2="select * from  tbl_fees where traineeid='$t'";
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
                    <div class="col-lg-4 text-center">
                         <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title">NEW PAYMENT DETAILS</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="panel-body panel-default panel text-justify alert-success alert">
                                <table>
                                <tr><td>DATE:-</td><td>&nbsp;&nbsp;</td><td><input type="date" name="date" style="width:150px;"/></td></tr>
								 <tr><td colspan="3">&nbsp;</td></tr>
                                <td>PAYMENT:-</td><td>&nbsp;&nbsp;</td><td><input type="text" name="amt" style="width:150px;"/></td></tr>
                                <tr><td colspan="3">&nbsp;</td></tr>
                               <tr><td colspan="3" align="center">
							  <input type="submit" class="btn btn-lg btn-primary" value="Add" name="submit">                        
							   </td></tr>
                                </table>
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

</body>
</html>