<?php
	if(!isset($_SESSION))
	{
		session_start();
	}
	ob_start();
	
	unset($_SESSION["user"]);
	$_SESSION["msg"]="Logout Successfully";
	header("location:index.php");
?>