<?php
	session_start();
	ob_start();
	
	if(isset($_SESSION["provider"]))
	{
		$uname = $_SESSION["provider"];
	}
	else
	{
		$_SESSION["msg"]="Please Login first";
		header("location:index.php");
	}
?>