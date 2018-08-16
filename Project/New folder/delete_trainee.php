<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("TMS",$link);
$ab=$_GET['delete_id'];
$query="delete from trainee where id='$ab'";
$data=mysql_query($query);
if($data>0)
{
echo "<script>window.location.href='trainee manage.php'</script>";
}
else
{
echo "<script>alert('your record not deleted')
</script>";
}
?>