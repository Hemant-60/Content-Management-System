<?php

$link=mysql_connect("localhost","root","");
mysql_select_db("trainee",$link);

$ab=$_GET['xyz'];
$query="delete from tbl_course where id='$ab'";
$data=mysql_query($query);
if($data>0){
	echo"<script>window.location.href='course_display.php'</script>";
} else{
	echo"<script>alert('your record not deleted')</script>";
}

?>