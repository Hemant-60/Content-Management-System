<?php
	session_start();
	unset($_SESSION["x"]);
	if($_SESSION["x"]==""){
		header('location:signin.php');
	}

?>