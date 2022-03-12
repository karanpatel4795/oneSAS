<?php
	if(!isset($_SESSION))
	{
		session_start();
	}
	ob_start();
	
	unset($_SESSION["admin"]);
	$_SESSION["msg"]="Logout Successfully";
	header("location:index.php");
?>