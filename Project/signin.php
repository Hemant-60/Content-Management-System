<?php
include("header.inc.php");

$link = mysql_connect("localhost","root","");
mysql_select_db("trainee",$link);

session_start();
?>
<center>
<div class="signin">
		<form name="form_signin" method="POST" >
		
		
		Email-Id:
			<input type="text" placeholder="Enter your Email-Id" name="email_in" id="email_in">
		Password:
			<input type="password" placeholder="Enter your Password" name="pass_in" id="pass_in">
		
	<input type="submit" name="login" id="login" value="Sign In">
	
</div>
</center>

<hr>

<?php

if(isset($_POST["login"])){
	$a=$_POST["email_in"];
	$b=$_POST["pass_in"];
		
	$_SESSION["x"]= $a;
	$_SESSION["y"]=$b;
		
	$query = "select * from admin where email = '$a' and pass = '$b'";
	$user=mysql_query("select uname from tbl_login where  email = '$a' and password = '$b'");
	$row =mysql_query($query);
	$_SESSION["z"]=$user;
	
	$data = mysql_fetch_array($row);
	
	if($data > 0){
		echo "<script>alert('Login Successfull')</script>;";
		echo "<script>window.location.href='dashboard.php'</script>";
	}else{
		echo"<script>alert('login Unsuccessfull')</script>";
	}
	
}

?>

</body>
</html>