<?php
	session_start();
	ob_start();
	
	if(isset($_SESSION["admin"]))
	{
		$uname = $_SESSION["admin"];
	}
	else
	{
		$_SESSION["msg"]="Please Login first";
		header("location:index.php");
	}
?>