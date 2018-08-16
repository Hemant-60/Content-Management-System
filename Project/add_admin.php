


<?php
$connect=mysql_connect("localhost","root","");
mysql_Select_db("trainee",$connect);
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

	
	
	
	<script src="jquery-2.2.0.min.js"></script>
	<script src="script.js"></script>
	
	
	
	
	
	
</head>

<body>

    <div id="wrapper">

        
          
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
					<li class="active">
                        <a href="signin.php"><i class="fa fa-fw fa-file"></i> Signin</a>
                    </li>
                    
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
				<div class="alert alert-success">
                <div class="row">
                 
                        <h1 class="page-header">
                            
                          <center> Add New Admin</center>
                        </h1>
						
						
						
						
						
						
						
						<form name="frm1" method="POST" enctype="multipart/form-data">
						
					<div class="col-lg-6">
					<center>
                                <label>Name</label>			
                                <input name ="name" id="name"class="form-control" placeholder="Enter Name">
								 <label>User Name</label>
                                <input class="form-control" name="uname" id="uname" placeholder="Enter UserName">
								 <label>Mobile Number:</label>
                                <input class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile no.">
								 <label>Email</label>
                                <input class="form-control" name="email" id="email"placeholder="Enter Email">
								 <label>Password</label>
                                <input type="password" class="form-control" name="pass" id="pass"placeholder="Enter Password">
								 <label>Confirm Password</label>
                                <input type="password" class="form-control" name="pass_c" id="pass_c"placeholder="Re-enter Password"><br>
							<div class="alert alert-danger">
							<u>IMAGE</u>
							<input name="image" type="file">
							</div>
							<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-success">
							<input type="reset" name="reset" value="Reset" class="btn btn-lg btn-danger">
						
                      </center>
                    </div>
				
					</form>
                </div>
                <!-- /.row -->
				
				<?php
	
	if(isset($_POST["submit"])){
		
		$a=$_POST["name"];
		$b=$_POST["uname"];
		$c=$_POST["mobile"];
		$d=$_POST["email"];
		$e=$_POST["pass"];
		$f=$_POST["pass_c"];
		
		
		//for image upload
		$img=$_FILES["image"]["name"];
		$type=$_FILES["image"]["type"];
		$size=$_FILES["image"]["size"];
		$store=$_FILES["image"]["tmp_name"];
		
		//for only supportive image format
		//condition given below
		
		$arr=explode('.',$img);
		$k=end($arr);
		$formate = array("jpg","png","gif","jpeg","PNG");
		
		if(in_array("$k",$formate)){
			move_uploaded_file($store,"upload_admin/".$img);
		
		
		$query="insert into admin set name='$a' ,uname='$b' , mobile = '$c' , email='$d' , pass = '$e', pic='$img' ";
		$row=mysql_query($query);
		
			if($row > 0){
				echo "<script>alert('Registration successfull')</script>";
				echo "<script>window.location.href='signin.php'</script>";
			}else{
				echo "<script>alert('Registration Unsuccessfull')</script>";
			}
		}
		else{
			echo"<script>alert('wrong picture format')</script>";
		}
	}


?>

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
	
	<script src="ckeditor/ckeditor.js" type="text/javascript">
	</script>
	<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
	

<?php
	
	if(isset($_POST["submit"])){
		
		$a=$_POST["name"];
		$b=$_POST["fname"];
		$c=$_POST["mobile"];
		$d=$_POST["email"];
		$e=$_POST["addr"];
		$f=$_POST["course"];
		$g=$_POST["gen"];
		$h=$_POST["doj"];
		$i=$_POST["dob"];
		$j=$_POST["duration"];
		$k=$_POST["price"];
		
		
		//for image upload
		$img=$_FILES["image"]["name"];
		$type=$_FILES["image"]["type"];
		$size=$_FILES["image"]["size"];
		$store=$_FILES["image"]["tmp_name"];
		
		//for only supportive image format
		//condition given below
		
		$arr=explode('.',$img);
		$k=end($arr);
		$formate = array("jpg","png","gif","jpeg","PNG");
		
		if(in_array("$k",$formate)){
			move_uploaded_file($store,"upload/".$img);
		
		
		$query="insert into tbl_reg set name='$a' , fname='$b' , mobile = '$c' , email='$d' , addr='$e' , course='$f' , gen='$g' , doj='$h' ,dob='$i' , duration='$j' , price='$k' , pic='$img' ";
		$row=mysql_query($query);
		
			if($row > 0){
				echo "<script>alert('Registration successfull')</script>";
				echo "<script>window.location.href='blank2.php'</script>";
			}else{
				echo "<script>alert('Registration Unsuccessfull')</script>";
			}
		}
		else{
			echo"<script>alert('wrong picture format')</script>";
		}
	}


?>


</body>

</html>
