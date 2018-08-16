<?php
include("header.inc.php");
$link = mysql_connect("localhost","root","");
mysql_select_db("hello",$link);
?>
<center>
<div class="signup">
		<form name="form_signup" method="POST" >
		
		Full Name:
			<input type="text" placeholder="Enter your Full Name" name="name" id="name" required>
		Email-Id:
			<input type="email" placeholder="Enter your Email-Id" name="email" id="email" required>
		Password:
			<input type="password" placeholder="Enter your Password" name="pass" id="pass" required>
			Confirm Password:
			<input type="password" placeholder="Re-enter your Password" name="pass1" id="pass1" required>
		Phone Number:
			<input type="number" placeholder="Enter your Phone number" name="mobile" id="mobile" required>
		DOB:
		<input type="date" name="DOB" id="DOB"placeholder="Enter your Date of Birth" required>
		
		<input type="submit" name="submit" id="submit" value="SIGN UP, I agree to terms and conditions">
	</form>
</div>
</center>
	<!--<div class="hr">
	<hr >
	</div>-->

<?php
	if(isset($_POST["submit"])){
		$a=$_POST["name"];
		$b=$_POST["email"];
		$c=$_POST["pass"];
		$f=$_POST["pass1"];
		$d=$_POST["mobile"];
		$e=$_POST["DOB"];
		
		$query="insert into tbl_login set uname='$a',email='$b',password='$c',mobile='$d',DOB='$e'";
		$row=mysql_query($query);
		if($row > 0){
			if($c!=$f){
				echo "<script>alert('Password and Confirm Password should be same')</script>";
				
			}else {
				echo "<script>alert('Signin to continue')</script>";
				echo "<script>window.location.href='signin.php'</script>";
			}
		} else {
			echo "<script>alert('Sign up Failed!')</script>";
		}
	}

?>
	
</body>
</html>