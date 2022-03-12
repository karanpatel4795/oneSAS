<?php
	session_start();
	ob_start();
	
	if(isset($_SESSION["user"]))
	{
		$uname = $_SESSION["user"];
	}
	else
	{
		$_SESSION["msg"]="Please Login first";
		header("location:login_users.php");
	}
?>