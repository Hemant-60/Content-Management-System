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
                                        <h5 class="media-heading"><strong>Lalit Dubey</strong>
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
                                        <h5 class="media-heading"><strong>Lalit Dubey</strong>
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
                                        <h5 class="media-heading"><strong>Lalit Dubey</strong>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Lalit Dubey <b class="caret"></b></a>
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
                            <a href="log_out.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class=""></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="trainee manage.php"><img src="vista.jpg" height="20px" width="30px"> Managment Trinee</a>
                    </li>
                    <li class="active">
                        <a href="manage fee.php"><img src="Login_Icon.png" height="20px" width="30px"> Manage Fee</a>
                    </li>
                    <li>
                        <a href="Manage Enquiry.php"><i class=""></i> Manage Enqiery</a>
                    </li>
                    <li>
                        <a href="Manage admin.php"><i class=""></i> Manage Admin</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Master Entry <i class="fa fa-fw fa-caret-down"></i></a>
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
                    <div class="col-lg-12" >
                        <h1 class="page-header" class="alert-danger" align="center">
                            TRAINEE DETAILS
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

               <div class="col-lg-12 text-center">
                        <div class="panel panel-green">
                            <div class="panel-body">
                            <div class="col-lg-3" style="float:right"><a href="Add new trainee.php"   class="btn btn-lg btn-danger">Add New Trainee</a></div>
                               <div class="row">
                    <div class="col-lg-12">
                        <h2>Trainee Details</h2>
                        <div class="table-responsive">
						<form method="post">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>S.N</th>
										<th>Trainee_id</th>
                                        <th>Name</th>
                                        <th>Father Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>Total Fee(Rs.)</th>
                                        <th>Course</th>
										<th>Duration</th>
                                        <th>photo</th>
                                        <th>Action</th>
                                    </tr>
                                  </tr>
                                </thead>
                                <tbody>
								<script>
					function del_id(id)
					{
						if(confirm('Sure to delete this record ?'))
						{
						window.location='delete_trainee.php?delete_id='+id;
						}
					}
								</script>
								<?php				
				$query="select * from trainee";
				$row=mysql_query($query);
				$count=1;
				while($data=mysql_fetch_array($row))
				{
				
				?>
											<tr class="danger">
                                        <td><?php echo $count?></td>
										<td><?php echo $data["Trainee_id"]?></td>
                                        <td><?php echo $data["name"];?></td>
                                        <td><?php echo $data["father_name"];?></td>
                                        <td><?php echo $data["mobile_no"];?></td>
                                         <td><?php echo $data["email"];?></td>
                                          <td><?php echo $data["total_fee"];?></td>
							
							
							
							
                                          <?php
                                            $course_id= $data["course"];
											$q_course=mysql_query("select * from course where id='$course_id'");
											$data_course=mysql_fetch_array($q_course);
											
											
										  ?>
										  <td><?php echo $data['course'];?></td>
										  
										 <?php
									$duration_id=$data["select_duration"];
									$p_duration=mysql_query("select * from duration where id='$duration_id'");
									$data_duration=mysql_fetch_array($p_duration);
									?>
									<td><?php echo $data_duration['duration_type'];?></td>
										  
										  
										  
  <td><img src="upload/<?php echo $data['photo'];?>" width="150" height="150"></td>
<td><a href="Edit_trainee.php?xyz=<?php echo $data["id"];?>">Edit</a>&nbsp;&nbsp;
<a href="javascript:del_id(<?php echo $data["id"]; ?>)">
DElete</a></td>
                                    </tr>
                                    
                                 <?php 
								  $count++;
								   }
								  
								   ?>
								  
                                    
                                    
                                   
                                </tbody>
                            </table>
							</form>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>

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
