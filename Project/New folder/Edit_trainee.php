<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("TMS",$link);

?>


<!DOCTYPE html>
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
<!-- connection start here-->

<script language="javascript" type="text/javascript">
/*$(function () {
    $("#fileupload1").change(function () {
        $("#dvPreview1").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
           
			
                if (typeof (FileReader) != "undefined") 
				{
                    $("#dvPreview1").show();
                    $("#dvPreview1").prepend("<img />");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#dvPreview1 img").attr("src", e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } 
				else 
				{
                    alert("This browser does not support FileReader.");
                }
            
        } 
		
		else 
		{
            alert("Please upload a valid image file.");
        }
    });
});*/
</script>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>Lalit Dubey</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>Lalit Dubey</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>Lalit Dubey</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Lalit Dubey <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="trainee manage.php"><i class="fa fa-fw fa-bar-chart-o"></i>Managment Trinee</a>
                    </li>
                    <li class="active">
                        <a href="manage fee.php"><i class="fa fa-fw fa-table"></i> Manage Fee</a>
                    </li>
                    <li>
                        <a href="Manage Enquiry.php"><i class="fa fa-fw fa-edit"></i> Manage Enqiery</a>
                    </li>
                    <li>
                        <a href="Manage admin.php"><i class="fa fa-fw fa-desktop"></i> Manage Admin</a>
                    </li>
                   
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
						<li>
                                <a href="center.php">CENTER</a>
                            </li>
                          <li>
                                <a href="allcourse.php">COURSE</a>
                            </li>
                            <li>
                                <a href="all_type.php">TYPE</a>
                            </li>
							<li>
                                <a href="ALL_DURA.php">DURATION</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" align="center">
                           <u> Present Trainee Details</u>
                            <small></small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
              
               <!-- /.col-sm-4 -->
                    <div class="col-sm-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                               <table>
							<tr>
                                <td><h3 class="panel-title" align="center"> Present Trainee Details</h3></td>
				
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<button type="button" class="btn btn-lg btn-success"><a href="Add new type.php">Add New Type</a></button></td></tr></table>
                            </div>
                            <div class="panel-body">
                           <div class="row">
                   <div class="col-lg-12">
                       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Father Name</th>
                                    
                                        <th>Mobile Number</th>
                                        <th>Total Fee</th>
                                        <th>Email id</th>
                                        
                                        
                                        <th>photo</th>
                                        <th>Action</th>
                                    </tr>
                                  </tr>
                                </thead>
                                <tbody>
								<?php
					   $id=$_GET["xyz"];
					   $query="select * from  trainee where id='$id'";
					   $data=mysql_query($query);
					   $row=mysql_fetch_array($data);
					  
					   ?>
                                    <tr class="active">
									
                                        <td>1</td>
                                        <td><?php echo $row["name"];?></td>
                                        <td><?php echo $row["father_name"];?></td>
                                        <td><?php echo $row["mobile_no"];?></td>
                                        <td><?php echo $row["total_fee"];?></td>
                                        <td><?php echo $row["email"];?></td>
										
                                        
                                        
                                          
                                           
                                            <td><img src="upload/<?php echo $row["photo"];?>" width="150" height="150"></td>
                                            <td><a href="#">Edit</a>&nbsp;&nbsp;<a href="#">Delete</a></td>
                                    </tr>
                                   
                                    
                                    
                                    
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                   <!-- second form start here--><div class="alert-danger">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" align="center">
                            <u>ADD NEW TRAINEE</u>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" method="post" enctype="multipart/form-data">

                           
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" placeholder="Enter Name" name="name" value="<?php echo $row["name"];?>"/>
                            </div>
                             <div class="form-group">
                                <label>Father Name</label>
                                <input class="form-control" placeholder="Enter Father Name" name="fname" value="<?php echo $row["father_name"];?>" />
                            </div>
                            

                             <div class="form-group">
                                <label>Mobile Number:</label>
                                <input class="form-control" placeholder="Enter Mobile Number" name="mo" value="<?php echo $row["mobile_no"];?>"/>
                            </div>
                            

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" placeholder="Enter Email" name="email"value="<?php echo $row["email"];?>"/>
                            </div>
                            

                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" name="adress" "></textarea>
                            </div>

                            <div class="form-group">
                                <label>Selects Course</label>
                                <select multiple class="form-control" name="scr[]" value=selected="<?php echo $row["course"]; ?>">
                                    <option>DOT NET</option>
                                    <option >PHP</option>
                                    <option >JAVA</option>
                                    
                                </select>
                            </div>

                            

                           
                            <div class="form-group">
                                <label>Select Gender</label>
                                <label class="radio-inline">
                           <input type="radio" name="gen" id="optionsRadiosInline1" value="Male" checked>Male
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="gen" id="optionsRadiosInline2" value="Female">Female
                                </label>
                               
                            </div>

                            
							<div class="form-group">
                                
                            </div>
                             

                            
                     
						

                    </div>
                    <div class="col-lg-6">
                    

                        
						<div class="form-group">
                                <label>DOJ</label>
                                <input type="date" class="form-control" name="doj"/>
                            </div>
							<label>DOB</label>
                                <input type="date" class="form-control" name="dob"/>
							<div class="form-group">
                                <label>Selects Duration</label>
                                <select class="form-control" name="course">
                                    <option>-Please Select-</option>
                                    <option>45 Days</option>
                                    <option>3 Months</option>
                                    <option>6 Months</option>
                                    
                                </select>
                            </div>

                            
					<ol class="breadcrumb">
                            <li>
                             <a href="index.html">IMAGE</a>
                            </li>
                            
                        </ol>
                        <div>
                        
                        <label><input type="file" name="img" value="browse" /></label>
						<img src="Sample Pictures/Penguins.jpg" height="150" width="150"/></div>
                      
                            
                            
								<label>Total Fee</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">Rs.</span>
                                <input type="text" class="form-control" name="fee" value="<?php echo $row["total_fee"];?>"/>

                                <span class="input-group-addon">.00</span>
                            </div>

                        

                       
                        <button type="submit" name="update" class="btn btn-lg btn-success">Upldate</button>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <button type="button" class="btn btn-lg btn-danger">RESET</button>
					</form>
                   
                    </div>
                </div>
                </div>
                            </div>
                        </div>
                    </div>
					<?php
					if(isset($_POST["update"]))
					{
					$name=$_POST["name"];
					$p=$_POST["fname"];
					$q=$_POST["mo"];
					$r=$_POST["email"];
					$s=$_POST["fee"];
					$img=$_FILES["ig"]["name"];
				   
					$type=$_FILES["ig"]["type"];
					$size=$_FILES["ig"]["size"];
					$store=$_FILES["ig"]["tmp_name"];
					move_uploaded_file($store,"upload/".$img);
					
					
					$query="update trainee set name='$name',father_name='$p'
					,mobile_no='$q',total_fee='$s',email='$r',photo='$img'
					WHERE id='$id'";
					$data=mysql_query($query);
					if($data>0)
					{
					echo "<script>alert('Data Update Sucessfully')</script>";
					echo "<script>window.location.href='trainee manage.php'</script>";
					}
					}
					?>
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
